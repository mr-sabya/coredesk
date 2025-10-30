<?php

namespace App\Livewire\Core\Frontend\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Logout extends Component
{
    /**
     * Log the user out of the application.
     */
    public function logout()
    {
        Auth::logout();

        session()->invalidate();
        session()->regenerateToken();

        return redirect()->to(route('login')); // Redirect to the login page after logout
    }

    public function render()
    {
        return view('livewire.core.frontend.auth.logout');
    }
}