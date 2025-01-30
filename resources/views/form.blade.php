@extends('layouts.app')

@section('content')
    <div style="background-image: url('{{ asset('img/fondoformu.png') }}'); background-size: cover; background-position: center; padding: 20px;">
        <div class="max-w-lg mx-auto bg-white p-8 rounded shadow-md">
            <h1 class="text-2xl font-bold mb-6">Formulario de Administrador</h1>
            <form id="adminForm" action="{{ route('admin.form.submit') }}" method="POST" onsubmit="return confirmSubmit()">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Nombre del curso/cata:</label>
                    <input type="text" id="name" name="name" class="w-full border border-gray-300 p-2 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="type" class="block text-gray-700">Tipo:</label>
                    <select id="type" name="type" class="w-full border border-gray-300 p-2 rounded" required>
                        <option value="cata">Cata</option>
                        <option value="curso">Curso</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="date" class="block text-gray-700">Día:</label>
                    <input type="date" id="date" name="date" class="w-full border border-gray-300 p-2 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="time" class="block text-gray-700">Hora:</label>
                    <input type="time" id="time" name="time" class="w-full border border-gray-300 p-2 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="location" class="block text-gray-700">Localización:</label>
                    <input type="text" id="location" name="location" class="w-full border border-gray-300 p-2 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700">Descripción:</label>
                    <textarea id="description" name="description" class="w-full border border-gray-300 p-2 rounded" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Enviar</button>
                </div>
            </form>
            <div class="text-center mt-4">
                <a href="{{ route('catas.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Volver al Calendario
                </a>
            </div>
        </div>
    </div>

    <script>
        function confirmSubmit() {
            return confirm('¿Estás seguro de que deseas enviar este formulario?');
        }
    </script>
@endsection