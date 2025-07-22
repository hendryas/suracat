<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use App\Models\Ujian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoalController extends Controller
{
    public function index()
    {
        $dataSoal = Soal::latest()->get();

        $title = 'Soal';
        $breadcrumbs = [
            'Home' => route('dashboard'),  // sesuaikan dengan route kamu
            'Management' => '#',
            'Soal' => '' // terakhir (tidak pakai URL)
        ];

        return view('management.soal.index', compact('dataSoal', 'title', 'breadcrumbs'));
    }

    public function create()
    {
        $title = 'Soal';
        $breadcrumbs = [
            'Home' => route('dashboard'),  // sesuaikan dengan route kamu
            'Management' => '#',
            'Soal' => '' // terakhir (tidak pakai URL)
        ];

        $kategoriList = Ujian::pluck('nama_ujian');

        return view('management.soal.create', compact('title', 'breadcrumbs', 'kategoriList'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_soal'      => 'required|unique:soal_bank,kode_soal',
            'pertanyaan'     => 'required',
            'opsi_a'         => 'required',
            'opsi_b'         => 'required',
            'opsi_c'         => 'required',
            'opsi_d'         => 'required',
            'opsi_e'         => 'required',
            'jawaban_benar'  => 'required|in:A,B,C,D,E',
        ]);

        Soal::create([
            'kode_soal'      => $request->kode_soal,
            'pertanyaan'     => $request->pertanyaan,
            'opsi_a'         => $request->opsi_a,
            'opsi_b'         => $request->opsi_b,
            'opsi_c'         => $request->opsi_c,
            'opsi_d'         => $request->opsi_d,
            'opsi_e'         => $request->opsi_e,
            'jawaban_benar'  => $request->jawaban_benar,
            'kategori'       => $request->kategori,
            'created_by'     => auth()->id()
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Soal berhasil disimpan!'
        ]);
    }

    public function edit($id)
    {
        $soal = Soal::findOrFail($id);

        $kategoriList = Ujian::pluck('nama_ujian'); // kategori = nama ujian
        return view('management.soal.edit', compact('soal', 'kategoriList'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pertanyaan'     => 'required',
            'opsi_a'         => 'required',
            'opsi_b'         => 'required',
            'opsi_c'         => 'required',
            'opsi_d'         => 'required',
            'opsi_e'         => 'required',
            'jawaban_benar'  => 'required|in:A,B,C,D,E',
        ]);

        $soal = Soal::findOrFail($id);
        $soal->update($request->only([
            'pertanyaan',
            'opsi_a',
            'opsi_b',
            'opsi_c',
            'opsi_d',
            'opsi_e',
            'jawaban_benar',
            'kategori'
        ]));

        return response()->json([
            'status' => 'success',
            'message' => 'Soal berhasil diperbarui.'
        ]);
    }

    public function destroy($id)
    {
        $soal = Soal::findOrFail($id);
        $soal->delete();

        return response()->json(['status' => 'success', 'message' => 'Soal berhasil dihapus.']);
    }
}
