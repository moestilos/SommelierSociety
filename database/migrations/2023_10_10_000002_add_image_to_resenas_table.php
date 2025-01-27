<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToResenasTable extends Migration
{
    public function up()
    {
        Schema::table('resenas', function (Blueprint $table) {
            $table->string('image')->nullable()->after('stars'); // Agregar columna 'image' después de 'stars'
        });
    }

    public function down()
    {
        Schema::table('resenas', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
}
