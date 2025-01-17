@extends('layouts.app')

@section('content')
<!-- ENCABEZADO DE LA PÁGINA -->
<header class="text-gray-400 bg-black p-2 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
            <!-- Logo VinoA -->
            <img src="{{ asset('img/logonuevo.jpeg  ') }}" alt="Logo VinoA" class="w-10 h-10 rounded-full mr-3">
            <span class="ml-3 text-xl holy">South Wine Academy</span>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a href="{{ url('/dashboard') }}" class="mr-5 hover:text-yellow">Home</a>
            <a href="{{ url('/contacto') }}" class="mr-5 hover:text-yellow">Contact</a>
            <a href="" class="mr-5 hover:text-yellow">About Us</a>
            <a href="" class="mr-5 hover:text-yellow">Store</a>
        </nav>
    </div>
</header>

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

<!-- PIE DE LA PÁGINA -->
<footer class="text-gray-400 bg-black p-4 body-font mt-12">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
        <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
            <img src="{{ asset('img/logonuevo.jpeg  ') }}" alt="Logo VinoA" class="w-10 h-10 rounded-full mr-3">
        </a>
        <p class="text-sm text-gray-400 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">© 2025 South Wine Academy —
            <a href="https://github.com/moestilos/SommelierSociety.git" class="text-gray-500 ml-1" target="_blank" rel="noopener noreferrer">github</a>
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a class="text-gray-400">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
            </a>
            <a class="ml-3 text-gray-400">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
            </a>
            <a class="ml-3 text-gray-400">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
            </a>
            <a class="ml-3 text-gray-400">
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                    <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                    <circle cx="4" cy="4" r="2" stroke="none"></circle>
                </svg>
            </a>
        </span>
    </div>
</footer>
@endsection
