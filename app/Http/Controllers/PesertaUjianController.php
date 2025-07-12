<?php

namespace App\Http\Controllers;

use App\Models\SiswaUjian;
use App\Models\Ujian;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesertaUjianController extends Controller
{
    public function index()
    {
        // Ambil semua data peserta ujian beserta relasi siswa dan ujian
        $peserta = DB::table('siswa_ujians as su')
            ->leftJoin('users as u', 'su.siswa_id', '=', 'u.id')
            ->leftJoin('ujians as uj', 'su.ujian_id', '=', 'uj.id')
            ->select(
                'su.id as peserta_id',
                'u.name as siswa_nama',
                'uj.nama_ujian',
                'su.status',
                'su.waktu_mulai',
                'su.waktu_selesai'
            )
            ->get();

        // Ambil semua siswa yang memiliki role 'siswa'
        $siswa = DB::table('users')->where('role', 'siswa')->get();

        // Ambil semua ujian
        $ujian = DB::table('ujians')->get();

        return view('management.peserta.index', compact('peserta', 'siswa', 'ujian'));
    }

    public function create()
    {
        $siswas = User::where('role', 'siswa')->get();
        $ujians = Ujian::all();

        return view('peserta.create', compact('siswas', 'ujians'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required|exists:users,id',
            'ujian_id' => 'required|exists:ujian,id',
        ]);

        $exists = SiswaUjian::where('siswa_id', $request->siswa_id)
            ->where('ujian_id', $request->ujian_id)
            ->first();

        if ($exists) {
            return redirect()->back()->with('error', 'Siswa sudah terdaftar di ujian ini.');
        }

        SiswaUjian::create([
            'siswa_id' => $request->siswa_id,
            'ujian_id' => $request->ujian_id,
            'status'   => 'belum',
        ]);

        return redirect()->route('peserta.index')->with('success', 'Peserta berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $peserta = SiswaUjian::findOrFail($id);
        $peserta->delete();

        return response()->json(['status' => 'success', 'message' => 'Peserta berhasil dihapus.']);
    }
}
