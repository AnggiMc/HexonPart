<?php
// File: app/Models/SystemLog.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SystemLog extends Model
{
    protected $table = 'system_logs';

    protected $fillable = [
        'nama',
        'action',
        'ip_address',
        'user_agent',
        'timestamp',
    ];
}