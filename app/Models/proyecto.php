<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proyecto extends Model
{
    use HasFactory;
    protected $table = 'proyectos';
    protected $primaryKey = 'id_proyecto';
    protected $fillable =
    [
        'pro_nombre_proyecto',
        'pro_imagen_proyecto',
        'pro_link_proyecto',
        'pro_estado',
    ];
}
