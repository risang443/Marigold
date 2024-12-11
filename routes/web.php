<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;

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

Route::get('/dashboard', function () {
    return view('landing.landing');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('redirect')->group(function () {
    Route::get('/supply',[PageController::class,'supply']);
    Route::get('/demand',[PageController::class,'demand']);
    Route::get('/ContactFarming',[PageController::class,'contactFarming']);
    Route::get('/Investment',[PageController::class,'investment']);
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


    // Route::get('/supply',[PageController::class,'supply'])-> middleware('redirect');
    // Route::get('/demand',[PageController::class,'demand']);
    // Route::get('/ContactFarming',[PageController::class,'contactFarming']);
    // Route::get('/Investment',[PageController::class,'investment']);

require __DIR__.'/auth.php';
