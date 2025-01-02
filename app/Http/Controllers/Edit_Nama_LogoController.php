<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Edit_Nama_LogoController extends Controller
{
    public function index()
    {
        return view('admin.edit-nama-logo');
    }
}
