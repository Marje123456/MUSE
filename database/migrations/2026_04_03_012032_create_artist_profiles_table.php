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
        Schema::create('artist_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->unique();

            $table->string('display_name', 120);
            $table->text('bio')->nullable();
            $table->decimal('base_price', 10, 2)->nullable()->index();
            $table->unsignedSmallInteger('avg_delivery_days')->nullable();
            $table->json('creative_limits')->nullable();
            $table->string('verification_status', 20)->default('pending')->index();

            $table->decimal('reputation_score', 6, 2)->default(0)->index();
            $table->decimal('total_sales', 14, 2)->default(0)->index();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artist_profiles');
    }
};
