<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $table = 'reportes';

    protected $fillable = [
        'ciudadano_id',
        'folio',
        'titulo',
        'descripcion',
        'observacion',
        'comentario',
        'estado',
        'etapa',
        'colonia'
    ];


}
