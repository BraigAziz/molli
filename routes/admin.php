<?php

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;



Route::prefix('admin')->group(function() {


    Route::get('/login',[AdminLoginController::class,'showAdminLoginForm'])->name('admin.login-view');
    Route::post('/login',[AdminLoginController::class,'adminLogin'])->name('admin.login');
//    Route::get('/admin/register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
//    Route::post('/admin/register',[RegisterController::class,'createAdmin'])->name('admin.register');
    Route::post('/logout', [AdminLoginController::class,'logout'])->name('admin.logout');


    //Route::group(['middleware' => 'auth:admin'], function() {
        Route::get('/', function () {
            return view('admin.home');
        });

        Route::get('products', [ProductController::class,'index'])->name('admin.products');
        Route::get('add-product', [ProductController::class,'create'])->name('addProduct');
        Route::post('add-product', [ProductController::class,'store'])->name('postAddProduct');


        Route::get('/dashboard', function() {
            return view('admin.home');
        });
    //});

});




