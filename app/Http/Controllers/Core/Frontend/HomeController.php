<?php

namespace App\Http\Controllers\Core\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('core.frontend.home.index');    
    }
}
