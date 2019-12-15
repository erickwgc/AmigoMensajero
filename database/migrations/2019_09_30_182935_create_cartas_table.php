<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartas', function (Blueprint $table) {
            $table->increments('cod_car');
            $table->string('autor');
            $table->string('contenido');
            $table->string('fecha');
            $table->string('hora');
            $table->string('color_car');
            $table->boolean('leida');
            $table->boolean('atendida');
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
        Schema::drop('cartas');
    }
}
