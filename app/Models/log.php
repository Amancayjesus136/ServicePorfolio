<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class log extends Model
{
    use HasFactory;
    protected $table = 'logs';
    protected $fillable =
    [
        'error_message',
        'stack_trace',
        'file',
        'line',
        'url',
        'user_ip',
        'user_id',
    ];
}
