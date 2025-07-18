<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiswaUjian extends Model
{
    // protected $table = 'siswa_ujian'; jika ingin menggunakan tabel ini (opsional)

    protected $fillable = [
        'siswa_id',
        'ujian_id',
        'waktu_mulai',
        'waktu_selesai',
        'nilai',
        'status',
        'shuffled_soal'
    ];

    protected $casts = [
        'shuffled_soal' => 'array',
    ];

    public function siswa()
    {
        return $this->belongsTo(User::class, 'siswa_id');
    }

    public function ujian()
    {
        return $this->belongsTo(Ujian::class, 'ujian_id');
    }
}
