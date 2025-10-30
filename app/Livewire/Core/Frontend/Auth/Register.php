<?php

namespace App\Livewire\Core\Frontend\Auth;

use App\Models\User; // Don't forget to import your User model
use Livewire\Component;
use Illuminate\Support\Facades\Hash; // For hashing passwords
use Illuminate\Auth\Events\Registered; // For the Registered event
use Illuminate\Support\Facades\Auth;

class Register extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $password_confirmation; // For password confirmation field
    public $terms_accepted = false; // For the terms and conditions checkbox

    // Validation rules
    protected $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed', // 'confirmed' checks against password_confirmation
        'terms_accepted' => 'accepted', // Ensures the checkbox is checked
    ];

    public function register()
    {
        $this->validate(); // Run validation rules

        // Concatenate first and last name for the 'name' field
        $fullName = trim($this->first_name . ' ' . $this->last_name);

        $user = User::create([
            'name' => $fullName,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'is_super_admin' => false, // New users are not super admins by default
        ]);

        event(new Registered($user)); // Fire the Registered event

        // Log in the user after registration (optional, but common)
        Auth::login($user);

        // Redirect to a dashboard or home page
        return $this->redirect(route('user.profile'), navigate:true); // Adjust this route as needed
    }

    public function render()
    {
        return view('livewire.core.frontend.auth.register');
    }
}