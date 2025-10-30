<?php

namespace App\Livewire\Core\Frontend\Profile;

use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class Index extends Component
{
    public $user;
    public $totalTenants;
    public $recentActivity = []; // Placeholder for some recent user activity

    public function mount()
    {
        $this->user = Auth::user();

        // Example: Get count of tenants if the user can have tenants
        // This assumes your User model has the `tenants()` relationship
        if (method_exists($this->user, 'tenants')) {
            $this->totalTenants = $this->user->tenants->count();
        } else {
            $this->totalTenants = 0; // Or handle as appropriate
        }

        // Placeholder for recent activity (e.g., from a database table)
        $this->recentActivity = [
            ['id' => 1, 'description' => 'Updated profile information', 'date' => '2023-10-26 10:30'],
            ['id' => 2, 'description' => 'Created new tenant "My Business Ltd"', 'date' => '2023-10-25 15:45'],
            ['id' => 3, 'description' => 'Logged in successfully', 'date' => '2023-10-25 09:00'],
        ];
    }

    public function render()
    {
        return view('livewire.core.frontend.profile.index');
    }
}
