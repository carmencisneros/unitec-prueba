<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('edad');
            $table->integer('id_estado_civil')->unsigned();
            $table->integer('id_genero')->unsigned();
            $table->integer('id_nivel')->unsigned();
            $table->integer('id_carrera')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_estado_civil')->references('id')->on('estado_civils')->onDelete('cascade');
            $table->foreign('id_genero')->references('id')->on('generos')->onDelete('cascade');
            $table->foreign('id_nivel')->references('id')->on('nivels')->onDelete('cascade');

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
    }
}
