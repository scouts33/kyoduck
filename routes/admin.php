<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

});

Route::middleware('adminAuth:admin')->group(function () {
    Route::namespace('Auth')->group(function () {
        Route::resource( 'auth','AuthController');
    });
    Route::resource('user', 'UserController');
    Route::resource('order', 'OrderController');
});

Route::middleware('guest')->group(function () {
    Route::namespace('Auth')->group(function () {
        Route::get('login', [LoginController::class, 'showLoginForm']);
        Route::post('login', [LoginController::class, 'login'])->name('admin/login');
        route::post('logout', [LoginController::class, 'logout'])->name('admin/logout');
    });
});
