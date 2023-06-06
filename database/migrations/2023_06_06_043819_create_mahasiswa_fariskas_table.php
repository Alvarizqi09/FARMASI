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
        Schema::create('mahasiswa_fariskas', function (Blueprint $table) {
            $table->id();
            $table->integer('nim');
            $table->string('nama');
            $table->integer('nik');
            $table->enum('jk', ['Laki-laki', 'Perempuan']);
            $table->enum('agama', ['Islam', 'Katholik', 'Kristen', 'Hindu', 'Buddha', 'Konghuchu']);
            $table->string('alamat');
            $table->integer('telp');
            $table->string('email');

            $table->unsignedBigInteger('prodi');
            $table->foreign('prodi')->references('id')->on('prodi_fariskas')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa_fariskas');
    }
};
