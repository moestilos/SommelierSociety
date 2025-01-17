<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre del administrador
            $table->string('email')->unique(); // Email único
            $table->string('password'); // Contraseña
            $table->timestamps(); // Marcas de tiempo: created_at, updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
}
