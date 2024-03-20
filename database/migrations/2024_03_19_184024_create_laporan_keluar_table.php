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
        Schema::create('laporan_keluar', function (Blueprint $table) {
            $table->id('id_keluar');
            $table->integer('no_keluar');
            $table->string('nama_penerima');
            $table->dateTime('tgl_keluar');
            $table->string('jenis_logistik');
            $table->string('keterangan_keluar');
            $table->integer('jumlah_keluar');
            $table->string('satuan_keluar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_keluar');
    }
};
