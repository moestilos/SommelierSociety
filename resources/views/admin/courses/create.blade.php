@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Crear Nuevo Curso</h1>

    @if ($errors->any())
        <div class="mb-6">
            <ul class="text-red-500">
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.courses.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow-md max-w-xl">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Nombre del Curso</label>
            <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>
            <textarea name="description" id="description" rows="4" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required></textarea>
        </div>

        <div class="mb-4">
            <label for="total_hours" class="block text-sm font-medium text-gray-700">Horas Totales</label>
            <input type="number" name="total_hours" id="total_hours" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
        </div>

        <div class="mb-4">
            <label for="max_students" class="block text-sm font-medium text-gray-700">Máximo de Estudiantes</label>
            <input type="number" name="max_students" id="max_students" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
        </div>

        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Imagen del Curso</label>
            <input type="file" name="image" id="image" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            Crear Curso
        </button>
    </form>
@endsection
