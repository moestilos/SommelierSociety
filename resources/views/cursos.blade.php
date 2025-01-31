@extends('layouts.app')

@section('title', 'Cursos - Banko')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6 text-center text-white">Nuestros Cursos</h1>
        @if($cursos->isEmpty())
            <p class="text-center text-gray-400">No hay cursos disponibles en este momento.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($cursos as $curso)
                    <div class="bg-gray-800 p-4 rounded-lg shadow-lg">
                        <h2 class="text-xl font-semibold text-white">{{ $curso->nombre }}</h2>
                        <p class="text-gray-300">{{ $curso->descripcion_breve }}</p>
                        <p class="text-gray-400 mt-2">Duración: {{ $curso->duracion }} horas</p>
                        <p class="text-gray-400">Modalidad: {{ $curso->modalidad }}</p>
                        <p class="text-gray-400">Plazas disponibles: {{ $curso->plazas_disponibles }}</p>
                        <p class="text-green-400 font-semibold">Precio: {{ $curso->coste }} €</p>
                        <a href="{{ route('cursos.show', $curso->id) }}" class="block mt-4 text-center bg-blue-600 hover:bg-blue-700 text-white py-2 rounded">Más información</a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection