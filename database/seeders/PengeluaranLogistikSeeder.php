<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengeluaranLogistikSeeder extends Seeder
{
  
    public function run(): void
    {
        DB::table('pengeluaran_logistik')->insert([
            'keterangan_keluar' => 'Untuk Rs. Paru Jember',
            'jenis_logistik' => 'Masker Kain',
            'jumlah_keluar' => '150',
            'satuan_keluar' => 'Pcs',
            'created_at' => now(),
            'updated_at' => now(),
            
        ]);
    }
}
