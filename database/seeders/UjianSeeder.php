<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UjianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ujians')->insert([
            'nama_ujian' => 'Ujian Matematika',
            'durasi_menit' => 90,
            'jadwal' => Carbon::now()->addDays(2),
            'status' => 'aktif',
            'created_by' => 1, // misalnya admin id 1
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
