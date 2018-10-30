<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('ciudadanos', function (Blueprint $table){
            $table->increments('id');
            $table->string('nombre', 30);
            $table->string('apellidos', 50);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('telefono')->nullable();
            $table->string('calle');
            $table->integer('num_int');
            $table->integer('num_ext')->nullable();
            $table->string('colonia');
            $table->integer('codigo_postal');
            $table->timestamps();
        });

        Schema::create('funcionarios', function (Blueprint $table){
            $table->increments('id');
            $table->string('nombre', 30);
            $table->string('apellidos', 50);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('cargo');
            $table->string('telefono');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('ciudadanos');
        Schema::dropIfExists('funcionarios');
    }
}
