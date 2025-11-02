<?php

namespace App\Http\Controllers\Core\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    // banner management
    public function bananerManagement()
    {
        return view('core.backend.website.banner');
    }
}
