<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaporanTerimaSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('laporan_terima')->insert([
            'bantuan_dari' => 'APBD',
            'jenis_terima' => 'Kompor Gas',
            'jumlah_terima' => '50',
            'satuan_terima' => 'Buah',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
