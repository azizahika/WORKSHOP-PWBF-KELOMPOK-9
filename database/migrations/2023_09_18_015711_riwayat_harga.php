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
        Schema::create('riwayat_harga', function (Blueprint $table) {
            $table->id('id_riwayatharga')->increments();
            $table->unsignedBigInteger('id_mobil');
            $table->foreign('id_mobil')->references('id_mobil')->on('mobil');
            $table->date('tanggal_perubahanharga');
            $table->string('harga_baru');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfexists('riwayat_harga');
    }
};
