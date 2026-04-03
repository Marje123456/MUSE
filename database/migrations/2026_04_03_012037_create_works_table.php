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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->foreignId('artist_user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('inspiration_id')->nullable()->constrained('inspirations')->nullOnDelete();

            $table->string('title', 180);
            $table->text('description')->nullable();

            $table->string('content_rating', 20)->default('safe')->index(); // safe | suggestive
            $table->string('visibility', 20)->default('public')->index(); // public | unlisted | private
            $table->string('status', 20)->default('draft')->index(); // draft | published | hidden | removed

            $table->decimal('price', 10, 2)->nullable()->index();
            $table->timestamp('published_at')->nullable()->index();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['artist_user_id', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
