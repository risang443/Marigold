<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.landing');
});

Route::get('/about', function () {
    return view('landing.pages.about');
});

Route::get('/plantmonitoring', function () {
    return view('landing.pages.plantmonitor');
});

Route::get('/weathermonitoring', function () {
    return view('landing.pages.weathermonitor');
});

Route::get('/partnership', function () {
    return view('landing.pages.partnerships');
});

Route::get('/shop', function () {
    return view('landing.pages.shop');
});
Route::get('/shopoil', function () {
    return view('landing.pages.shopoil');
});

Route::get('/shoptea', function () {
    return view('landing.pages.shoptea');
});

Route::get('/shopflowers', function () {
    return view('landing.pages.shopflowers');
});

Route::get('/shopcontent', function () {
    return view('landing.pages.shopcontent');
});

Route::get('/experience', function () {
    return view('landing.pages.exp');
});

Route::get('/supply', function () {
    return view('landing.pages.supply');
});

Route::get('/demand', function () {
    return view('landing.pages.demand');
});

Route::get('/contactfarming', function () {
    return view('landing.pages.contactfarming');
});

Route::get('/investment', function () {
    return view('landing.pages.investment');
});

Route::get('/contact', function () {
    return view('landing.pages.contact');
});

