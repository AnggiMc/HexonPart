<?php

// File: app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SystemLog;

class AdminController extends Controller
{
    public function index()
    {
        $systemLogs = SystemLog::all();
        return view('admin.dashboard', compact('systemLogs'));
    }
}