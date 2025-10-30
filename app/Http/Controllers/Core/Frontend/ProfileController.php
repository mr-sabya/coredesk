<?php

namespace App\Http\Controllers\Core\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // profile page
    public function profile()
    {
        return view('core.frontend.profile.index');
    }
}
