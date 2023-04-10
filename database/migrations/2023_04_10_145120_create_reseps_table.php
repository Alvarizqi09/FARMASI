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
        Schema::create('reseps', function (Blueprint $table) {
            $table->id();
            $table->integer('ID_Apoteker');
            $table->integer('No_Resep');
            $table->string('Nama_Pasien');
            $table->integer('No_RM');
            $table->string('Nama_Dokter');
            $table->string('Nama_Obat');
            $table->string('Nama_Dosis');
            $table->date('tanggal_resep');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reseps');
    }
};
