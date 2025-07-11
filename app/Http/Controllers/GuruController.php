<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class GuruController extends Controller
{
    public function index()
    {
        $dataGuru = User::where('role', 'guru')->get();
        return view('data_guru.index', compact('dataGuru'));
    }

    public function store(Request $request)
    {
        // Validasi manual (bisa pakai FormRequest juga)
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

        // Simpan sebagai user role guru
        $user = new User();
        $user->name     = $request->nama;
        $user->email    = $request->email;
        $user->password = Hash::make($request->password);
        $user->role     = 'guru'; // pastikan kolom ini ada di tabel users
        $user->save();

        return response()->json([
            'status'  => 'success',
            'message' => 'Data guru berhasil disimpan!'
        ]);
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
            'message' => 'Data guru berhasil diperbarui.'
        ]);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // Pastikan hanya hapus guru
        if ($user->role !== 'guru') {
            return response()->json([
                'status' => 'error',
                'message' => 'User ini bukan guru.'
            ]);
        }

        $user->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Data guru berhasil dihapus.'
        ]);
    }
}
