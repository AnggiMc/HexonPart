<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Data_UserController extends Controller
{
    public function index()
    {
        return view('admin.data-user');
    }
}
