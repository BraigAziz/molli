<?php

use App\Http\Controllers\Auth\AssistantLoginController;
use Illuminate\Support\Facades\Route;



Route::prefix('assistant')->group(function() {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/login',[AssistantLoginController::class,'showLoginForm'])->name('assistant.login-view');
    Route::post('/login',[AssistantLoginController::class,'login'])->name('assistant.login');
//    Route::get('/admin/register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
//    Route::post('/admin/register',[RegisterController::class,'createAdmin'])->name('admin.register');
    Route::post('/logout', [AssistantLoginController::class,'logout'])->name('assistant.logout');


    Route::group(['middleware' => 'auth:assistant'], function() {
        Route::get('/dashboard', function() {
            return view('assistant.home');
        })-> name('assistant.dash');
        Route::get('/test', function() {
            return view('assistant.home');
        });
    });

});




