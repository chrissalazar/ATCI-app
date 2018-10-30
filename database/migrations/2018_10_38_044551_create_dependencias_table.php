<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDependenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->unique();
            $table->string('descripcion');
            $table->boolean('activa');
            $table->string('icono');
            $table->string('calle')->nullable();
            $table->integer('num_int')->nullable();
            $table->integer('num_ext')->nullable();
            $table->string('colonia')->nullable();
            $table->integer('encargado')->unsigned();
            $table->timestamps();

            $table->foreign('encargado')->references('id')->on('funcionarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('dependencias');
    }
}
