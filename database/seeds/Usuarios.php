<?php

use Illuminate\Database\Seeder;
use App\Ciudadano;
use App\Funcionario;


class usuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ciudadanos = [
            [
                'nombre'    => 'Jhon',
                'apellidos' => 'Snow Stark',
                'email'     => 'jss@correo.com',
                'password'  => md5('123456'),
                'telefono'  => '0000000000',
                'calle'     => 'calle',
                'num_int'   => '12',
                'num_ext'   => '',
                'colonia'   => 'centro',
                'codigo_postal' => '12345'
            ],
            [
                'nombre'    => 'Aria',
                'apellidos' => 'Stark',
                'email'     => 'aria@correo.com',
                'password'  => md5('123456'),
                'telefono'  => '0000000000',
                'calle'     => 'calle',
                'num_int'   => '120',
                'num_ext'   => '',
                'colonia'   => 'wintefell',
                'codigo_postal' => '12345'
            ]
        ];

        $funcionarios = [
            [
                'nombre'    => 'Mario',
                'apellidos' => 'Algo Rodriguez',
                'email'     => 'func@correo.com',
                'password'  => md5('123456'),
                'cargo'     => 'Director de Hacienda Municipal',
                'telefono'  => '0001110001'
            ],
            [
                'nombre'    => 'Juanito',
                'apellidos' => 'Pérez',
                'email'     => 'jp@correo.com',
                'password'  => md5('123456'),
                'cargo'     =>'Director de Obras Públicas',
                'telefono'  =>'0000000000'
            ]
        ];

        foreach ($ciudadanos as $ciudadano) {
            Ciudadano::create($ciudadano);
        }

        foreach ($funcionarios as $funcionario) {
            Funcionario::create($funcionario);
        }

    }
}
