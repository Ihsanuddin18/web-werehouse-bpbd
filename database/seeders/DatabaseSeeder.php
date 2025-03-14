<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        DB::table('users')->insert([
             'name' => 'admin',
             'email' => 'admin@gmail.com',
             'password' => Hash::make('admin'),
         ]);

         $this->call([
            DataLogistikSeeder::class,
            PenerimaBantuanSeeder::class,
            PenerimaanLogistikSeeder::class,
            PengeluaranLogistikSeeder::class,
            SupplierLogistikSeeder::class,
            LaporanTerimaSeeder::class,
            LaporanKeluarSeeder::class,
            LaporanBantuanSeeder::class,


            
        ]);

    }
}
