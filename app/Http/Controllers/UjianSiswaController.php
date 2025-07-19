<?php

namespace App\Http\Controllers;

use App\Models\JawabanSiswa;
use App\Models\SiswaUjian;
use App\Models\Soal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UjianSiswaController extends Controller
{
    public function daftarUjian()
    {
        $siswa_id = auth()->id();

        $daftarUjian = DB::table('siswa_ujians as su')
            ->leftJoin('ujians as uj', 'su.ujian_id', '=', 'uj.id')
            ->where('su.siswa_id', $siswa_id)
            ->select(
                'su.id as peserta_id',
                'su.status',
                'su.waktu_mulai',
                'su.waktu_selesai',
                'uj.id as ujian_id',
                'uj.nama_ujian',
                'uj.jadwal',
                'uj.durasi_menit'
            )
            ->get();

        return view('siswa.daftar_ujian', compact('daftarUjian'));
    }

    public function mulaiUjian($id)
    {
        $siswa_id = auth()->id();

        // Cek apakah siswa sudah terdaftar di ujian
        $peserta = SiswaUjian::where('siswa_id', $siswa_id)
            ->where('ujian_id', $id)
            ->firstOrFail();

        // Jika status belum, maka ambil soal acak dan simpan ke siswa_ujian
        if ($peserta->status === 'belum') {
            $selected_soal_ids = Soal::inRandomOrder()
                ->limit(10)
                ->pluck('id')
                ->toArray();

            $peserta->shuffled_soal = json_encode($selected_soal_ids);
            $peserta->waktu_mulai = now();
            $peserta->status = 'sedang';
            $peserta->save();
        } else {
            $selected_soal_ids = json_decode($peserta->shuffled_soal);
        }

        // Ambil dan urutkan soal
        $soal = Soal::whereIn('id', $selected_soal_ids)
            ->get()
            ->sortBy(function ($item) use ($selected_soal_ids) {
                return array_search($item->id, $selected_soal_ids);
            });

        $ujian = DB::table('ujians')->where('id', $id)->first();

        // Hitung sisa waktu
        $durasi = $ujian->durasi_menit;
        $waktu_mulai = Carbon::parse($peserta->waktu_mulai);
        $sisa_detik = max(0, ($durasi * 60) - now()->diffInSeconds($waktu_mulai));

        return view('siswa.kerjakan_ujian', compact('soal', 'ujian', 'peserta', 'sisa_detik'));
    }


    public function submitUjian(Request $request, $id)
    {
        $siswaId = auth()->id();
        $jawabanInput = $request->input('jawaban', []);

        // Cek peserta
        $peserta = SiswaUjian::where('siswa_id', $siswaId)
            ->where('ujian_id', $id)
            ->first();

        if (!$peserta) {
            return redirect()->back()->with('error', 'Data peserta tidak ditemukan.');
        }

        $jumlahBenar = 0;
        $jumlahSoal = count($jawabanInput);

        foreach ($jawabanInput as $soalId => $jawab) {
            $soal = Soal::find($soalId);

            $isCorrect = null;
            if ($soal) {
                $isCorrect = strtolower($soal->jawaban_benar) === strtolower($jawab);
                if ($isCorrect) {
                    $jumlahBenar++;
                }
            }

            // Simpan jawaban siswa
            JawabanSiswa::create([
                'siswa_id' => $siswaId,
                'ujian_id' => $id,
                'soal_id' => $soalId,
                'jawaban' => strtoupper($jawab),
                'is_correct' => $isCorrect,
                'waktu_dijawab' => now(),
            ]);
        }

        // Hitung nilai
        $nilai = $jumlahSoal > 0 ? ($jumlahBenar / $jumlahSoal) * 100 : 0;

        // Update status peserta ujian
        $peserta->update([
            'waktu_selesai' => now(),
            'status' => 'selesai',
            'nilai' => $nilai,
        ]);

        return redirect()->route('ujian.daftar')
            ->with('success', '✅ Ujian berhasil dikumpulkan. Nilai Anda: ' . round($nilai, 2));
    }
}
