@extends('layouts.app')

@section('content')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ $course->name }}
    </h2>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow sm:rounded-lg p-6">
                @if($course->image)
                    <img src="{{ asset($course->image) }}" alt="{{ $course->name }}" class="mb-4 w-full h-64 object-cover">
                @endif
                <h3 class="text-lg font-semibold">{{ $course->name }}</h3>
                <p class="mb-4 text-gray-700">{{ $course->description }}</p>
                <p class="text-sm text-gray-500"><strong>Horas Totales:</strong> {{ $course->total_hours }}</p>
                <p class="text-sm text-gray-500">
                    <strong>Estudiantes Inscritos:</strong> {{ $course->enrolled_students }}/{{ $course->max_students }}
                </p>
                <a href="{{ route('courses.index') }}" class="text-blue-600 hover:underline">
                    Volver a la lista de cursos
                </a>
            </div>
        </div>
    </div>
@endsection
