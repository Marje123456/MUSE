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
        Schema::create('inspirations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('collector_user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('artist_user_id')->nullable()->constrained('users')->nullOnDelete();

            $table->string('type', 20)->index(); // open | direct
            $table->string('visibility', 20)->default('public')->index(); // public | private
            $table->string('status', 30)->default('open')->index(); // open | in_progress | fulfilled | closed | rejected

            $table->string('title', 180);
            $table->text('description')->nullable();
            $table->decimal('budget', 10, 2)->nullable();

            $table->timestamp('closed_at')->nullable()->index();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['collector_user_id', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspirations');
    }
};
