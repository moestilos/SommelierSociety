@extends('layouts.app')

@section('title', 'Reservar Curso')

@section('content')
<main style="background-image: url('{{ asset('img/catainfofondo.jpg') }}'); background-size: cover; background-position: center; min-height: 63vh;">
    <div class="container mx-auto py-10">
        <div class="bg-gray-800 bg-opacity-60 p-8 rounded-lg shadow-lg">
            <h1 class="text-4xl font-bold text-white mb-4 text-center">Reservar: {{ $curso->nombre }}</h1>
            <div>
                <form id="reservationForm" action="{{ route('reservar.submit', $curso->id) }}" method="POST" onsubmit="return validateForm()">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-300">Nombre:</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 rounded bg-gray-700 text-white" required>
                    </div>
                    <div class="mb-4">
                        <label for="age" class="block text-gray-300">Edad:</label>
                        <input type="number" id="age" name="age" class="w-full px-4 py-2 rounded bg-gray-700 text-white" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-300">Correo:</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 rounded bg-gray-700 text-white" required>
                    </div>
                    <div class="mb-4">
                        <label for="confirm_email" class="block text-gray-300">Confirmar Correo:</label>
                        <input type="email" id="confirm_email" name="confirm_email" class="w-full px-4 py-2 rounded bg-gray-700 text-white" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">Reservar</button>
                    </div>
                </form>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('cursos.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Volver a Cursos
                </a>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            var age = document.getElementById('age').value;
            if (age < 18) {
                alert('Debes tener al menos 18 años para reservar.');
                return false;
            }

            var email = document.getElementById('email').value;
            var confirmEmail = document.getElementById('confirm_email').value;
            if (email !== confirmEmail) {
                alert('Los correos electrónicos no coinciden.');
                return false;
            }

            alert('Has sido apuntado al curso correctamente.');
            return true;
        }
    </script>
</main>
@endsection