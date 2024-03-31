<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierLogistikSeeder extends Seeder
{
   
    public function run(): void
    {
        DB::table('supplier_logistik')->insert([
            'nama_supplier' => 'BNPB',
            'telepon_supplier' => '085230442887',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
