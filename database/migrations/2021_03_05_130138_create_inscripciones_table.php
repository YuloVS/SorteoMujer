<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion');
            $table->integer('cantidad');
            $table->string('lugar');
            $table->timestamps();
        });

        Schema::create('inscripciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dni')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('email')->nullable();
            $table->string('direccion');
            $table->integer('ganador')->default(0);
            $table->integer('verificado')->default(0);
            $table->integer('producto_id')->default(0);
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
        Schema::dropIfExists('inscripciones');
    }
}
