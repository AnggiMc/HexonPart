<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.welcome');
});
Route::get('/user/home', function () {
    return view('user.home');
});
Route::get('/auth/login', function () {
    return view('auth.login');
});
Route::get('/user/order', function () {
    return view('user.Order');
});
