<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HasilUjianController extends Controller
{
    public function index()
    {
        $title = 'Hasil Ujian';
        $breadcrumbs = ['Dashboard', 'Hasil Ujian'];

        // Ambil data hasil ujian siswa yang statusnya "selesai"
        $hasilUjian = DB::table('siswa_ujians as su')
            ->join('users as s', 'su.siswa_id', '=', 's.id')
            ->join('ujians as u', 'su.ujian_id', '=', 'u.id')
            ->where('su.status', 'selesai')
            ->select(
                's.name as nama_siswa',
                'u.nama_ujian',
                'u.jadwal',
                'su.waktu_mulai',
                'su.waktu_selesai',
                'su.nilai',
                'su.siswa_id',
                'su.ujian_id'
            )
            ->orderBy('u.jadwal', 'desc')
            ->get();

        return view('management.hasil_ujian.index', compact('title', 'breadcrumbs', 'hasilUjian'));
    }

    public function exportPerUjianPdf($siswa_id, $ujian_id)
    {
        $hasil = DB::table('siswa_ujians as su')
            ->join('users as s', 'su.siswa_id', '=', 's.id')
            ->join('ujians as u', 'su.ujian_id', '=', 'u.id')
            ->where('su.siswa_id', $siswa_id)
            ->where('su.ujian_id', $ujian_id)
            ->where('su.status', 'selesai')
            ->select(
                's.name as nama_siswa',
                'u.nama_ujian',
                'u.jadwal',
                'su.waktu_mulai',
                'su.waktu_selesai',
                'su.nilai'
            )
            ->first();

        if (!$hasil) {
            abort(404, 'Data tidak ditemukan.');
        }

        $pdf = Pdf::loadView('management.hasil_ujian.pdf_per_ujian', [
            'hasil' => $hasil,
            'sekolah' => 'SMA NEGERI 1 RAJAGALUH',
            'alamat' => 'Jl. Pendidikan No. 123, Rajagaluh, Majalengka',
        ]);

        return $pdf->stream('Hasil_Ujian_' . $hasil->nama_siswa . '.pdf');
    }
}
