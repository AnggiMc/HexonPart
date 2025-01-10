<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', [Controllers\WelcomeController::class, 'index']);
Route::group(['prefix' => 'user'], function () {
    Route::get('/Home', [Controllers\HomeController::class, 'index']);
    Route::get('/Profil', [Controllers\ProfilController::class, 'index']);
    Route::get('/Detail_Produk', [Controllers\Detail_ProdukController::class, 'index']);
    Route::get('/Order', [Controllers\OrderController::class, 'index']);
    Route::get('/Detail_Order', [Controllers\Detail_OrderController::class, 'index']);
    Route::get('/Pembayaran', [Controllers\PembayaranController::class, 'index']);
    Route::get('/Kategori_Produk', [Controllers\Kategori_ProdukController::class, 'index']);
});

Route::group(['prefix' => 'auth'], function () {
    Route::get('/Login', [Controllers\LoginController::class, 'index']);
    Route::get('/Register', [Controllers\RegisterController::class, 'index']);
    Route::get('/Edit_Profil', [Controllers\Edit_ProfilController::class, 'index']);
    Route::get('/Edit_Password', [Controllers\Edit_PasswordController::class, 'index']);
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [Controllers\dashboardController::class, 'index']);
    Route::get('/data-produk', [Controllers\Data_ProdukController::class, 'index']);
    Route::get('/edit-data-produk', [Controllers\Edit_Data_ProdukController::class, 'index']);
    Route::get('/tambah-produk', [Controllers\Tambah_ProdukController::class, 'index']);
    Route::get('/data-user', [Controllers\Data_UserController::class, 'index']);
    Route::get('/tambah-user', [Controllers\Tambah_UserController::class, 'index']);
    Route::get('/profile', [Controllers\Admin_ProfileController::class, 'index']);
    Route::get('/edit-profile', [Controllers\editProfileController::class, 'index']);
    Route::get('/wishlist-user', [Controllers\Wishlist_UserController::class, 'index']);
    Route::get('/category', [Controllers\CategoryController::class, 'index']);
    Route::get('/edit-data-category', [Controllers\Edit_Data_CategoryController::class, 'index']);
    Route::get('/tambah-category', [Controllers\Tambah_CategoryController::class, 'index']);
    Route::get('/brand', [Controllers\BrandController::class, 'index']);
    Route::get('/tambah-brand', [Controllers\Tambah_BrandController::class, 'index']);
    Route::get('/edit-data-brand', [Controllers\Edit_Data_BrandController::class, 'index']);
    Route::get('/order', [Controllers\Admin_OrderController::class, 'index']);
    Route::get('/edit-order', [Controllers\Edit_OrderController::class, 'index']);
    Route::get('/payment', [Controllers\PaymentController::class, 'index']);
    Route::get('/tambah-payment', [Controllers\Tambah_PaymentController::class, 'index']);
    Route::get('/edit-payment', [Controllers\Edit_PaymentController::class, 'index']);
    Route::get('/kupon', [Controllers\KuponController::class, 'index']);
    Route::get('/setting', [Controllers\SettingController::class, 'index']);
    Route::get('/notifikasi', [Controllers\Admin_NotifikasiController::class, 'index']);
    Route::get('/detail-notifikasi', [Controllers\Detail_NotifikasiAdmController::class, 'index']);
    Route::get('/edit-nama-logo', [Controllers\Edit_Nama_LogoController::class, 'index']);
    Route::get('/banner', [Controllers\BannerController::class, 'index']);
    Route::get('/tambah-banner', [Controllers\Tambah_BannerController::class, 'index']);
    Route::get('/edit-banner', [Controllers\Edit_BannerController::class, 'index']);
    Route::get('/edit-footer', [Controllers\Edit_FooterController::class, 'index']);
});
// routes/web.php
use App\Http\Controllers\ForgotPasswordController;

// Route untuk halaman Lupa Password
Route::get('auth/lupa-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');

// Route untuk mengirim email reset password
Route::post('auth/lupa-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// routes/web.php

use App\Http\Controllers\RegisterController;

// Route untuk menampilkan form registrasi
Route::get('auth/Register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Route untuk menyimpan data registrasi
Route::post('auth/Register', [RegisterController::class, 'register']);

use App\Http\Controllers\LoginController;

// Route untuk menampilkan form login
Route::get('auth/Login', [LoginController::class, 'showLoginForm'])->name('login');

// Route untuk memproses login
Route::post('auth/Login', [LoginController::class, 'login']);



Route::middleware(['auth', 'check_role:super-admin,manager,customer-service'])->group(function () {
  Route::get('admin/dashboard', [Controllers\dashboardController::class, 'index']);
  Route::get('admin/user', [Controllers\UsersController::class, 'index']);
  Route::get('admin/dashboard', [Controllers\dashboardController::class, 'index']);
  Route::get('admin/dashboard', [Controllers\dashboardController::class, 'index']);
  Route::get('admin/dashboard', [Controllers\dashboardController::class, 'index']);
  Route::get('admin/dashboard', [Controllers\dashboardController::class, 'index']);
  Route::get('admin/dashboard', [Controllers\dashboardController::class, 'index']);
});
  


// Route untuk logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin/system-logs', 'Admin\SystemLogController@index');