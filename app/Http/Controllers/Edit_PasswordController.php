<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Edit_PasswordController extends Controller
{
    public function index()

    {
        return view('auth.Edit_Password');
    }
}
