<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ciudadano_id')->unsigned();
            $table->string('folio')->unique();
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('colonia');
            $table->string('observacion')->nullable();
            $table->string('comentario')->nullable();
            $table->string('estado');
            $table->string('etapa');
            $table->timestamps();

            $table->foreign('ciudadano_id')->references('id')->on('ciudadanos');
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
        Schema::dropIfExists('reportes');
    }
}
