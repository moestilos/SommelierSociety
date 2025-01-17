@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Gestión de Cursos</h1>

    <!-- Botón Crear Curso -->
    <div class="mb-6">
        <a href="{{ route('admin.courses.create') }}" 
           class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            Crear Curso
        </a>
    </div>

    @if(session('success'))
        <p class="text-green-500">{{ session('success') }}</p>
    @endif

    <!-- Tabla de Cursos -->
    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 px-4 py-2">#</th>
                <th class="border border-gray-300 px-4 py-2">Nombre</th>
                <th class="border border-gray-300 px-4 py-2">Descripción</th>
                <th class="border border-gray-300 px-4 py-2">Estudiantes Inscritos</th>
                <th class="border border-gray-300 px-4 py-2">Horas Totales</th>
                <th class="border border-gray-300 px-4 py-2">Máximo de Estudiantes</th>
                <th class="border border-gray-300 px-4 py-2">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $course->id }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $course->name }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ \Illuminate\Support\Str::limit($course->description, 50) }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $course->enrolled_students }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $course->total_hours }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $course->max_students }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">
    <!-- Botón Editar -->
    <a href="{{ route('admin.courses.edit', $course->id) }}" 
       class="inline-block px-3 py-1 text-white bg-yellow-500 rounded hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400 transition duration-150">
        Editar
    </a>

    <!-- Botón Eliminar -->
    <form action="{{ route('admin.courses.destroy', $course->id) }}" method="POST" class="inline-block">
        @csrf
        @method('DELETE')
        <button type="submit" 
                class="inline-block px-3 py-1 text-white bg-red-600 rounded hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-400 transition duration-150"
                onclick="return confirm('¿Estás seguro?')">
            Eliminar
        </button>
    </form>
</td>


                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
