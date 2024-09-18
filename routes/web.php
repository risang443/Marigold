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

