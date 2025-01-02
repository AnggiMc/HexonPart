<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Edit_BannerController extends Controller
{
    public function index()
    {
        return view('admin.edit-banner');
    }
}
