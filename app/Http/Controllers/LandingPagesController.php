<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPagesController extends Controller
{
    public function index()
     {
        return view ('landingPages.pages.Home');
     }

     public function coursePage()
     {
        return view ('landingPages.pages.Course');
     }

     public function statistics()
     {
        return view ('landingPages.pages.Statistics');
     }

     public function feature()
     {
        return view ('landingPages.pages.Feature');
     }

     public function systemSpk()
     {
        return view ('landingPages.pages.System-spk');
     }

     public function contact()
     {
        return view ('landingPages.pages.Contact');
     }
}

