<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('penerimaan_logistik', function (Blueprint $table) {
            $table->id('id_terima');
            $table->string('bantuan_dari');
            $table->string('jenis_terima');
            $table->integer('jumlah_terima');
            $table->string('satuan_terima');
            $table->date('expayer');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('penerimaan_logistik');
    }
};
