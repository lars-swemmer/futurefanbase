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

    public function services()
    {
    	return view('pages.services');
    }

    public function contact()
    {
    	return view('pages.contact');
    }

    public function spotify()
    {
        return view('pages.spotify');
    }

    public function youtube()
    {
        return view('pages.youtube');
    }

    public function facebook()
    {
        return view('pages.facebook');
    }

    public function instagram()
    {
        return view('pages.instagram');
    }

    public function google()
    {
        return view('pages.google');
    }

    public function contestAndGiveaways()
    {
        return view('pages.contests');
    }
}

