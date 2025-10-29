<?php

namespace App\Http\Controllers\Core\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('core.backend.auth.login');
    }
}
