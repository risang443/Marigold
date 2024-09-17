<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.landing');
});

Route::get('/plantmonitoring', function () {
    return view('landing.pages.plantmonitor');
});

Route::get('/weathermonitoring', function () {
    return view('landing.pages.weathermonitor');
});
