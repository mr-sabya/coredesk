<?php

namespace App\Http\Controllers\Core\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // service page
    public function servicePage()
    {
        return view('core.frontend.service.index');
    }


    // pricing page
    public function pricingPage()
    {
        return view('core.frontend.pricing.index');
    }

    // anout Page
    public function aboutPage()
    {
        return view('core.frontend.about.index');    
    }
    
    // contact page
    public function contactPage()
    {
        return view('core.frontend.contact.index');        
    }
}
