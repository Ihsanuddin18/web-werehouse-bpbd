<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaporanKeluarSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('laporan_keluar')->insert([
            'keterangan_keluar' => 'Bencana Gempa Bumi',
            'jenis_logistik' => 'Jurigen',
            'jumlah_keluar' => '30',
            'satuan_keluar' => 'Buah',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
