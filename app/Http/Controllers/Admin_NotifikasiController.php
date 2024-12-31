<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_NotifikasiController extends Controller
{
    public function index()
    {
        return view('admin.notifikasi');
    }
}
