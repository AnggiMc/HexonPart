<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Edit_PaymentController extends Controller
{
    public function index()
    {
        return view('admin.edit-payment');
    }
}
