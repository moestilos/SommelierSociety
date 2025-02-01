@extends('layouts.app')

@section('title', 'South Wine Academy')

@section('content')

<body class="bg-gradient-to-br from-black via-red-900 to-black dark:bg-gray-900">

<div class="container mx-auto px-4 py-12 bg-gradient-to-br from-black via-red-900 to-black dark:bg-gray-900 md:max-w-3xl md:mx-auto rounded-xl">
    <div class="text-center mb-12">
        
    </div>

    <div class="max-w-2xl mx-auto bg-white/10 backdrop-blur-lg rounded-3xl shadow-xl p-8 border border-white/20">
        @if(session('success'))
        <div class="mb-6 p-4 bg-green-500/20 text-green-100 rounded-xl border border-green-400/50">
            <i class="fas fa-check-circle mr-2"></i>{{ session('success') }}
        </div>
        @endif

        <form method="POST" action="{{ route('contact.store') }}" class="space-y-6">
            @csrf

            <!-- Campo Nombre -->
            <div class="mb-4">
                <label for="name" class="block text-white text-sm mb-1">
                    <i class="fas fa-user mr-2"></i>Nombre completo
                </label>
                <input type="text" name="name" id="name" required minlength="3" maxlength="60"
                    class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg focus:outline-none focus:border-purple-400 focus:ring-2 focus:ring-purple-300/30 focus:ring-offset-2 focus:ring-offset-black text-white transition-all"
                    placeholder="">
            </div>

            <!-- Campo Correo -->
            <div class="mb-4">
                <label for="email" class="block text-white text-sm mb-1">
                    <i class="fas fa-envelope mr-2"></i>Correo electrónico
                </label>
                <input type="email" name="email" id="email" required maxlength="254"
                    class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg focus:outline-none focus:border-purple-400 focus:ring-2 focus:ring-purple-300/30 focus:ring-offset-2 focus:ring-offset-black text-white transition-all"
                    placeholder="">
            </div>

            <!-- Campo Teléfono -->
            <div class="mb-4">
                <label for="phone" class="block text-white text-sm mb-1">
                    <i class="fas fa-phone mr-2"></i>Teléfono (9 dígitos)
                </label>
                <input type="tel" name="phone" id="phone" required pattern="^\+34\s\d{9}$" minlength="13" maxlength="13"
                    class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg focus:outline-none focus:border-purple-400 focus:ring-2 focus:ring-purple-300/30 focus:ring-offset-2 focus:ring-offset-black text-white transition-all"
                    placeholder="">
                <!-- Nuevo banner para indicar el prefijo +34 -->
                <small id="phoneBanner" class="block text-yellow-300 text-xs mt-1 hidden">
                    Se añadirá el prefijo +34 si no está presente.
                </small>
            </div>

            <!-- Campo Mensaje -->
            <div class="mb-4">
                <label for="message" class="block text-white text-sm mb-1">
                    <i class="fas fa-comment-dots mr-2"></i>Mensaje
                </label>
                <textarea name="message" id="message" rows="4" required minlength="10" maxlength="500"
                    class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg focus:outline-none focus:border-purple-400 focus:ring-2 focus:ring-purple-300/30 focus:ring-offset-2 focus:ring-offset-black text-white transition-all resize-none"
                    placeholder=""></textarea>
            </div>

            <button type="submit" 
                class="w-full py-3 px-6 bg-gradient-to-r from-yellow-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white rounded-lg font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-[1.03]">
                <i class="fas fa-paper-plane mr-2"></i>Enviar Mensaje
            </button>
        </form>
        <!-- Actualización del script inline para mostrar el banner en el campo teléfono -->
        <script>
            document.addEventListener('DOMContentLoaded', function(){
                const phoneInput = document.querySelector('input[name="phone"]');
                const phoneBanner = document.getElementById('phoneBanner');
                if(phoneInput){
                    phoneInput.addEventListener('focus', function(){
                        phoneBanner.classList.remove('hidden');
                    });
                    phoneInput.addEventListener('blur', function(){
                        const val = phoneInput.value.trim();
                        if(val && !val.startsWith('+34')){
                            phoneInput.value = '+34 ' + val;
                        }
                        phoneBanner.classList.add('hidden');
                    });
                }
            });
        </script>
    </div>
</div>

@vite(['resources/css/app.css', 'resources/js/app.js'])
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>
    .font-dancing {
        font-family: 'Dancing Script', cursive;
    }
    /* Actualización de autofill para conservar el formato */
    input:-webkit-autofill,
    textarea:-webkit-autofill {
        -webkit-box-shadow: 0 0 0px 1000px rgba(17, 24, 39, 0.5) inset !important;
        -webkit-text-fill-color: white !important;
        transition: background-color 5000s ease-in-out 0s !important;
    }
    input:-webkit-autofill,
    input:-webkit-autofill:hover, 
    input:-webkit-autofill:focus {
        -webkit-text-fill-color: white;
        -webkit-box-shadow: 0 0 0px 1000px rgba(255, 255, 255, 0.05) inset;
    }
    /* Nuevo estilo para que los íconos se desvanezcan */
    .group:focus-within .icon-fade {
        opacity: 0;
        transition: opacity 0.5s ease-out;
    }
</style>

@endsection