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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade'); // Hubungan dengan tabel orders
            $table->decimal('amount', 10, 2); // Jumlah pembayaran
            $table->string('payment_method'); // Metode pembayaran (misalnya: credit card, PayPal, dll.)
            $table->enum('status', ['pending', 'completed', 'failed'])->default('pending'); // Status pembayaran
            $table->string('transaction_id')->nullable(); // ID transaksi dari penyedia pembayaran
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};