<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landing()
    {
        return view('landing.landing');
    }

    public function dashboard()
    {
        return view('landing.landing');
    }

    public function about()
    {
        return view('landing.pages.about');
    }

    public function plantMonitoring()
    {
        return view('landing.pages.plantmonitor');
    }

    public function weatherMonitoring()
    {
        return view('landing.pages.weathermonitor');
    }

    public function partnership()
    {
        return view('landing.pages.partnerships');
    }

    public function shop()
    {
        return view('landing.pages.shop');
    }

    public function shopOil()
    {
        return view('landing.pages.shopoil');
    }

    public function shopTea()
    {
        return view('landing.pages.shoptea');
    }

    public function shopFlowers()
    {
        return view('landing.pages.shopflowers');
    }

    public function shopContent()
    {
        return view('landing.pages.shopcontent');
    }

    public function experience()
    {
        return view('landing.pages.exp');
    }

    public function supply()
    {
        return view('landing.pages.supply');
    }

    public function demand()
    {
        return view('landing.pages.demand');
    }

    public function contactFarming()
    {
        return view('landing.pages.contactfarming');
    }

    public function investment()
    {
        return view('landing.pages.investment');
    }

    public function farmFields()
    {
        return view('landing.pages.farmfields');
    }

    public function contact()
    {
        return view('landing.pages.contact');
    }

    public function giftShop()
    {
        return view('landing.pages.giftshop');
    }

    public function gallery()
    {
        return view('landing.pages.gallery');
    }

    public function faq()
    {
        return view('landing.pages.faq');
    }
    public function cart()
    {
        return view('landing.pages.cart');
    }

}
