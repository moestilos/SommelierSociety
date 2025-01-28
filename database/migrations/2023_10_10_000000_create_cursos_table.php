<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion_breve');
            $table->text('descripcion');
            $table->text('contenidos');
            $table->string('modalidad');
            $table->integer('duracion');
            $table->string('lugar');
            $table->decimal('coste', 8, 2);
            $table->string('idioma');
            $table->integer('plazas_disponibles');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
