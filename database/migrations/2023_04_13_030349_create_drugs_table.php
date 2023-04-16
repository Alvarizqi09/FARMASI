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
        Schema::create('drugs', function (Blueprint $table) {
            // $table->id();
            $table->char('id_obat', 10);
            $table->string('nama_obat', 50);
            $table->string('jenis_obat');
            $table->date('tanggal_masuk')->nullable();
            $table->string('kategori_resep');
            $table->string('stok_masuk');
            $table->string("pemasok");
            $table->date('kadaluwarsa')->nullable();

            $table->primary('id_obat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drugs');
    }
};
