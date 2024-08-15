<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class habilidad extends Model
{
    use HasFactory;
    protected $table = 'habilidades';
    protected $primaryKey = 'id_habilidad';
    protected $fillable =
    [
        'hab_nombre_habilidad',
        'hab_estado',
    ];
}
