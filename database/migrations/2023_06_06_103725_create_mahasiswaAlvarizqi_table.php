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
        Schema::create('mahasiswaAlvarizqi', function (Blueprint $table) {
            $table->id();
            $table->integer("NIM");
            $table->string("nama");
            $table->string("jurusan");
            $table->integer("telepon");
            $table->string("jeniskelamin");
            $table->string("email");
            $table->integer("NIK");
            $table->char("alamat");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswaAlvarizqi');
    }
};
