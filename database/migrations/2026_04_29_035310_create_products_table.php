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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // nama produk/baju
            $table->string('slug')->unique(); // slug untuk URL produk/unutk ramah SEO
            $table->text('description')->nullable(); // deskripsi produk/baju
            $table->integer('price'); // harga produk dalam satuan terkecil (misalnya, art Papua)
            $table->integer('stock')->default(0); // jumlah stok produk
            $table->string('image')->nullable(); // path gambar produk
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
