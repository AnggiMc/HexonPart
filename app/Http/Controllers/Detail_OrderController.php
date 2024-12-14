<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Detail_OrderController extends Controller
{
    public function index()

    {
        return view('user.Detail_Order');
    }
}
