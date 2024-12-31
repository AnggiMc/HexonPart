<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Edit_Data_ProdukController extends Controller
{
    public function index()
    {
        return view('admin.edit-data-produk');
    }
}