<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


Route::get('/', [Controllers\WelcomeController::class, 'index']);
Route::get('/user/Home', [Controllers\HomeController::class, 'index']);
Route::get('/auth/Login', [Controllers\LoginController::class, 'index']);
Route::get('/auth/Register', [Controllers\RegisterController::class, 'index']);
Route::get('/user/Profil', [Controllers\ProfilController::class, 'index']);
Route::get('/auth/Edit_Profil', [Controllers\Edit_ProfilController::class, 'index']);
Route::get('/auth/Edit_Password', [Controllers\Edit_PasswordController::class, 'index']);
Route::get('/user/Detail_Produk', [Controllers\Detail_ProdukController::class, 'index']);
Route::get('/user/Order', [Controllers\OrderController::class, 'index']);
Route::get('/user/Detail_Order', [Controllers\Detail_OrderController::class, 'index']);
