<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }

    public function personalCard()
    {
        return view('website.personal-card');
    }

    public function drivingLicense()
    {
        return view('website.driving-license');
    }

    public function passport()
    {
        return view('website.passport');
    }

    public function renewLicense()
    {
        return view('website.renew-license');
    }

    public function lostLicense()
    {
        return view('website.lost-license');
    }

    public function renewPassport()
    {
        return view('website.renew-passport');
    }

    public function lostPassport()
    {
        return view('website.lost-passport');
    }

    public function renewPersonalCard()
    {
        return view('website.renew-personal-card');
    }

    public function lostPersonalCard()
    {
        return view('website.lost-personal-card');
    }

    public function data()
    {
        return view('website.data');
    }


}
