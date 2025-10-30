<?php

namespace App\Livewire\Core\Frontend\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class Login extends Component
{
    public string $email = '';
    public string $password = '';
    public bool $remember = false;

    /**
     * Define validation rules for the form fields.
     *
     * @var array
     */
    protected array $rules = [
        'email' => ['required', 'string', 'email'],
        'password' => ['required', 'string'],
    ];

    /**
     * Attempt to log the user in.
     *
     * @throws ValidationException
     */
    public function authenticate()
    {
        $this->validate();

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        // Authentication successful
        session()->regenerate();

        return $this->redirect(route('user.profile'), navigate:true); // Redirect to dashboard or intended page
    }

    public function render()
    {
        return view('livewire.core.frontend.auth.login');
    }
}
