<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class experiencia extends Model
{
    use HasFactory;
    protected $table = 'experiencias';
    protected $primaryKey = 'id_experiencia';
    protected $fillable =
    [
        'exp_nombre_empresa',
        'exp_cargo_empresa',
        'exp_fecha_inicio',
        'exp_fecha_final',
        'exp_descripcion_cargo',
        'exp_estado',
    ];
}
