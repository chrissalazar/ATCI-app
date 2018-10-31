<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = 'funcionarios';

    protected $fillable = [
        'nombre',
        'apellidos',
        'email',
        'password',
        'cargo',
        'telefono'
    ];

    protected $hidden = [
        'password'
    ];

}
