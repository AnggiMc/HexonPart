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
Route::get('/admin/dashboard', [Controllers\dashboardController::class, 'index']);
Route::get('/admin/data-produk', [Controllers\Data_ProdukController::class, 'index']);
Route::get('/admin/edit-data-produk', [Controllers\Edit_Data_ProdukController::class, 'index']);
Route::get('/admin/tambah-produk', [Controllers\Tambah_ProdukController::class, 'index']);
Route::get('/admin/data-user', [Controllers\Data_UserController::class, 'index']);
Route::get('/admin/tambah-user', [Controllers\Tambah_UserController::class, 'index']);
Route::get('/admin/profile', [Controllers\Admin_ProfileController::class, 'index']);
Route::get('/admin/edit-profile', [Controllers\editProfileController::class, 'index']);
Route::get('/admin/wishlist-user', [Controllers\Wishlist_UserController::class, 'index']);
Route::get('/admin/category', [Controllers\CategoryController::class, 'index']);
Route::get('/admin/edit-data-category', [Controllers\Edit_Data_CategoryController::class, 'index']);
Route::get('/admin/tambah-category', [Controllers\Tambah_CategoryController::class, 'index']);
Route::get('/admin/brand', [Controllers\BrandController::class, 'index']);
Route::get('/admin/tambah-brand', [Controllers\Tambah_BrandController::class, 'index']);
Route::get('/admin/edit-data-brand', [Controllers\Edit_Data_BrandController::class, 'index']);
Route::get('/admin/order', [Controllers\Admin_OrderController::class, 'index']);
Route::get('/admin/edit-order', [Controllers\Edit_OrderController::class, 'index']);
Route::get('/admin/payment', [Controllers\PaymentController::class, 'index']);
Route::get('/admin/tambah-payment', [Controllers\Tambah_PaymentController::class, 'index']);
Route::get('/admin/edit-payment', [Controllers\Edit_PaymentController::class, 'index']);
Route::get('/admin/kupon', [Controllers\KuponController::class, 'index']);
Route::get('/admin/setting', [Controllers\SettingController::class, 'index']);
