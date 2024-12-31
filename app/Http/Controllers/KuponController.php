<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KuponController extends Controller
{
    public function index()

    {
        return view('admin.kupon');
    }
}