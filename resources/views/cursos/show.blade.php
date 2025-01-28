@extends('layouts.app')

@section('title', 'Detalles del Curso')

@section('content')

<section class="bg-[#f8f9fa] py-12">
    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="bg-white bg-opacity-80 px-6 pt-8 pb-12 rounded-lg overflow-hidden text-center relative transition-transform transform hover:scale-105 hover:shadow-lg text-gray-800">
            <h2 class="text-center text-4xl font-bold tracking-tight text-gray-800 sm:text-5xl">
                {{ $curso->nombre }}
            </h2>
            <div class="mt-8 text-gray-800 text-left">
                <p><strong>Descripción breve:</strong> {{ $curso->descripcion_breve }}</p>
                <p><strong>Descripción:</strong> {{ $curso->descripcion }}</p>
                <p><strong>Contenidos:</strong> {{ $curso->contenidos }}</p>
                <p><strong>Modalidad:</strong> {{ $curso->modalidad }}</p>
                <p><strong>Duración:</strong> {{ $curso->duracion }} horas</p>
                <p><strong>Lugar:</strong> {{ $curso->lugar }}</p>
                <p><strong>Coste:</strong> {{ $curso->coste }}€</p>
                <p><strong>Idioma:</strong> {{ $curso->idioma }}</p>
                <p><strong>Plazas disponibles:</strong> {{ $curso->plazas_disponibles }}</p>
            </div>
            <button onclick="window.location.href='{{ route('reservar.form', $curso->id) }}'" class="px-4 py-2 mt-8 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-yellow-500 rounded-md hover:bg-yellow-600 focus:outline-none focus:bg-yellow-600">
                Reservar
            </button>
            <div class="text-center mt-4">
                <a href="{{ route('tarifas.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Volver a Tarifas
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
