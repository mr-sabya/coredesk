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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // e.g., 'Basic', 'Premium', 'Enterprise'
            $table->string('slug')->unique(); // e.g., 'basic', 'premium', 'enterprise'
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2); // Monthly, yearly, etc.
            $table->string('currency', 3)->default('USD');
            $table->json('features')->nullable(); // Store plan features as JSON (e.g., number of users, projects, storage)
            $table->string('stripe_price_id')->nullable(); // Link to Stripe Price ID
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
