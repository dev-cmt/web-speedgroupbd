<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about()
    {
        return view('frontend.pages.about-us');
    }

    public function package()
    {
        return view('frontend.pages.package');
    }

    public function packageDetails()
    {
        return view('frontend.pages.package-details');
    }

    public function contact()
    {
        return view('frontend.pages.contact-us');
    }

    public function bookingNow()
    {
        return view('frontend.pages.booking-now');
    }
}
