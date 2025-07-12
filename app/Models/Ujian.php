<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    protected $fillable = [
        'nama_ujian',
        'durasi_menit',
        'jadwal',
        'status',
        'created_by'
    ];

    public function peserta()
    {
        return $this->hasMany(SiswaUjian::class, 'ujian_id');
    }
}
