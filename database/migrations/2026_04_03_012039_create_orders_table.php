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
            $table->foreignId('buyer_user_id')->constrained('users')->cascadeOnDelete();
            $table->decimal('total_amount', 10, 2)->default(0);
            $table->string('currency', 3)->default('USD');
            $table->string('status', 20)->default('pending')->index(); // pending | paid | refunded | failed
            $table->string('provider', 30)->nullable();
            $table->string('provider_reference', 191)->nullable()->index();
            $table->timestamps();

            $table->index(['buyer_user_id', 'status']);
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
