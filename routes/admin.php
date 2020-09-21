<?php
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

});

Route::namespace('Auth')->group(function () {
    Route::get('/register', 'RegisterController@showRegistrationForm');
    Route::get('/login', 'LoginController@showRegistrationForm');
    Route::resource("/list", 'AdminUserController');
});




