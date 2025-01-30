@extends('layouts.app')

@section('title', 'South Wine Academy')

@section('content')

<body class="flex flex-col min-h-screen"
    style="background-image: url('{{ asset('img/fondocursos.jpg') }}'); background-size: cover; background-position: center;">

<div class="container mx-auto px-4 py-12">
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

            <div class="relative group">
                <input type="text" name="name" id="name" required
                    class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg focus:outline-none focus:border-purple-400 focus:ring-2 focus:ring-purple-300/30 text-white placeholder-white/50 transition-all"
                    placeholder=" ">
                <label for="name"
                    class="absolute left-4 top-3 px-1 transition-all transform origin-left text-white/80 group-focus-within:text-purple-300 group-focus-within:-translate-y-5 group-focus-within:scale-75">
                    <i class="fas fa-user mr-2"></i>Nombre completo
                </label>
            </div>

            <div class="relative group">
                <input type="email" name="email" id="email" required
                    class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg focus:outline-none focus:border-purple-400 focus:ring-2 focus:ring-purple-300/30 text-white placeholder-white/50 transition-all"
                    placeholder=" ">
                <label for="email"
                    class="absolute left-4 top-3 px-1 transition-all transform origin-left text-white/80 group-focus-within:text-purple-300 group-focus-within:-translate-y-5 group-focus-within:scale-75">
                    <i class="fas fa-envelope mr-2"></i>Correo electrónico
                </label>
            </div>

            <div class="relative group">
                <input type="tel" name="phone" id="phone" required pattern="\d{9}"
                    class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg focus:outline-none focus:border-purple-400 focus:ring-2 focus:ring-purple-300/30 text-white placeholder-white/50 transition-all"
                    placeholder=" ">
                <label for="phone"
                    class="absolute left-4 top-3 px-1 transition-all transform origin-left text-white/80 group-focus-within:text-purple-300 group-focus-within:-translate-y-5 group-focus-within:scale-75">
                    <i class="fas fa-phone mr-2"></i>Teléfono (9 dígitos)
                </label>
            </div>

            <div class="relative group">
                <textarea name="message" id="message" rows="4" required
                    class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg focus:outline-none focus:border-purple-400 focus:ring-2 focus:ring-purple-300/30 text-white placeholder-white/50 transition-all resize-none"
                    placeholder=" "></textarea>
                <label for="message"
                    class="absolute left-4 top-3 px-1 transition-all transform origin-left text-white/80 group-focus-within:text-purple-300 group-focus-within:-translate-y-5 group-focus-within:scale-75">
                    <i class="fas fa-comment-dots mr-2"></i>Mensaje
                </label>
            </div>

            <button type="submit" 
                class="w-full py-3 px-6 bg-gradient-to-r from-yellow-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white rounded-lg font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-[1.02]">
                <i class="fas fa-paper-plane mr-2"></i>Enviar Mensaje
            </button>
        </form>
    </div>
</div>

@vite(['resources/css/app.css', 'resources/js/app.js'])
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>
    .font-dancing {
        font-family: 'Dancing Script', cursive;
    }
    input:-webkit-autofill,
    input:-webkit-autofill:hover, 
    input:-webkit-autofill:focus {
        -webkit-text-fill-color: white;
        -webkit-box-shadow: 0 0 0px 1000px rgba(255, 255, 255, 0.05) inset;
    }
</style>

@endsection