<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenerimaanLogistikSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('penerimaan_logistik')->insert([
            'bantuan_dari' => 'APBD Kabupaten Jember',
            'jenis_terima' => 'Minyak Goreng',
            'jumlah_terima' => '100',
            'satuan_terima' => 'Liter',
            'expayer' => '2026-12-31',
            'created_at' => now(),
            'updated_at' => now(),
            
        ]);
    }
}
