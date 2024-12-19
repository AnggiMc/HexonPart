<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataOrderController extends Controller
{
    public function index()
    {
        return view('admin.data-order');
    }
}
