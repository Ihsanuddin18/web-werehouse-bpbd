<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('laporan_bantuan', function (Blueprint $table) {
            $table->id('no');
            $table->string('alamat_penerima');
            $table->string('keterangan_bantuan');
            $table->string('nik_kk');
            $table->string('nama_penerima');
            $table->string('jenis_bantuan');
            $table->integer('jumlah_keluar');
            $table->string('satuan_keluar');
            $table->binary('dokumentasi_bantuan')->nullable();
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('laporan_bantuan');
    }
};
