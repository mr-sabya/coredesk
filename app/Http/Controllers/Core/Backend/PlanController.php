<?php

namespace App\Http\Controllers\Core\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    //
    public function index()
    {
        return view('core.backend.plan.index');    
    }

    // create 
    public function create()
    {
        return view('core.backend.plan.create');    
    }

    // edit 
    public function edit($id)
    {
        return view('core.backend.plan.edit', [
            'planId' => $id,
        ]);    
    }
}
