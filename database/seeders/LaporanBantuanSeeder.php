<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaporanBantuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('laporan_bantuan')->insert([
            'alamat_penerima' => 'Kabupaten Jember',
            'keterangan_bantuan' => 'Bencana Tanah Longsor',
            'nik_kk' => '350921073832991',
            'nama_penerima' => 'Sri Hartini',
            'jenis_bantuan' => 'Handuk',
            'jumlah_keluar' => '85',
            'satuan_keluar' => 'Buah',
            'dokumentasi_bantuan' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

