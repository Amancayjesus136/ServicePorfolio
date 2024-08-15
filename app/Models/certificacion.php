<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class certificacion extends Model
{
    use HasFactory;
    protected $table = 'certificaciones';
    protected $primaryKey = 'id_certificado';
    protected $fillable =
    [
        'cer_titulo',
        'cer_fecha_terminado',
        'cer_link',
        'cer_estado',
    ];
}
