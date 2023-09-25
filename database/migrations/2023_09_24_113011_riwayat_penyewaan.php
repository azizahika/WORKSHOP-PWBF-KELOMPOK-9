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
        Schema::create('riwayat_penyewaan', function (Blueprint $table) {
            $table->id('id_riwayatpenyewaan')->increments();
            $table->unsignedBigInteger('id_penyewaan')  ;
            $table->foreign('id_penyewaan')->references('id_penyewaan')->on('penyewaan');
            $table->unsignedBigInteger('id_mobil');
            $table->foreign('id_mobil')->references('id_mobil')->on('mobil');
            $table->boolean('status_pembayaran');
            $table->string('totak_biaya');
            $table->string('lokasi_pengambilan');
            $table->string('lokasi_pengembalian');
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
