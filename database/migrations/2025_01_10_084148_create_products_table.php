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
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2); // Harga produk
            $table->integer('stock')->default(0); // Jumlah stok
            $table->string('sku')->unique(); // Stock Keeping Unit
            $table->string('image')->nullable(); // Gambar produk
            $table->enum('status', ['active', 'inactive'])->default('active'); // Status produk
            $table->foreignId('brand_id')->constrained()->onDelete('cascade'); // Hubungan dengan tabel brands
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Hubungan dengan tabel categories
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
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