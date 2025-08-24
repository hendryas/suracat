<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HasilUjianController;
use App\Http\Controllers\Pengawas\MonitoringUjianController;
use App\Http\Controllers\PesertaUjianController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\UjianController;
use App\Http\Controllers\UjianSiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::redirect('/', '/login');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Dashboard untuk masing-masing role
Route::middleware('auth')->group(function () {
    Route::get('/dashboard-guru', [DashboardController::class, 'guru'])->name('dashboard.guru');
    Route::get('/dashboard-siswa', [DashboardController::class, 'siswa'])->name('dashboard.siswa');
    Route::get('/dashboard-pengawas', [DashboardController::class, 'pengawas'])->name('dashboard.pengawas');
    Route::get('/dashboard', [DashboardController::class, 'admin'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
    // Route Manajemen Guru
    Route::get('/guru', [GuruController::class, 'index'])->name('guru.index');
    Route::get('/guru/create', [GuruController::class, 'create'])->name('guru.create');
    Route::post('/guru', [GuruController::class, 'store'])->name('guru.store');
    Route::get('/guru/{id}/edit', [GuruController::class, 'edit'])->name('guru.edit');
    Route::put('/guru/{id}', [GuruController::class, 'update'])->name('guru.update');
    Route::delete('/guru/{id}', [GuruController::class, 'destroy'])->name('guru.destroy');

    // Route Manajemen Siswa
    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
    Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
    Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
    Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
    Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');
    Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

    // Route Manajemen Soal Ujian
    Route::get('/soal', [SoalController::class, 'index'])->name('soal.index');
    Route::get('/soal/create', [SoalController::class, 'create'])->name('soal.create');
    Route::post('/soal', [SoalController::class, 'store'])->name('soal.store');
    Route::get('/soal/{id}/edit', [SoalController::class, 'edit'])->name('soal.edit');
    Route::put('/soal/{id}', [SoalController::class, 'update'])->name('soal.update');
    Route::delete('/soal/{id}', [SoalController::class, 'destroy'])->name('soal.destroy');

    // Route Manajemen Ujian
    Route::get('/ujian', [UjianController::class, 'index'])->name('ujian.index');
    Route::get('/ujian/create', [UjianController::class, 'create'])->name('ujian.create');
    Route::post('/ujian', [UjianController::class, 'store'])->name('ujian.store');
    Route::get('/ujian/{id}/edit', [UjianController::class, 'edit'])->name('ujian.edit');
    Route::put('/ujian/{id}', [UjianController::class, 'update'])->name('ujian.update');
    Route::delete('/ujian/{id}', [UjianController::class, 'destroy'])->name('ujian.destroy');

    // Route Manajemen Peserta Ujian
    Route::get('/peserta-ujian', [PesertaUjianController::class, 'index'])->name('peserta.index');
    Route::get('/peserta-ujian/create', [PesertaUjianController::class, 'create'])->name('peserta.create');
    Route::post('/peserta-ujian', [PesertaUjianController::class, 'store'])->name('peserta.store');
    Route::delete('/peserta-ujian/{id}', [PesertaUjianController::class, 'destroy'])->name('peserta.destroy');
    Route::put('/peserta-ujian/{id}', [PesertaUjianController::class, 'update'])->name('peserta.update');


    // Hasil Ujian Seluruh Siswa
    Route::get('/hasil-ujian', [HasilUjianController::class, 'index'])->name('admin.hasil-ujian');
    Route::get('/hasil-ujian/{siswa_id}/{ujian_id}/cetak', [HasilUjianController::class, 'exportPerUjianPdf'])->name('hasil-ujian.export-pdf-per-ujian');
});

Route::prefix('siswa')->middleware(['auth'])->group(function () {
    // ujian siswa
    Route::get('/ujian-saya', [UjianSiswaController::class, 'daftarUjian'])->name('ujian.daftar');
    Route::get('/ujian/{id}/mulai', [UjianSiswaController::class, 'mulaiUjian'])->name('ujian.mulai');
    Route::post('/ujian/{id}/submit', [UjianSiswaController::class, 'submitUjian'])->name('ujian.submit');

    Route::get('/hasil-ujian', [UjianSiswaController::class, 'hasilUjian'])->name('ujian.hasil');
    // Hasil Ujian Siswa - Cetak PDF
    Route::get('/hasil-ujian/cetak/{ujian_id}', [UjianSiswaController::class, 'cetakHasilUjian'])->name('siswa.hasil-ujian.cetak');
});

Route::prefix('pengawas')->middleware(['auth'])->group(function () {
    // Daftar semua ujian yang aktif
    Route::get('/monitoring', [MonitoringUjianController::class, 'daftarUjian'])->name('monitoring.ujian');

    // Lihat siswa sedang ujian (per ujian)
    Route::get('/monitoring/{ujian_id}', [MonitoringUjianController::class, 'showMonitoring'])->name('monitoring.ujian.show');
});

require __DIR__ . '/auth.php';
