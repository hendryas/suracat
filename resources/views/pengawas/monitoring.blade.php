@extends('layouts.app')

@section('content')
    <style>
        #videos video {
            max-width: 100%;
            border: 2px solid #007bff;
            border-radius: 10px;
        }
    </style>

    <style>
        .video-grid {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            max-width: 640px;
            gap: 10px;
        }

        .video-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 5px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border: 2px solid #007bff;
            width: 200px;
        }

        .video-box video {
            width: 100%;
            height: auto;
            border-radius: 6px;
        }
    </style>
    <div class="container-fluid">
        @include('layouts.partials.page-title', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
        ])

        <div class="card">
            <div class="card-header">
                <h4 class="mb-0 card-title">Monitoring Siswa – {{ $ujian->nama_ujian }}</h4>
            </div>
            <div class="card-body">
                <div id="videos-container" class="video-grid"></div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.socket.io/4.7.2/socket.io.min.js"></script>
    <script>
        const socket = io("http://localhost:3000");

        const roomId = @json(Str::slug($ujian->nama_ujian));
        const userId = @json(Auth::user()->name); // nama pengawas

        const peers = {}; // Menyimpan peer per siswa
        const iceCandidateQueue = {}; // Buffer kandidat jika remote belum siap

        console.log("📡 Pengawas join:", roomId, userId);
        socket.emit("join-room", roomId, userId);

        // === Handle signal dari siswa ===
        socket.on("signal", async (data) => {
            const fromUserId = data.from;

            if (!data || (!data.signal && !data.candidate)) {
                console.warn("❌ Data signal kosong:", data);
                return;
            }

            if (data.signal?.type === "offer") {
                console.log("📨 Terima OFFER dari:", fromUserId);
                await handleOffer(fromUserId, data.signal);
            } else if (data.signal?.type === "answer") {
                console.log("📨 Terima ANSWER (harusnya tidak terjadi di pengawas) dari:", fromUserId);
            } else if (data.candidate) {
                if (peers[fromUserId] && peers[fromUserId].remoteDescription) {
                    try {
                        await peers[fromUserId].addIceCandidate(new RTCIceCandidate(data.candidate));
                    } catch (err) {
                        console.error("❌ Gagal addIceCandidate langsung:", err);
                    }
                } else {
                    if (!iceCandidateQueue[fromUserId]) {
                        iceCandidateQueue[fromUserId] = [];
                    }
                    iceCandidateQueue[fromUserId].push(new RTCIceCandidate(data.candidate));
                    console.log("📥 Buffer ICE Candidate untuk:", fromUserId);
                }
            }
        });

        // === Proses OFFER dari siswa ===
        async function handleOffer(fromUserId, offer) {
            const peer = new RTCPeerConnection({
                iceServers: [{
                    urls: "stun:stun.l.google.com:19302"
                }]
            });

            peers[fromUserId] = peer;

            peer.onicecandidate = (event) => {
                if (event.candidate) {
                    socket.emit("signal", {
                        from: userId,
                        to: fromUserId,
                        candidate: event.candidate
                    });
                }
            };

            peer.ontrack = (event) => {
                console.log("📹 Menampilkan stream dari:", fromUserId);

                const video = document.createElement("video");
                video.srcObject = event.streams[0];
                video.autoplay = true;
                video.playsInline = true;
                video.setAttribute("data-peer", fromUserId);
                video.muted = true;

                const label = document.createElement("div");
                label.innerText = fromUserId;
                label.classList.add("fw-bold", "text-center");

                const container = document.createElement("div");
                container.classList.add("video-box");
                container.appendChild(label);
                container.appendChild(video);

                document.getElementById("videos-container").appendChild(container);
            };

            try {
                await peer.setRemoteDescription(new RTCSessionDescription(offer));

                // Proses kandidat ICE yang sempat dibuffer
                if (iceCandidateQueue[fromUserId]) {
                    for (const candidate of iceCandidateQueue[fromUserId]) {
                        await peer.addIceCandidate(candidate);
                    }
                    delete iceCandidateQueue[fromUserId];
                }

                const answer = await peer.createAnswer();
                await peer.setLocalDescription(answer);

                socket.emit("signal", {
                    from: userId,
                    to: fromUserId,
                    signal: peer.localDescription
                });
            } catch (error) {
                console.error("❌ Gagal proses OFFER dari:", fromUserId, error);
            }
        }
    </script>
@endsection
