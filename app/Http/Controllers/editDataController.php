<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class editDataController extends Controller
{
    public function index()
    {
        return view('admin.edit-data');
    }
}
