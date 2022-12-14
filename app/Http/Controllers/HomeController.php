<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home.index');
    }

    public function about()
    {
        return view('frontend.home.about-us');
    }

    public function services()
    {
        return view('frontend.home.services');
    }

    public function contact()
    {
        return view('frontend.home.contact-us');
    }
}
