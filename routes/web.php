<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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
Route::get('/supply', [PageController::class, 'supply']);
Route::get('/demand', [PageController::class, 'demand']);
Route::get('/contactfarming', [PageController::class, 'contactFarming']);
Route::get('/investment', [PageController::class, 'investment']);
Route::get('/farmfields', [PageController::class, 'farmFields']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/giftshop', [PageController::class, 'giftShop']);
Route::get('/gallery', [PageController::class, 'gallery']);
Route::get('/faq', [PageController::class, 'faq']);
