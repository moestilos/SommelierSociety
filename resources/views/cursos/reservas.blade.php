@extends('layouts.app')

@section('title', 'Personas Apuntadas')

@section('content')

<section class="bg-[#f8f9fa] py-12">
    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="bg-white bg-opacity-80 px-6 pt-8 pb-12 rounded-lg overflow-hidden text-center relative transition-transform transform hover:scale-105 hover:shadow-lg text-gray-800">
            <h2 class="text-center text-4xl font-bold tracking-tight text-gray-800 sm:text-5xl">
                Personas Apuntadas en {{ $curso->nombre }}
            </h2>
            <div class="mt-8 text-gray-800 text-left">
                @if($reservas->isEmpty())
                    <p>No hay personas apuntadas en este curso.</p>
                @else
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($reservas as $reserva)
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <p><strong>Nombre:</strong> {{ $reserva->name }}</p>
                                <p><strong>Email:</strong> {{ $reserva->email }}</p>
                                <p><strong>Edad:</strong> {{ $reserva->age }}</p>
                                @if(auth()->user() && auth()->user()->is_admin)
                                    <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta reserva?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="mt-4 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                                    </form>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('cursos.show', $curso->id) }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Volver al Curso
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
