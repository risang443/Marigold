<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localize' ]], function () {
    Route::get('/', [PageController::class, 'landing'])->name('open');

    Route::get(LaravelLocalization::transRoute('routes.aboutUs'), [PageController::class, 'about'])->name('about');
    Route::get(LaravelLocalization::transRoute('routes.plantMonitoring'), [PageController::class, 'plantMonitoring'])->name('plantmonitor');
    Route::get(LaravelLocalization::transRoute('routes.weatherMonitoring'), [PageController::class, 'weatherMonitoring'])->name('weathermonitor');
    Route::get(LaravelLocalization::transRoute('routes.partnership'), [PageController::class, 'partnership'])->name('partnership');
    Route::get(LaravelLocalization::transRoute('routes.shop'), [PageController::class, 'shop'])->name('shop');
    Route::get(LaravelLocalization::transRoute('routes.shopOil'), [PageController::class, 'shopOil'])->name('shopoil');
    Route::get(LaravelLocalization::transRoute('routes.shopTea'), [PageController::class, 'shopTea'])->name('shoptea');
    Route::get(LaravelLocalization::transRoute('routes.shopFlowers'), [PageController::class, 'shopFlowers'])->name('shopflowers');
    Route::get('/shopcontent', [PageController::class, 'shopContent'])->name('shopcontent');
    Route::get(LaravelLocalization::transRoute('routes.experience'), [PageController::class, 'experience'])->name('experience');

    Route::get(LaravelLocalization::transRoute('routes.marigoldFarmAndFields'), [PageController::class, 'farmFields'])->name('farmfields');
    Route::get(LaravelLocalization::transRoute('routes.contact'), [PageController::class, 'contact'])->name('contact');
    Route::get(LaravelLocalization::transRoute('routes.giftShop'), [PageController::class, 'giftShop'])->name('giftshop');
    Route::get(LaravelLocalization::transRoute('routes.gallery'), [PageController::class, 'gallery'])->name('gallery');
    Route::get(LaravelLocalization::transRoute('routes.faq'), [PageController::class, 'faq'])->name('faq');
    Route::get(LaravelLocalization::transRoute('routes.cart'),[PageController::class,'cart'])->name('cart');

    Route::get('/dashboard', function () {
        return view('landing.landing');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('redirect')->group(function () {
        Route::get(LaravelLocalization::transRoute('routes.supply'),[PageController::class,'supply'])->name('supply');
        Route::get(LaravelLocalization::transRoute('routes.demand'),[PageController::class,'demand'])->name('demand');
        Route::get(LaravelLocalization::transRoute('routes.contactFarming'),[PageController::class,'contactFarming'])->name('contactfarming');
        Route::get(LaravelLocalization::transRoute('routes.investment'),[PageController::class,'investment'])->name('investment');
        
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });


        // Route::get('/supply',[PageController::class,'supply'])-> middleware('redirect');
        // Route::get('/demand',[PageController::class,'demand']);
        // Route::get('/ContactFarming',[PageController::class,'contactFarming']);
        // Route::get('/Investment',[PageController::class,'investment']);

    require __DIR__.'/auth.php';
});
