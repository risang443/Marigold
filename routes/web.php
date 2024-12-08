<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', [PageController::class, 'landing']);

Route::get('/about', [PageController::class, 'about']);
Route::get('/plantmonitoring', [PageController::class, 'plantMonitoring']);
Route::get('/weathermonitoring', [PageController::class, 'weatherMonitoring']);
Route::get('/partnership', [PageController::class, 'partnership']);
Route::get('/shop', [PageController::class, 'shop']);
Route::get('/shopoil', [PageController::class, 'shopOil']);
Route::get('/shoptea', [PageController::class, 'shopTea']);
Route::get('/shopflowers', [PageController::class, 'shopFlowers']);
Route::get('/shopcontent', [PageController::class, 'shopContent']);
Route::get('/experience', [PageController::class, 'experience']);

Route::get('/farmfields', [PageController::class, 'farmFields']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/giftshop', [PageController::class, 'giftShop']);
Route::get('/gallery', [PageController::class, 'gallery']);
Route::get('/faq', [PageController::class, 'faq']);
Route::get('/cart',[PageController::class,'cart']);

// Auth Route

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return 'Welcome to your dashboard!';
    })->name('dashboard');
});

Route::get('/debug-auth', function () {
    return Auth::check() ? 'Authenticated as: ' . Auth::user()->username : 'Not authenticated';
});




