<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacions', function (Blueprint $table) {
            $table->increments('cod_inf');
            $table->integer('id_usu');
            $table->char('especialidad',15);
            $table->integer('ani_esp');
            $table->string('experiencia');
            $table->string('formacion');
            $table->char('uni_egr',20);
            $table->string('logros');
            $table->string('perfil');
            $table->string('curiculon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function  down()
    {
        Schema::drop('informacions');
    }
}
