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
        Schema::table('users', function (Blueprint $table) {
            $table->string('username', 50)->nullable()->unique()->after('email');
            $table->string('role', 20)->default('collector')->index()->after('password');
            $table->string('status', 20)->default('active')->index()->after('role');
            $table->timestamp('last_login_at')->nullable()->index()->after('remember_token');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique(['username']);
            $table->dropIndex(['role']);
            $table->dropIndex(['status']);
            $table->dropIndex(['last_login_at']);

            $table->dropColumn(['username', 'role', 'status', 'last_login_at']);
        });
    }
};
