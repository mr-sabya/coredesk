<?php

namespace App\Livewire\Backend\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{

    /**
     * The route name or URL to redirect to after logout.
     * @var string
     */
    public $redirectTo = '/admin'; // Default redirect to home page

    /**
     * Log out the current user.
     */
    public function logout()
    {
        Auth::logout(); // Log the user out

        session()->invalidate(); // Invalidate the current session
        session()->regenerateToken(); // Regenerate the CSRF token

        return redirect($this->redirectTo);  // Redirect to the home page or login page
    }


    public function render()
    {
        return view('livewire.backend.auth.logout');
    }
}
