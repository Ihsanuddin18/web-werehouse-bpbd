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
        Schema::create('penerimaan_logistik', function (Blueprint $table) {
            $table->id('id_terima');
            $table->integer('no_terima');
            $table->string('bantiuan_dari');
            $table->dateTime('tgl_terima');
            $table->string('jenis_terima');
            $table->integer('jumlah_terima');
            $table->string('satuan_terima');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penerimaan_logistik');
    }
};
