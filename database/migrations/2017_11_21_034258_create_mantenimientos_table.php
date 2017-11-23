<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMantenimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mantenimientos', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('empresa_id')->unsigned();
          $table->foreign('empresa_id')->references('id')->on('empresas');
          $table->integer('equipo_id')->unsigned();
          $table->foreign('equipo_id')->references('id')->on('equipos');
          $table->date('fecha');
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
        Schema::dropIfExists('mantenimientos');
    }
}
