<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenerimaBantuanSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('penerima_bantuan')->insert([
            'alamat_penerima' => 'Kabupaten Jember',
            'keterangan_penerima' => 'Bencana Longsor',
            'nik_kk' => '3509320943875',
            'nama_penerima' => 'Sarmini',
            'jenis_bantuan' => 'Susu Kaleng',
            'dokumentasi_bantuan' => '',
            'created_at' => now(),
            'updated_at' => now(),
            
        ]);
    }
}
