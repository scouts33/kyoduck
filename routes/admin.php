<?php
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

});

Route::namespace('Auth')->group(function () {
    Route::resource( 'auth','AuthController');
});




