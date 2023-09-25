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
        Schema::create('pengembalian', function (Blueprint $table) {
            $table->id('id_pengembalian')->increments();
            $table->unsignedBigInteger('id_penyewaan');
            $table->foreign('id_penyewaan')->references('id_penyewaan')->on('penyewaan');
            $table->date('tanggal_pengembalian');
            $table->string('lokasi_pengembalian');
            $table->string('kondisi_mobil');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
