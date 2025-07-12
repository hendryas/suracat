<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SiswaController extends Controller
{
    public function index()
    {
        $dataSiswa = User::where('role', 'siswa')->get();

        $title = 'Data Siswa';
        $breadcrumbs = [
            'Home' => route('dashboard'),  // sesuaikan dengan route kamu
            'Management' => '#',
            'Data Siswa' => '' // terakhir (tidak pakai URL)
        ];

        return view('management.siswa.index', compact('dataSiswa', 'title', 'breadcrumbs'));
    }

    public function create()
    {
        // Jika kamu ingin pakai halaman terpisah (opsional)
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->errors()->first()
            ], 422);
        }

        $user = new User();
        $user->name     = $request->nama;
        $user->email    = $request->email;
        $user->password = Hash::make($request->password);
        $user->role     = 'siswa';
        $user->save();

        return response()->json([
            'status'  => 'success',
            'message' => 'Data siswa berhasil disimpan!'
        ]);
    }

    public function edit($id)
    {
        $siswa = User::findOrFail($id);
        return response()->json($siswa); // digunakan untuk modal edit AJAX
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        $user = User::findOrFail($id);
        $user->name  = $request->name;
        $user->email = $request->email;
        $user->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Data siswa berhasil diperbarui.'
        ]);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if ($user->role !== 'siswa') {
            return response()->json([
                'status' => 'error',
                'message' => 'User ini bukan siswa.'
            ]);
        }

        $user->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Data siswa berhasil dihapus.'
        ]);
    }
}
