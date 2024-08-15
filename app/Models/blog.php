<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $primaryKey = 'id_blog';
    protected $fillable =
    [
        'blo_imagen_blog',
        'blo_titulo_blog',
        'blo_categoria',
        'blo_autor_nombre',
        'blo_foto_autor',
        'blo_fecha_publicado',
        'blo_informacion',
        'blo_estado',
    ];
}
