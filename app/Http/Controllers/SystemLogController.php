<?php

// File: app/Http/Controllers/Admin/SystemLogController.php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\SystemLog;

class SystemLogController extends Controller
{
    public function index()
    {
        $systemLogs = SystemLog::all();
        return view('admin.systemlogs', compact('systemLogs'));
    }
}