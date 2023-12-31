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
        Schema::create('ulasan', function (Blueprint $table) {
            $table->id('id_ulasan')->increments();
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('Users');
            $table->string('deskripsi_ulasan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfexists('ulasan');
    }
};
