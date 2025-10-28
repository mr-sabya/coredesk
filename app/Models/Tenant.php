<?php

namespace App\Models;

use App\Models\Core\Subscription;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;
use Laravel\Cashier\Billable; // Add this if you plan to use Laravel Cashier for subscriptions

class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase, HasDomains;

    /**
     * The attributes that are mass assignable.
     * These are the columns you're adding to your 'tenants' table.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id', // The tenant ID is often UUID or string
        'name', // e.g., "Acme Corp" - Display name for the company
        'primary_contact_email', // For central app communications/billing
        'industry', // Optional: for analytics or segmentation
        'logo_path', // Optional: path to the company logo (if displayed centrally)
        // Add any other company-level attributes that belong in the central database
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        // No specific casts for these simple string fields, but useful for dates/booleans
    ];

    /**
     * This method is used by stancl/tenancy to determine which columns
     * from the central `tenants` table should be cached for quick access.
     * Make sure any custom columns you add are included here.
     *
     * @return array<int, string>
     */
    public static function getCustomColumns(): array
    {
        return [
            'id',
            'name',
            'primary_contact_email',
            'industry',
            'logo_path',
            // Add any custom columns you introduce to the 'tenants' table here
            // If you're using Cashier and putting its columns (stripe_id, etc.)
            // directly on the tenants table, list them here too.
        ];
    }

    /**
     * Define the relationship to the tenant's subscriptions (assuming central subscriptions table).
     */
    public function subscriptions()
    {
        return $this->hasMany(Subscription::class); // Assuming App\Models\Subscription exists in central DB
    }

}