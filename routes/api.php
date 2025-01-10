// File: routes/api.php
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SystemLogController;
use App\Http\Controllers\LiveActivityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SettingController;

Route::middleware('auth:api')->group(function () {
    // Route untuk dashboard
    Route::get('/admin/dashboard', [DashboardController::class, 'index']);

    // Route untuk produk
    Route::get('/admin/products', [ProductController::class, 'index']);
    Route::post('/admin/products', [ProductController::class, 'store']);
    Route::get('/admin/products/{id}', [ProductController::class, 'show']);
    Route::put('/admin/products/{id}', [ProductController::class, 'update']);
    Route::delete('/admin/products/{id}', [ProductController::class, 'destroy']);

    // Route untuk pengguna
    Route::get('/admin/users', [UserController::class, 'index']);
    Route::post('/admin/users', [UserController::class, 'store']);
    Route::get('/admin/users/{id}', [UserController::class, 'show']);
    Route::put('/admin/users/{id}', [UserController::class, 'update']);
    Route::delete('/admin/users/{id}', [UserController::class, 'destroy']);

    // Route untuk pesanan
    Route::get('/admin/orders', [OrderController::class, 'index']);
    Route::post('/admin/orders', [OrderController::class, 'store']);
    Route::get('/admin/orders/{id}', [OrderController::class, 'show']);
    Route::put('/admin/orders/{id}', [OrderController::class, 'update']);
    Route::delete('/admin/orders/{id}', [OrderController::class, 'destroy']);

    // Route untuk kupon
    Route::get('/admin/coupons', [CouponController::class, 'index']);
    Route::post('/admin/coupons', [CouponController::class, 'store']);
    Route::get('/admin/coupons/{id}', [CouponController::class, 'show']);
    Route::put('/admin/coupons/{id}', [CouponController::class, 'update']);
    Route::delete('/admin/coupons/{id}', [CouponController::class, 'destroy']);

    // Route untuk pembayaran
    Route::get('/admin/payments', [PaymentController::class, 'index']);
    Route::post('/admin/payments', [PaymentController::class, 'store']);
    Route::get('/admin/payments/{id}', [PaymentController::class, 'show']);
    Route::put('/admin/payments/{id}', [PaymentController::class, 'update']);
    Route::delete('/admin/payments/{id}', [PaymentController::class, 'destroy']);

    // Route untuk pengaturan
    Route::get('/admin/settings', [SettingController::class, 'index']);
    Route::post('/admin/settings', [SettingController::class, 'store']);
    Route::get('/admin/settings/{id}', [SettingController::class, 'show']);
    Route::put('/admin/settings/{id}', [SettingController::class, 'update']);
    Route::delete('/admin/settings/{id}', [SettingController::class, 'destroy']);

    // Route untuk log sistem
    Route::get('/admin/system-logs', [SystemLogController::class, 'index']);

    // Route untuk aktivitas live
    Route::get('/admin/live-activity', [LiveActivityController::class, 'index']);
});