<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Detail_NotifikasiAdmController extends Controller
{
    public function index()
    {
        return view('admin.detail-notifikasi');
    }
}
