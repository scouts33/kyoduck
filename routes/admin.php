<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

});

Route::namespace('Auth')->group(function () {
//    Route::middleware('adminAuth')->group(function () {
        Route::resource( 'auth','AuthController');
//    });

    Route::middleware('guest')->group(function () {
        Route::get( 'login', [LoginController::class, 'showLoginForm']);
        Route::post( 'login', [LoginController::class, 'login'])->name('admin/login');
    });
});

