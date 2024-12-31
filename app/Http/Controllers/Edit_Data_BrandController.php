<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Edit_Data_BrandController extends Controller
{
    public function index()
    {
        return view('admin.edit-data-brand');
    }
}
