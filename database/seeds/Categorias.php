<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class categorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            [
                'nombre'        => 'Aseo Público',
                'descripcion'   => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.'
            ],
            [
                'nombre'        => 'Seguridad Pública',
                'descripcion'   => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500'
            ]
        ];

        foreach ($categorias as $categoria) {
            Categoria::create($categoria);
        }
    }

}
