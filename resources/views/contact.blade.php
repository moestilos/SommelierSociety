@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
<div class="text-center">
    <h1 class="text-4xl font-bold text-jerez">Contáctanos</h1>
    <p class="text-gray-700 mt-4">Estamos aquí para ayudarte. Escríbenos y resolveremos todas tus dudas.</p>
</div>
<div class="mt-8 max-w-md mx-auto">
@if(session('success'))
                    <div class="mb-4 p-4 text-green-800 bg-green-100 border border-green-200 rounded">
                        {{ session('success') }}
                    </div>
@endif
<form method="POST" action="{{ route('contact.store') }}">
    @csrf
    <!-- Campos del formulario -->
    <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
        <input type="text" name="name" id="name" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
    </div>
    <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" id="email" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
    <div class="mb-4">
        <label for="phone" class="block text-sm font-medium text-gray-700">Teléfono</label>
        <input type="text" name="phone" id="phone" required pattern="\d{9}" title="El número de teléfono debe tener 9 cifras" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
    </div>
    <div class="mb-4">
        <label for="message" class="block text-sm font-medium text-gray-700">Mensaje</label>
        <textarea name="message" id="message" rows="4" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50"></textarea>
    </div>
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md shadow hover:bg-blue-700">Enviar</button>
</form>

</div>
@endsection
