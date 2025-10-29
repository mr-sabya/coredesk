<?php

namespace App\Http\Controllers\Core\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // show register form
    public function showRegisterForm()
    {
        return view('core.frontend.auth.register');
    }

    // show login form
    public function showLoginForm()
    {
        return view('core.frontend.auth.login');
    }
}
