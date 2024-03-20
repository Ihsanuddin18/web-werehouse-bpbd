<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('laporan_bantuan', function (Blueprint $table) {
            $table->id('id_bantuan');
            $table->integer('no_bantuan');
            $table->string('nama_penerima_bantuan');
            $table->dateTime('tgl_bantuan');
            $table->integer('nik_kk');
            $table->string('keterangan_bantuan');
            $table->string('jenis_bantuan');
            $table->integer('jumlah_bantuan');
            $table->string('satuan_bantuan');
            $table->string('lokasi_bantuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_bantuan');
    }
};
