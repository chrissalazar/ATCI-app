<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudadano extends Model
{
    protected $table = 'ciudadanos';

    protected $fillable = [
        'nombre',
        'apellidos',
        'email',
        'password',
        'telefono',
        'calle',
        'num_int',
        'num_ext',
        'colonia',
        'codigo_postal'
    ];

    protected $hidden = [
        'password'
    ];
}
