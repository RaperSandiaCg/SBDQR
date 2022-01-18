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

            $table->string('nombre', 50);

            $table->timestamp('fecha_inicio');
            $table->timestamp('fecha_termino')->nullable();

            $table->string('encargado', 50)->nullable();
            $table->string('auditor', 50)->nullable();
            $table->string('energia_0', 50)->nullable();

            $table->string('dep_mecanico', 100)->nullable();
            $table->string('dep_electrico', 100)->nullable();
            $table->string('dep_operaciones', 100)->nullable();

            $table->string('prueba_energia_m', 100)->nullable();
            $table->string('prueba_energia_e', 100)->nullable();
            $table->string('prueba_energia_o', 100)->nullable();

            $table->string('estado', 50)->nullable();

            $table->unsignedBigInteger('equipo_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('equipo_id')->references('id')->on('equipos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

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
