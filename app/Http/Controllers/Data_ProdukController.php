<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Data_ProdukController extends Controller
{
    public function index()
    {
        return view('admin.data-produk');
    }
}