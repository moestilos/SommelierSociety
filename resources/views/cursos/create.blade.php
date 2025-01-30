@extends('layouts.app')

@section('title', 'Añadir Curso')

@section('content')

<section class="bg-[#f8f9fa] py-12">
    <div class="mx-auto max-w-screen-md px-4 sm:px-6 lg:px-8">
        <div class="bg-white bg-opacity-80 px-6 pt-8 pb-12 rounded-lg overflow-hidden text-center relative transition-transform transform hover:scale-105 hover:shadow-lg text-gray-800">
            <h2 class="text-center text-4xl font-bold tracking-tight text-gray-800 sm:text-5xl">
                Añadir Curso
            </h2>
            <form action="{{ route('cursos.store') }}" method="POST" class="mt-8">
                @csrf
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" class="w-full border border-gray-300 p-2 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="descripcion_breve" class="block text-gray-700">Descripción Breve:</label>
                    <textarea id="descripcion_breve" name="descripcion_breve" class="w-full border border-gray-300 p-2 rounded" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="descripcion" class="block text-gray-700">Descripción:</label>
                    <textarea id="descripcion" name="descripcion" class="w-full border border-gray-300 p-2 rounded" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="contenidos" class="block text-gray-700">Contenidos:</label>
                    <textarea id="contenidos" name="contenidos" class="w-full border border-gray-300 p-2 rounded" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="modalidad" class="block text-gray-700">Modalidad:</label>
                    <input type="text" id="modalidad" name="modalidad" class="w-full border border-gray-300 p-2 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="duracion" class="block text-gray-700">Duración (horas):</label>
                    <input type="number" id="duracion" name="duracion" class="w-full border border-gray-300 p-2 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="lugar" class="block text-gray-700">Lugar:</label>
                    <input type="text" id="lugar" name="lugar" class="w-full border border-gray-300 p-2 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="coste" class="block text-gray-700">Coste (€):</label>
                    <input type="number" id="coste" name="coste" class="w-full border border-gray-300 p-2 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="idioma" class="block text-gray-700">Idioma:</label>
                    <input type="text" id="idioma" name="idioma" class="w-full border border-gray-300 p-2 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="plazas_disponibles" class="block text-gray-700">Plazas Disponibles:</label>
                    <input type="number" id="plazas_disponibles" name="plazas_disponibles" class="w-full border border-gray-300 p-2 rounded" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Añadir Curso</button>
                </div>
            </form>
            <div class="text-center mt-4">
                <a href="{{ route('tarifas.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Volver a Tarifas
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
