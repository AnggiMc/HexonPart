<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Edit_orderController extends Controller
{
    public function index()
    {
        return view('admin.edit-order');
    }
}
