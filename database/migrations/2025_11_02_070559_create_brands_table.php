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
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('alt_text')->nullable();
            $table->string('logo_light'); // Path to the light mode logo
            $table->string('logo_dark')->nullable(); // Path to the dark mode logo (optional if always same)
            $table->integer('width')->nullable(); // Original width for HTML attribute
            $table->integer('height')->nullable(); // Original height for HTML attribute
            $table->integer('order')->default(0); // For custom sorting
            $table->boolean('is_active')->default(true); // To easily enable/disable brands
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
