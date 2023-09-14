<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('/', function () {
    return view('front.home');
});

Auth::routes();

Route::get('/account', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




