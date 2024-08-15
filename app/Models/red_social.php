<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class red_social extends Model
{
    use HasFactory;
    protected $table = 'red_socials';
    protected $primaryKey = 'id_red_social';
    protected $fillable =
    [
        'red_icon',
        'red_link',
        'red_estado',
    ];
}
