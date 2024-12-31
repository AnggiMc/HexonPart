<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Wishlist_UserController extends Controller
{
    public function index()
    {
        return view('admin.wishlist-user');
    }
}
