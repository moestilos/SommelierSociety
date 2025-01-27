@extends('layouts.app')

@section('title', 'Editar Reseña')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Jaro:opsz@6..72&family=Sofadi+One&family=Teko:wght@300..700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Dancing+Script:wght@400..700&family=Jaro:opsz@6..72&family=Sofadi+One&family=Teko:wght@300..700&display=swap');
    </style>
    <title>Editar Reseña</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen" style="background-image: url('{{ asset('img/fondovinos.jpg') }}'); background-size: cover; background-position: center;">

<section class="py-8">
    <div class="container px-6 py-8 mx-auto text-center">
        <h1 class="text-3xl font-extrabold text-white sm:text-5xl">Editar Reseña</h1>
        <form action="{{ route('resenas.update', $resena->id) }}" method="POST" enctype="multipart/form-data" class="mt-8">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-white">Nombre:</label>
                <input type="text" id="name" name="name" value="{{ $resena->name }}" class="w-full px-4 py-2 mt-2 text-white bg-gray-800 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>
            <div class="mb-4">
                <label for="review" class="block text-white">Reseña:</label>
                <textarea id="review" name="review" class="w-full px-4 py-2 mt-2 text-white bg-gray-800 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">{{ $resena->review }}</textarea>
            </div>
            <div class="mb-4">
                <label for="stars" class="block text-white">Estrellas:</label>
                <input type="number" id="stars" name="stars" value="{{ $resena->stars }}" min="1" max="5" class="w-full px-4 py-2 mt-2 text-white bg-gray-800 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>
            <div class="mb-4">
                <label for="image" class="block text-white">Imagen:</label>
                <input type="file" id="image" name="image" class="w-full px-4 py-2 mt-2 text-white bg-gray-800 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>
            <button type="submit" class="px-4 py-2 mt-4 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-yellow-500 rounded-md hover:bg-yellow-600 focus:outline-none focus:bg-yellow-600">Actualizar Reseña</button>
        </form>
    </div>
</section>

</body>
</html>
@endsection
