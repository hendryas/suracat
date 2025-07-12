<?php

namespace App\Http\Controllers;

use App\Models\SiswaUjian;
use App\Models\Soal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UjianSiswaController extends Controller
{
    public function daftarUjian()
    {
        $daftarUjian = DB::table('siswa_ujians as su')
            ->leftJoin('ujians as uj', 'su.ujian_id', '=', 'uj.id')
            ->where('su.siswa_id', 3)
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
        $peserta = SiswaUjian::where('siswa_id', 3)
            ->where('ujian_id', $id)
            ->firstOrFail();

        // Jika status belum, mulai sesi
        if ($peserta->status === 'belum') {
            // Ambil semua ID soal yang terkait ujian ini
            $soal_ids = DB::table('ujian_soal')
                ->where('ujian_id', $id)
                ->pluck('soal_id')
                ->toArray();

            shuffle($soal_ids); // acak ID-nya

            $peserta->shuffled_soal = json_encode($soal_ids);
            $peserta->waktu_mulai = now();
            $peserta->status = 'sedang';
            $peserta->save();
        } else {
            $soal_ids = json_decode($peserta->shuffled_soal);
        }

        // Ambil soal berdasarkan urutan shuffled_soal
        $soal = Soal::whereIn('id', $soal_ids)
            ->get()
            ->sortBy(function ($item) use ($soal_ids) {
                return array_search($item->id, $soal_ids);
            });

        $ujian = DB::table('ujians')->where('id', $id)->first();

        $durasi = $ujian->durasi_menit; // misal 30
        $waktu_mulai = Carbon::parse($peserta->waktu_mulai);
        $sisa_detik = max(0, ($durasi * 60) - now()->diffInSeconds($waktu_mulai));

        // jangan kurang dari 0
        $sisa_detik = max(0, $sisa_detik);

        return view('siswa.kerjakan_ujian', compact('soal', 'ujian', 'peserta', 'sisa_detik'));
    }

    public function submitUjian(Request $request, $id)
    {
        $siswaId = auth()->id();
        $jawaban = $request->input('jawaban', []);

        $peserta = DB::table('siswa_ujians')
            ->where('siswa_id', 2)
            ->where('ujian_id', $id)
            ->first();

        if (!$peserta) {
            return redirect()->back()->with('error', 'Data peserta tidak ditemukan.');
        }

        // Hitung nilai
        $jumlahBenar = 0;
        $jumlahSoal = count($jawaban);

        foreach ($jawaban as $soalId => $jawab) {
            $soal = DB::table('soal_bank')->find($soalId);
            if ($soal && strtolower($soal->jawaban_benar) == strtolower($jawab)) {
                $jumlahBenar++;
            }
        }

        $nilai = $jumlahSoal > 0 ? ($jumlahBenar / $jumlahSoal) * 100 : 0;

        // Update peserta ujian
        DB::table('siswa_ujians')
            ->where('id', $peserta->id)
            ->update([
                'waktu_selesai' => Carbon::now(),
                'status' => 'selesai',
                'nilai' => $nilai,
            ]);

        return redirect()->route('ujian.daftar')->with('success', '✅ Ujian berhasil dikumpulkan. Nilai Anda: ' . round($nilai, 2));
    }
}
