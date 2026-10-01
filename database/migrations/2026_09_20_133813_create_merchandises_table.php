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
        Schema::create('merchandises', function (Blueprint $table) {
            $table->id();
            $table->string('name');             // Nama Barang
            $table->string('image');            // Nama file Foto Barang
            $table->integer('price');           // Harga Barang (angka)
            $table->integer('stock');           // Sisa Stok (angka)
            $table->text('description')->nullable(); // Keterangan Singkat
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merchandises');
    }
};
