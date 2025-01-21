@extends('layouts.app')

@section('title', 'South Wine Academy')

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
    <title>Vinos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Asegúrate de compilar estilos si usas Tailwind -->
</head>

<body class="flex flex-col min-h-screen"
    style="background-image: url('{{ asset('img/fondocursos.jpg') }}'); background-size: cover; background-position: center;">


<div class="text-center mt-12">
    <h1 class="text-4xl font-bold text-white">Contáctanos</h1>
    <p class="text-gray-400 mt-4">Estamos aquí para ayudarte. Escríbenos y resolveremos todas tus dudas.</p>
</div>
<div class="mt-8 max-w-md mx-auto bg-gray-800 bg-opacity-80 p-8 rounded-lg shadow-lg">
    @if(session('success'))
        <div class="mb-4 p-4 text-green-800 bg-green-100 border border-green-200 rounded">
            {{ session('success') }}
        </div>
    @endif
    <form method="POST" action="{{ route('contact.store') }}">
        @csrf
        <!-- Campos del formulario -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-400">Nombre</label>
            <input type="text" name="name" id="name" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-400">Email</label>
            <input type="email" name="email" id="email" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
        </div>
        <div class="mb-4">
            <label for="phone" class="block text-sm font-medium text-gray-400">Teléfono</label>
            <input type="text" name="phone" id="phone" required pattern="\d{9}" title="El número de teléfono debe tener 9 cifras" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
        </div>
        <div class="mb-4">
            <label for="message" class="block text-sm font-medium text-gray-400">Mensaje</label>
            <textarea name="message" id="message" rows="4" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50"></textarea>
        </div>
        <button type="submit" class="bg-purple-600 text-white px-4 py-2 rounded-md shadow hover:bg-purple-700">Enviar</button>
    </form>
</div>


@endsection
