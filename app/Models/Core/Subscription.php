<?php

namespace App\Models\Core;

use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'plan_id',
        'start_date',
        'end_date',
        'trial_ends_at',
        'status',
        'is_recurring',
        'amount_paid',
        'currency',
        'stripe_subscription_id',
        'stripe_price_id',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'trial_ends_at' => 'date',
        'amount_paid' => 'decimal:2',
        'is_recurring' => 'boolean',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function isActive()
    {
        return $this->status === 'active' && ($this->end_date === null || $this->end_date->isFuture());
    }

    public function isOnGracePeriod()
    {
        return $this->status === 'grace_period';
    }

    public function isTrialing()
    {
        return $this->trial_ends_at && $this->trial_ends_at->isFuture();
    }
}
