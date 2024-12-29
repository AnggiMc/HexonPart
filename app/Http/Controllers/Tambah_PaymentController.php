<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tambah_PaymentController extends Controller
{
    public function index()
    {
        return view('admin.tambah-payment');
    }
}
