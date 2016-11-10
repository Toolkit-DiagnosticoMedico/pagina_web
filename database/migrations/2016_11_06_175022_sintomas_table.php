<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SintomasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sintomas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('temperatura');
            $table->string('glucosa');
            $table->string('presion');
            $table->string('colesterol');

            $table->integer('id_paciente')->unsigned();
            $table->foreign('id_paciente')->references('id')->on('paciente')->onUpdate('cascade');
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
        Schema::drop('sintomas');
    }
}
