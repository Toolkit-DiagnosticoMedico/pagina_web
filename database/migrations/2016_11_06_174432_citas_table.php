<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('asunto');
            $table->timestamp('fecha_inicio');
            $table->timestamp('fecha_fin');
             $table->string('descripcion');

            $table->integer('id_paciente')->unsigned();
            $table->foreign('id_paciente')->references('id')->on('paciente')->onDelete('cascade');

            $table->integer('id_doctor')->unsigned();
            $table->foreign('id_doctor')->references('id')->on('doctor')->onDelete('cascade');

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
        Schema::drop('citas');
    }
}
