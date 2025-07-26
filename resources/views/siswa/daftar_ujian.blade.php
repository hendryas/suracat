@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @include('layouts.partials.page-title', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
        ])

        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Data Siswa</h4>
                            </div><!--end col-->
                        </div> <!--end row-->
                    </div><!--end card-header-->
                    <div class="pt-0 card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Ujian</th>
                                        <th>Jadwal</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($daftarUjian as $i => $ujian)
                                        <tr>
                                            <td>{{ $i + 1 }}</td>
                                            <td>{{ $ujian->nama_ujian }}</td>
                                            <td>{{ \Carbon\Carbon::parse($ujian->jadwal)->format('d/m/Y H:i') }}</td>
                                            <td>
                                                @if ($ujian->status == 'belum')
                                                    <span class="badge bg-secondary">Belum Mulai</span>
                                                @elseif($ujian->status == 'sedang')
                                                    <span class="badge bg-warning">Sedang Dikerjakan</span>
                                                @elseif($ujian->status == 'selesai')
                                                    <span class="badge bg-success">Selesai</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($ujian->status != 'selesai')
                                                    <a href="{{ route('ujian.mulai', $ujian->ujian_id) }}"
                                                        class="btn btn-sm btn-primary">
                                                        Mulai Ujian
                                                    </a>
                                                @else
                                                    <span class="text-muted">Sudah Selesai</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
        </div><!--end row-->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}'
            });
        </script>
    @endif
@endsection
