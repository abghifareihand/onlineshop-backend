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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            // user_id
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            // address_id
            $table->foreignId('address_id')->constrained('addresses')->onDelete('cascade');
            $table->integer('shipping_cost');
            $table->integer('total_cost');
            $table->integer('subtotal');
            $table->enum('status', ['pending', 'paid', 'on_delivery', 'delivered', 'expired', 'canceled']);
            $table->enum('payment_method', ['bank_transfer', 'ewallet']);
            // payment virtual account
            $table->string('payment_va_name')->nullable();
            $table->string('payment_va_number')->nullable();
            // payment ewallet
            $table->string('payment_ewallet')->nullable();
            $table->string('shipping_service')->nullable();
            $table->string('shipping_resi')->nullable();
            $table->string('transaction_number');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
