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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('id_pembayaran')->increments();
            $table->foreignId('id_penyewaan');
            $table->boolean('status_bayar')->default(false);
            $table->string('keterangan')->nullable();
            $table->string('total_pembayaran');
            $table->date('tanggal_penyewaan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfexists('pembayaran');
    }
};
