<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependencia extends Model
{
    protected $table = 'dependencias';

    protected $fillable = [
        'nombre',
        'descripcion',
        'activa',
        'icono',
        'calle',
        'num_ext',
        'num_int',
        'colonia',
        'encargado'
    ];
}
