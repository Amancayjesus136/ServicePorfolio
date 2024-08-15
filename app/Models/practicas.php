<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class practicas extends Model
{
    use HasFactory;
    protected $table = 'practicas';
    protected $primaryKey = 'id_practica';
    protected $fillable =
    [
        'pra_nombre_practica',
        'pra_fecha_inicio',
        'pra_fecha_fin',
        'pra_metodo',
        'pra_estado',
    ];
}
