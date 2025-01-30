@extends('layouts.app')

@section('title', 'Reservas del Curso')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-gray-800 bg-opacity-60 p-8 rounded-lg shadow-lg">
        <h1 class="text-4xl font-bold text-white mb-4">Reservas para: {{ $curso->nombre }}</h1>
        <ul class="list-disc list-inside text-gray-300">
            @foreach ($reservas as $reserva)
                <li>{{ $reserva->name }} ({{ $reserva->email }}) - {{ $reserva->age }} años</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
