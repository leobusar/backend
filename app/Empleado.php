<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    protected $fillable = [
        'nombre', 'telefono','fecha_nac', 'documento', 'activo'
    ];
}
