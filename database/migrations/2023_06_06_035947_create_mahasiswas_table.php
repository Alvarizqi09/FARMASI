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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id('IDMahasiswa')->unique();
            $table->string('Nama');
            $table->string('Jenis_Kelamin');
            $table->string('Prodi');
            $table->string('Agama');
            $table->string('NIK');
            $table->string('Telepon');
            $table->text('Alamat');
            $table->string('Tanggal_Lahir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
