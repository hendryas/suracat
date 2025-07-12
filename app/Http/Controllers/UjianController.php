<?php

namespace App\Http\Controllers;

use App\Models\Ujian;
use Illuminate\Http\Request;

class UjianController extends Controller
{
    public function index()
    {
        $ujians = Ujian::all();
        return view('management.ujian.index', compact('ujians'));
    }

    public function create()
    {
        return view('management.ujian.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_ujian' => 'required',
            'durasi_menit' => 'required|numeric',
            'jadwal' => 'required|date',
        ]);

        Ujian::create([
            'nama_ujian' => $request->nama_ujian,
            'durasi_menit' => $request->durasi_menit,
            'jadwal' => $request->jadwal,
            'status' => 'aktif',
            'created_by' => auth()->id() ?? 1
        ]);

        return response()->json(['success' => true]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_ujian' => 'required',
            'durasi_menit' => 'required|numeric',
            'jadwal' => 'required|date',
        ]);

        $ujian = Ujian::findOrFail($id);
        $ujian->update([
            'nama_ujian' => $request->nama_ujian,
            'durasi_menit' => $request->durasi_menit,
            'jadwal' => $request->jadwal,
        ]);

        return response()->json(['success' => true]);
    }

    public function destroy($id)
    {
        $ujian = Ujian::findOrFail($id);
        $ujian->delete();

        return response()->json(['success' => true]);
    }
}
