<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tambahDataController extends Controller
{
    public function index()
    {
        return view('admin.tambah-data');
    }
}