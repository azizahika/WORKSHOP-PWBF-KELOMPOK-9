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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user')->increments();
            $table->string('name');
            $table->string('nomor_sim')->nullable();
            $table->string('pengalaman')->nullable();   
            $table->string('jabatan')->nullable();
            $table->boolean('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('nomor_telepon');
            $table->string('role',30)->default('customer');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
