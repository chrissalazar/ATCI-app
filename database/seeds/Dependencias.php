<?php

use Illuminate\Database\Seeder;
use App\Dependencia;

class dependencias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dependencias = [
            [
                'nombre'        => 'Obras Públicas',
                'descripcion'   => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500',
                'activa'        => 1,
                'icono'         => '',
                'calle'         => 'calle',
                'num_ext'       => '100',
                'num_int'       => '',
                'colonia'       => 'centro',
                'encargado'     => 2
            ],
            [
                'nombre'        => 'Hacienda Municipal',
                'descripcion'   => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500',
                'activa'        => 1,
                'icono'         => '',
                'calle'         => 'calle',
                'num_ext'       => '100',
                'num_int'       => '',
                'colonia'       => 'centro',
                'encargado'     => 1
            ]
        ];

        foreach ($dependencias as $dependencia) {
            Dependencia::create($dependencia);
        }
    }
}
