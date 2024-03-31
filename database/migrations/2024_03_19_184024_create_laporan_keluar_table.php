<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('laporan_keluar', function (Blueprint $table) {
            $table->id('id_keluar');
            $table->string('keterangan_keluar')->nullable();
            $table->string('jenis_logistik');
            $table->integer('jumlah_keluar');
            $table->string('satuan_keluar');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('laporan_keluar');
    }
};
