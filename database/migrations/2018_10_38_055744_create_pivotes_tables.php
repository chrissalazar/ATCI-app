<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes_has_categorias', function (Blueprint $table){
           $table->increments('id');
           $table->integer('reporte_id')->unsigned();
           $table->integer('categoria_id')->unsigned();
           $table->timestamps();

           $table->foreign('reporte_id')->references('id')->on('reportes');
           $table->foreign('categoria_id')->references('id')->on('categorias');
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
        Schema::dropIfExists('reportes_has_categorias');
    }
}
