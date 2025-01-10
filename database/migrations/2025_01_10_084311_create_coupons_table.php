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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique(); // Kode kupon yang harus unik
            $table->decimal('discount_amount', 10, 2)->nullable(); // Jumlah diskon
            $table->integer('discount_percentage')->nullable(); // Persentase diskon
            $table->date('start_date')->nullable(); // Tanggal mulai berlaku
            $table->date('end_date')->nullable(); // Tanggal berakhir
            $table->integer('usage_limit')->nullable(); // Batas penggunaan kupon
            $table->integer('used_count')->default(0); // Jumlah penggunaan kupon
            $table->enum('status', ['active', 'inactive'])->default('active'); // Status kupon
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};