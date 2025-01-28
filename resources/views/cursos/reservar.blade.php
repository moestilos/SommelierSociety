@extends('layouts.app')

@section('title', 'Reservar Curso')

@section('content')
<main style="background-image: url('{{ asset('img/catainfofondo.jpg') }}'); background-size: cover; background-position: center; min-height: 63vh;">
    <div class="container mx-auto py-10">
        <div class="bg-white shadow-md rounded-lg p-6 max-w-xl mx-auto">
            <h1 class="text-3xl font-bold mb-6 text-center text-black">Reservar: {{ $curso->nombre }}</h1>
            <div>
                <form id="reservationForm" action="{{ route('reservar.submit', $curso->id) }}" method="POST" onsubmit="return validateForm()">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Nombre:</label>
                        <input type="text" id="name" name="name" class="w-full border border-gray-300 p-2 rounded" required>
                    </div>
                    <div class="mb-4">
                        <label for="age" class="block text-gray-700">Edad:</label>
                        <input type="number" id="age" name="age" class="w-full border border-gray-300 p-2 rounded" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Correo:</label>
                        <input type="email" id="email" name="email" class="w-full border border-gray-300 p-2 rounded" required>
                    </div>
                    <div class="mb-4">
                        <label for="confirm_email" class="block text-gray-700">Confirmar Correo:</label>
                        <input type="email" id="confirm_email" name="confirm_email" class="w-full border border-gray-300 p-2 rounded" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Reservar</button>
                    </div>
                </form>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('cursos.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Volver a Cursos
                </a>
            </div>
            @if(Auth::check() && Auth::user()->is_admin)
            <div class="text-center mt-4">
                <a href="{{ route('personasReserv.list', $curso->id) }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Ver Personas Apuntadas
                </a>
            </div>
            @endif
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