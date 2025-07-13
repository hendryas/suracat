<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JawabanSiswa extends Model
{
    protected $fillable = [
        'siswa_id',
        'ujian_id',
        'soal_id',
        'jawaban',
        'is_correct',
        'waktu_dijawab'
    ];
}
