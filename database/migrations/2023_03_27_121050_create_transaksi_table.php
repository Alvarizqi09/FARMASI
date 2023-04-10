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
        Schema::create('Transaksis', function (Blueprint $table) {
            $table->id();
            $table->integer('notransaksi');
            $table->date('tgltransaksi');
            $table->integer('noRM');
            $table->string('namapelanggan');
            $table->string('namaobat');
            $table->integer('idobat');
            $table->integer('jumlahobat');
            $table->bigInteger('totalharga');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Transaksis');
    }
};
