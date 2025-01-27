@extends('layouts.app')

@section('title', 'Personas Apuntadas')

@section('content')
<main style="background-image: url('{{ asset('img/catainfofondo.jpg') }}'); background-size: cover; background-position: center; min-height: 63vh;">
    <div class="container mx-auto py-10">
        <div class="bg-white shadow-md rounded-lg p-6 max-w-xl mx-auto">
            <h1 class="text-3xl font-bold mb-6 text-center text-black">Personas Apuntadas: {{ $cata->title }}</h1>
            <ul>
                @foreach($reservas as $reserva)
                <li class="mb-4 flex justify-between items-center">
                    <div>
                        <p class="text-black"><strong>Nombre:</strong> {{ $reserva->name }}</p>
                        <p class="text-black"><strong>Edad:</strong> {{ $reserva->age }}</p>
                        <p class="text-black"><strong>Correo:</strong> {{ $reserva->email }}</p>
                    </div>
                    <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta reserva?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                    </form>
                </li>
                @endforeach
            </ul>
            <div class="text-center mt-4">
                <a href="{{ route('reservar.form', $cata->id) }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Volver
                </a>
            </div>
        </div>
    </div>
</main>
@endsection
