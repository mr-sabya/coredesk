<?php

namespace App\Livewire\Core\Frontend\Components;

use App\Models\Core\Plan;
use Livewire\Component;

class Plans extends Component
{
    public $plans;
    public bool $annualBilling = false; // Controls the billing toggle (false for monthly, true for annually)

    public function mount()
    {
        // Load active plans, ordered by sort_order
        $this->plans = Plan::where('is_active', true)
                           ->orderBy('sort_order')
                           ->get();

        // If you want the toggle to start with annual billing checked by default
        // you might set this based on a cookie or user preference
        // For now, it defaults to false (monthly)
    }

    // This method will be called when the billing toggle changes
    public function toggleBilling()
    {
        $this->annualBilling = !$this->annualBilling;
    }
    
    public function render()
    {
        return view('livewire.core.frontend.components.plans');
    }
}
