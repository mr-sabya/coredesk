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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('news_tag')->nullable(); // e.g., "NEWS"
            $table->string('news_text')->nullable(); // e.g., "Submit referrals online start now."
            $table->string('title'); // e.g., "Accelerate workflow — draft contracts 10x faster grow"
            $table->text('description'); // e.g., "When you join our journey..."
            $table->string('image')->nullable(); // Path to the image
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
