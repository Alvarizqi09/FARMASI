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
        Schema::create('nilai_fariskas', function (Blueprint $table) {
            $table->id();
            $table->integer('nilai');
            $table->timestamps();
            $table->unsignedBigInteger('prodi');
            $table->foreign('nama')->references('id')->on('mahasiswa_fariskas')->onDelete('cascade');
            $table->unsignedBigInteger('prodi');
            $table->foreign('mk')->references('id')->on('matkul_fariskas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_fariskas');
    }
};
