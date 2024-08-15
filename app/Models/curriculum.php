<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curriculum extends Model
{
    use HasFactory;
    protected $table = 'curricula';
    protected $primaryKey = 'id_curriculum';
    protected $fillable =
    [
        'cur_extracto',
        'cur_correo_electronico',
        'cur_direccion',
        'cur_telefono',
        'cur_estado',
    ];
}
