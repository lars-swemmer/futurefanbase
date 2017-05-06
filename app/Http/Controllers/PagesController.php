<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    	return view('pages.index');
    }

    public function about()
    {
    	return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function products()
    {
    	return view('pages.products');
    }

    public function spotifyFans()
    {
        return view('products.spotifyfans');
    }

    public function onlineAdvertising()
    {
        return view('pages.online-advertising');
    }

    public function campaignTypes()
    {
        return view('online-advertising.campaign-types');
    }

    public function advertisingPlatforms()
    {
        return view('online-advertising.advertising-platforms');
    }
}
