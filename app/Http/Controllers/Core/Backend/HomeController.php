<?php

namespace App\Http\Controllers\Core\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // dashboard
    public function index()
    {
        return view('core.backend.home.index');
    }
}
