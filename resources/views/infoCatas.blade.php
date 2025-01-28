@extends('layouts.app')

@section('title', 'Detalles de la Cata')

@section('content')
<main style="background-image: url('{{ asset('img/catainfofondo.jpg') }}'); background-size: cover; background-position: center; min-height: 63vh;">
    <div class="container mx-auto py-10">
        <div class="bg-white shadow-md rounded-lg p-6 max-w-xl mx-auto">
            <h1 class="text-3xl font-bold mb-6 text-center text-black">{{ $cata['title'] }}</h1>
            <p class="text-black"><strong>Descripción:</strong> {{ $cata['description'] }}</p>
            <p class="text-black"><strong>Ubicación:</strong> {{ $cata['location'] }}</p>
            <p class="text-black"><strong>Fecha:</strong> {{ $cata['date'] }}</p>
            <div class="mt-6 flex justify-between">
                <a href="/catasdevino" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Volver</a>
                <a href="/reservar/{{ $cata['id'] }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Reservar</a>
            </div>
        </div>
    </div>
</main>
@endsection
