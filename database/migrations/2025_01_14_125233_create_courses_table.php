<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre del curso
            $table->text('description'); // Descripción del curso
            $table->integer('enrolled_students')->default(0); // Estudiantes inscritos
            $table->integer('total_hours'); // Total de horas del curso
            $table->integer('max_students'); // Número máximo de estudiantes
            $table->timestamps(); // created_at y updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
}
