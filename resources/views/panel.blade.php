@extends('layouts.app')

@section('title', 'Panel de Control')

@section('content')

<section class="bg-[#f8f9fa] py-12">
    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="bg-white bg-opacity-80 px-6 pt-8 pb-12 rounded-lg overflow-hidden text-center relative transition-transform transform hover:scale-105 hover:shadow-lg text-gray-800">
            <h2 class="text-center text-4xl font-bold tracking-tight text-gray-800 sm:text-5xl">
                Panel de Control
            </h2>
            <div class="mt-8 text-gray-800 text-left">
                <p>Bienvenido al panel de control del administrador. Aquí puedes gestionar cursos, catas y más.</p>
                <div class="mt-4">
                    <a href="{{ route('cursos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Añadir Curso
                    </a>
                </div>
                <div class="mt-4">
                    <a href="{{ route('catas.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Gestionar Catas
                    </a>
                </div>
                <div class="mt-4">
                    <a href="{{ route('resenas.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Gestionar Reseñas
                    </a>
                </div>
                <div class="mt-4">
                    <a href="{{ route('admin.personas.form') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Ver Personas Apuntadas
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
