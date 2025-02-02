<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResenasTable extends Migration
{
    public function up()
    {
        Schema::create('resenas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('review');
            $table->integer('stars')->default(1);
            $table->string('image')->nullable(); // Agregar columna para la imagen
            $table->integer('likes')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('resenas');
    }
}
