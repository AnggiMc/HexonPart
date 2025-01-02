<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kategori_ProdukController extends Controller
{
    public function index()
    {
        return view('user.Kategori_Produk');
    }
}
