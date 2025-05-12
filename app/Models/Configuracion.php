<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    // use HasFactory;

    protected $table = 'configuracions';

    protected $fillable = [
        'nombre_sistema', 'logo', 'direccion', 'telefono', 'correo', 'igv'
    ];
}
