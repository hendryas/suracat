<?php

namespace App\Http\Controllers\Pengawas;

use App\Http\Controllers\Controller;
use App\Models\Ujian;
use Illuminate\Http\Request;

class MonitoringUjianController extends Controller
{
    public function daftarUjian()
    {
        $title = 'Monitoring Ujian';
        $breadcrumbs = [
            'Home' => route('dashboard'),  // sesuaikan dengan route kamu
            'Management' => '#',
            'Monitoring Ujian' => '' // terakhir (tidak pakai URL)
        ];

        $ujians = Ujian::where('status', 'aktif')->get();
        return view('pengawas.list_ujian', compact('ujians', 'title', 'breadcrumbs'));
    }

    public function showMonitoring($ujian_id)
    {
        $title = 'Monitoring Ujian';
        $breadcrumbs = [
            'Home' => route('dashboard'),  // sesuaikan dengan route kamu
            'Management' => '#',
            'Monitoring Ujian' => '' // terakhir (tidak pakai URL)
        ];

        $ujian = Ujian::findOrFail($ujian_id);
        return view('pengawas.monitoring', compact('ujian', 'title', 'breadcrumbs'));
    }
}
