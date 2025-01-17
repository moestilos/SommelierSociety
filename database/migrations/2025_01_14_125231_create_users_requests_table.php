<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Tabla para solicitudes de información
class CreateUsersRequestsTable extends Migration
{
    public function up(): void
    {
        Schema::create('user_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre del solicitante
            $table->string('email')->unique(); // Email único
            $table->string('phone'); // Teléfono de contacto
            $table->text('message'); // Mensaje de la solicitud
            $table->timestamps(); // Timestamps para created_at y updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_requests');
    }
}