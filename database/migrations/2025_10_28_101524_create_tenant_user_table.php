<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('tenant_user')) {
            Schema::create('tenant_user', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
                $table->char('tenant_id', 36);
                $table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');
                $table->string('role')->default('member');
                $table->timestamps();
                $table->unique(['user_id', 'tenant_id']);
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('tenant_user');
    }
};
