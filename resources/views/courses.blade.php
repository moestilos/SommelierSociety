@extends('layouts.app')

@section('title', 'Cursos')

@section('content')
<div class="text-center">
    <h1 class="text-4xl font-bold text-jerez">Nuestros Cursos</h1>
    <p class="text-gray-700 mt-4">Explora nuestra variedad de cursos diseñados para todos los amantes del vino.</p>
</div>
@if($courses->isEmpty())
    <p class="text-center text-gray-500">No hay cursos disponibles en este momento.</p>
@else
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
        @foreach ($courses as $course)
            <div class="bg-white shadow sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold">{{ $course->name }}</h3>
                <p>{{ Str::limit($course->description, 150) }}</p>
                <p class="text-sm text-gray-500">Horas totales: {{ $course->total_hours }}</p>
                <p class="text-sm text-gray-500">
                    Estudiantes inscritos: {{ $course->enrolled_students }}/{{ $course->max_students }}
                </p>
                <a href="{{ route('courses.show', $course->id) }}" class="text-blue-600 hover:underline">
                    Ver más detalles
                </a>
            </div>
        @endforeach
    </div>
@endif

@endsection
