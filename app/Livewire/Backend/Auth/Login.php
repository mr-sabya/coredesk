<?php

namespace App\Livewire\Backend\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Import the User model

class Login extends Component
{
    public $email;
    public $password;
    public $remember = false;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function login()
    {
        $this->validate();

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            // Get the authenticated user
            $user = User::find(Auth::user()->id);

            // Check if the authenticated user is a super admin
            if ($user->isSuperAdmin()) {
                session()->regenerate();
                return redirect()->route('admin.bashboard'); // Redirect to super admin dashboard
            } else {
                // If not a super admin, log them out and show an error
                Auth::logout();
                session()->flash('error', 'You do not have super admin privileges.');
            }
        } else {
            // Authentication failed (wrong email/password)
            session()->flash('error', 'The provided credentials do not match our records.');
        }
    }

    public function render()
    {
        return view('livewire.backend.auth.login');
    }
}
