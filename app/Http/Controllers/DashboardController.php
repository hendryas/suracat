<?php

namespace App\Http\Controllers;

use App\Models\SiswaUjian;
use App\Models\User;
use App\Models\Soal;
use App\Models\Ujian;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function admin()
    {
        $title = 'Dashboard Admin';
        $breadcrumbs = [
            'Home' => route('dashboard'),
            'Dashboard' => '#'
        ];

        // ✅ Hitung berdasarkan role di tabel users
        $totalGuru   = User::where('role', 'guru')->count();
        $totalSiswa  = User::where('role', 'siswa')->count();
        $totalSoal   = Soal::count();
        $totalUjian  = Ujian::count();

        return view('dashboard.dashboard_admin', compact(
            'title',
            'breadcrumbs',
            'totalGuru',
            'totalSiswa',
            'totalSoal',
            'totalUjian'
        ));
    }

    public function guru()
    {
        $title = 'Dashboard Guru';
        $breadcrumbs = [
            'Home' => route('dashboard.guru'),
            'Dashboard Guru' => '#'
        ];

        $guruId = Auth::id();
        $jumlahSoal  = Soal::where('created_by', $guruId)->count();
        $jumlahUjian = Ujian::where('created_by', $guruId)->count();

        return view('dashboard.dashboard_guru', compact(
            'title',
            'breadcrumbs',
            'jumlahSoal',
            'jumlahUjian'
        ));
    }

    public function siswa()
    {
        $title = 'Dashboard Siswa';
        $breadcrumbs = [
            'Home' => route('dashboard.siswa'),
            'Dashboard Siswa' => '#'
        ];

        $siswaId = Auth::id();
        $totalUjianTersedia = Ujian::where('status', 'aktif')->count();
        $totalUjianSelesai = SiswaUjian::where('siswa_id', Auth::id())
            ->whereNotNull('waktu_selesai')
            ->count();
        $nilaiTertinggi = SiswaUjian::where('siswa_id', $siswaId)
            ->where('status', 'selesai')
            ->max('nilai') ?? 0;

        return view('dashboard.dashboard_siswa', compact(
            'title',
            'breadcrumbs',
            'totalUjianTersedia',
            'totalUjianSelesai',
            'nilaiTertinggi'
        ));
    }

    public function pengawas()
    {
        $title = 'Dashboard Pengawas';
        $breadcrumbs = [
            'Home' => route('dashboard.pengawas'),
            'Dashboard Pengawas' => '#'
        ];

        // Jumlah ujian aktif
        $totalUjianAktif = Ujian::where('status', 'aktif')->count();

        // Jumlah peserta ujian yang sedang mengerjakan (belum selesai)
        $totalPesertaUjian = SiswaUjian::where('status', 'sedang')->count();

        return view('dashboard.dashboard_pengawas', compact(
            'title',
            'breadcrumbs',
            'totalUjianAktif',
            'totalPesertaUjian'
        ));
    }
}
