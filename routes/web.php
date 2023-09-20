<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
*/

Auth::routes();

Route::get('/', function () {
    return view('front.home');
})->name('home_page');
Route::get('/account', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');
Route::post('/order', [OrderController::class, 'store'])->name('orders.store');
Route::get('/thank_you', [OrderController::class, 'done'])->name('thank_you_page');


