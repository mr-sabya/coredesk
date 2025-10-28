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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->char('tenant_id', 36);
            // Link to the central 'tenants' table (each tenant is a company)
            $table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');
            // Link to the central 'plans' table
            $table->foreignId('plan_id')->constrained('plans')->onDelete('cascade');

            // Subscription period
            $table->date('start_date');
            $table->date('end_date')->nullable(); // Can be null for lifetime or if not explicitly set yet
            $table->date('trial_ends_at')->nullable(); // For trial periods

            // Status
            $table->enum('status', ['active', 'grace_period', 'expired', 'canceled'])->default('active'); // Added 'grace_period'
            $table->boolean('is_recurring')->default(true); // Is it an active recurring subscription?

            // Payment details (often handled by Cashier, but good for summary)
            $table->decimal('amount_paid', 10, 2)->default(0);
            $table->string('currency', 3)->default('USD');
            $table->string('stripe_subscription_id')->nullable(); // For Cashier integration
            $table->string('stripe_price_id')->nullable(); // The specific price ID from Stripe
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
