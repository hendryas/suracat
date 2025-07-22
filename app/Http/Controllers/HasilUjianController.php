<?php

namespace App\Http\Controllers;

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
                'su.nilai'
            )
            ->orderBy('u.jadwal', 'desc')
            ->get();

        return view('management.hasil_ujian.index', compact('title', 'breadcrumbs', 'hasilUjian'));
    }
}
