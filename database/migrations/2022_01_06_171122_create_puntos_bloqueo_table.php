<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuntosBloqueoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntos_bloqueo', function (Blueprint $table) {
            $table->id();

            $table->string('tag', 100)->unique();
            $table->string('nombre', 100);

            $table->unsignedBigInteger('equipo_id');

            $table->foreign('equipo_id')->references('id')->on('equipos')->cascadeOnUpdate;

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
        Schema::dropIfExists('puntos_bloqueo');
    }
}
