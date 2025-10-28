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
        Schema::table('tenant_user', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            // Ensure tenant_id matches the type of tenants.id (char(36) or uuid)
            $table->char('tenant_id', 36); // Or $table->uuid('tenant_id')
            $table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');
            $table->string('role')->default('member'); // e.g., 'owner', 'admin', 'member', 'billing'
            $table->timestamps();

            // Prevent duplicate entries for the same user in the same tenant
            $table->unique(['user_id', 'tenant_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tenant_user', function (Blueprint $table) {
            //
        });
    }
};
