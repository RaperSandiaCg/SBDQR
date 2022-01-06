<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->id();

            $table->string('nombre', 50)->nullable();
            $table->timestamp('fecha_inicio')->nullable();
            $table->timestamp('fecha_termino');
            $table->string('estado', 50);



            $table->unsignedBigInteger('equipo_id')->nullable();

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
        Schema::dropIfExists('actividades');
    }
}
