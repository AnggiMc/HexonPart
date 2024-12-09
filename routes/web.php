<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


Route::get('/', [Controllers\WelcomeController::class, 'index']);
Route::get('/user/Home', [Controllers\HomeController::class, 'index']);
Route::get('/auth/Login', [Controllers\LoginController::class, 'index']);
Route::get('/user/Order', [Controllers\OrderController::class, 'index']);
