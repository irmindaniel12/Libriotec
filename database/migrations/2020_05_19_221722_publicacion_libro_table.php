<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PublicacionLibroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Publicaciones', function (Blueprint $table) {

            $table->increments('Id_libros');
            $table->integer('Id_usuario')->unsigned()->nullable()->default(12);
            $table->string('titulo');
            $table->string('Description');
            $table->string('Imagenes');
            $table->string('Genero');
            $table->string('Editorial');
            $table->string('Autor');
            $table->datetime('Fecha_Publicacion');
            $table->integer('Numero_paginas');
            $table->foreign('Id_usuario')->references('id')->on('users');
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
        Schema::dropIfExists('Publicaciones');
    }
}
