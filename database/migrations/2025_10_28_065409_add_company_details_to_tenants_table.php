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
        Schema::table('tenants', function (Blueprint $table) {
            $table->string('name')->after('id'); // e.g., "Acme Corp"
            $table->string('primary_contact_email')->nullable()->after('name');
            $table->string('industry')->nullable()->after('primary_contact_email');
            $table->string('logo_path')->nullable()->after('industry');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tenants', function (Blueprint $table) {
            $table->dropColumn(['name', 'primary_contact_email', 'industry', 'logo_path']);
        });
    }
};
