<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('penerima_bantuan', function (Blueprint $table) {
            $table->id('no');
            $table->string('nama_penerima');
            $table->string('nik_kk');
            $table->string('alamat_penerima');
            $table->string('keterangan_penerima');
            $table->string('jenis_bantuan');
            $table->binary('dokumentasi_bantuan');
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('penerima_bantuan');
    }
};
