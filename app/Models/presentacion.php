<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presentacion extends Model
{
    use HasFactory;
    protected $table = 'presentacions';
    protected $primaryKey = 'id_presentacion';
    protected $fillable =
    [
        'pre_imagen',
        'pre_nombres',
        'pre_titulo',
        'pre_info',
        'pre_informacion',
        'pre_estado',
    ];
}
