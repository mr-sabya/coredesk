<?php

namespace App\Http\Controllers\Core\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    //
    public function index()
    {
        return view('core.backend.tenant.index');
    }

    // crerate new tanent
    public function create()
    {
        return view('core.backend.tenant.create');   
    }
}
