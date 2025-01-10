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
        // Membuat tabel brands
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // Nama brand
            $table->text('description')->nullable(); // Deskripsi brand
            $table->enum('status', ['active', 'inactive'])->default('active'); // Status brand
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
        });

        // Membuat tabel categories
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // Nama kategori
            $table->text('description')->nullable(); // Deskripsi kategori
            $table->enum('status', ['active', 'inactive'])->default('active'); // Status kategori
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('brands');
    }
};