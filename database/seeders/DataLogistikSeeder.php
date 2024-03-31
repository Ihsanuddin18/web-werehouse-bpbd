<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataLogistikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_logistik')->insert([
            'nama_logistik' => 'Susu Kaleng',
            'stok_logistik' => '50',
            'sisa_logistik' => '30',
            'satuan_logistik' => 'Buah',
            'created_at' => now(),
            'updated_at' => now(),
            
        ]);
    }
}
