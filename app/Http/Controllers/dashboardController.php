<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Model untuk produk
use App\Models\User; // Model untuk pengguna
use App\Models\Order; // Model untuk pesanan
use App\Models\Coupon;
use App\Models\Category; // Model untuk kategori
use App\Models\Brand; // Model untuk merek
use App\Models\Payment; // Model untuk pembayaran
use App\Models\Setting;

class DashboardController extends Controller
{
    /**
     * Menampilkan dashboard dengan semua statistik.
     */
    public function index()
    {
        // Hitung total produk
        $totalProducts = Product::count();

        // Hitung total pengguna
        $totalUsers = User::count();

        // Hitung total pesanan
        $totalOrders = Order::count();

        // Hitung total kategori
        $totalCategories = Category::count();

        // Hitung total merek
        $totalBrands = Brand::count();

        // Hitung total pembayaran
        $totalPayments = Payment::count();

        // Kirim data ke view
        return view('admin/Dashboard', compact(
            'totalProducts',
            'totalUsers',
            'totalOrders',
            'totalCategories',
            'totalBrands',
            'totalPayments'
        ));
    }
}