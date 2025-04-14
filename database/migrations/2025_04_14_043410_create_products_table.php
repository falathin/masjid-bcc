<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');                // Nama produk, misalnya "Kopi"
            $table->string('category')->nullable(); // Kategori produk (opsional)
            $table->integer('price');              // Harga (dalam satuan rupiah)
            $table->text('description')->nullable(); // Deskripsi produk
            $table->string('image')->nullable();   // Path atau URL gambar produk
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};