<?php

use App\Http\Controllers\Web\Auth\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

});

Route::namespace('Auth')->group(function () {
    Route::middleware('adminAuth')->group(function() {
        Route::resource( 'auth','AuthController');
    });
});

