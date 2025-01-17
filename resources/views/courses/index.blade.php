@extends('layouts.app')

@section('content')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Cursos Disponibles') }}
    </h2>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow sm:rounded-lg p-6">
                @if($courses->isEmpty())
                    <p class="text-center text-gray-500">No hay cursos disponibles en este momento.</p>
                @else
                    @foreach ($courses as $course)
                        <div class="mb-6 border-b pb-4">
                            @if($course->image)
                                <img src="{{ asset($course->image) }}" alt="{{ $course->name }}" class="mb-4 w-full h-64 object-cover">
                            @endif
                            <h3 class="text-lg font-semibold">{{ $course->name }}</h3>
                            <p>{{ \Illuminate\Support\Str::limit($course->description, 150) }}</p>
                            <p class="text-sm text-gray-500">Horas totales: {{ $course->total_hours }}</p>
                            <p class="text-sm text-gray-500">
                                Estudiantes inscritos: {{ $course->enrolled_students }}/{{ $course->max_students }}
                            </p>
                            <a href="{{ route('courses.show', $course->id) }}" class="text-blue-600 hover:underline">
                                Ver más detalles
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
