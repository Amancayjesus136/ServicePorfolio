<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class educacion extends Model
{
    use HasFactory;
    protected $table = 'educaciones';
    protected $primaryKey = 'id_educacion';
    protected $fillable =
    [
        'edu_fecha_inicio',
        'edu_fecha_final',
        'edu_titulo',
        'edu_estado_educacion',
        'edu_nombre_educacion',
        'edu_estado',
    ];
}
