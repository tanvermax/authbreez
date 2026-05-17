<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('login', [LoginController::class, "ShowLoginPage"])->name('login');
    Route::get('register', [LoginController::class, "ShowRegPage"])->name('register');

    Route::post('logout', [LoginController::class, "logout"])->name('logout');
    Route::post('authenticate', [LoginController::class, "authenticate"])->name('authenticate');
    Route::post('store', [LoginController::class, "store"])->name('store');

    Route::get('dashboard', [LoginController::class, "dashboard"])->middleware('auth:admin','custom_redirect')->name('dashboard');

     Route::get('verify-email/{id}/{hash}', [LoginController::class,'verifyEmail'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::get('notice', [LoginController::class, "notice"])->name('notice');


    Route::post('resend', [LoginController::class, "resend"])->name('resend');

});


