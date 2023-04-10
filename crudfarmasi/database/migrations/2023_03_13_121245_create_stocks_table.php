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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('id_obat');
            $table->string('nama_obat');
            $table->string('jenis_obat');
            $table->string('dosis');
            $table->text('efek_samping');
            $table->string('bentuk_obat');
            $table->string('kategori_resep');
            $table->string('stok_minimal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
