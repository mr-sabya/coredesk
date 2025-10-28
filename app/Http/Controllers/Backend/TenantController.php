<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    //
    public function index()
    {
        return view('backend.tenant.index');
    }

    // crerate new tanent
    public function create()
    {
        return view('backend.tenant.create');   
    }
}
