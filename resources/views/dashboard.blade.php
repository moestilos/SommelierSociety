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

        .chat-messages div {
            color: rgba(0, 0, 0, 0.388);
        }
        .chat-input input {
            color: rgba(0, 0, 0, 0.268); 
        }
        .bg-opacity-80 {
            background-color: rgba(31, 41, 55, 0.8); 
        }
        .bg-opacity-60 {
            background-color: rgba(31, 41, 55, 0.6); 
        }
    </style>
    <title>Vinos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen"
    style="background-image: url('{{ asset('img/FondoClaro.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">



    <!-- CAJAS DE CATEGORÍAS -->
    <!-- CAJA 1 -->
    <section class="text-white-400 body-font flex-grow">
        <div class="container px-5 py-24 mx-auto flex justify-center">
            <div class="flex flex-wrap -m-2 justify-center">

                <!-- CAJA 2 -->
                <div class="p-2 lg:w-1/4 md:w-1/2">
                    <div data-aos="fade-up" data-aos-duration="1000"
                        class="h-full bg-gray-800 bg-opacity-80 px-4 pt-8 pb-12 rounded-lg overflow-hidden text-center relative transition-transform transform hover:scale-105 hover:shadow-lg">
                        <h1 class="title-font sm:text-xl text-lg font-medium text-white mb-3">Cursos de Sommelier</h1>
                        <img src="{{ asset('img/bodega.jpeg') }}" alt="Bodega"
                            class="w-full h-40 object-cover mb-4 rounded">
                        <p class="leading-relaxed mb-3 text-white mb-1">Photo booth fam kinfolk cold-pressed sriracha
                            leggings jianbing microdosing tousled waistcoat.</p>
                        <a href="{{ url('/cursos') }}" class="text-yellow-400 inline-flex items-center">
                            Learn More
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- CAJA 4 -->
                <div class="p-2 lg:w-1/4 md:w-1/2">
                    <div data-aos="fade-up" data-aos-duration="1000"
                        class="h-full bg-gray-800 bg-opacity-60 px-4 pt-8 pb-12 rounded-lg overflow-hidden text-center relative transition-transform transform hover:scale-105 hover:shadow-lg">
                        <h1 class="title-font sm:text-xl text-lg font-medium text-white mb-3">Catas de Vino</h1>
                        <img src="{{ asset('img/vinocur.jpeg') }}" alt="Tuzorra"
                            class="w-full h-40 object-cover mb-4 rounded">
                        <p class="leading-relaxed mb-3 text-white mb-1">Photo booth fam kinfolk cold-pressed sriracha
                            leggings jianbing microdosing tousled waistcoat.</p>
                        <a href="{{ url('/catasdevino') }}" class="text-yellow-400 inline-flex items-center">
                            Learn More
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- CAJA 3 -->
                <div class="p-2 lg:w-1/4 md:w-1/2">
                    <div data-aos="fade-up" data-aos-duration="1000"
                        class="h-full bg-gray-800 bg-opacity-80 px-4 pt-8 pb-12 rounded-lg overflow-hidden text-center relative transition-transform transform hover:scale-105 hover:shadow-lg">
                        <h1 class="title-font sm:text-xl text-lg font-medium text-white mb-3">Reseñas</h1>
                        <img src="{{ asset('img/resenas.jpeg') }}" alt="Tuzorra"
                            class="w-full h-40 object-cover mb-4 rounded">
                        <p class="leading-relaxed mb-3 text-white mb-1">Photo booth fam kinfolk cold-pressed sriracha
                            leggings jianbing microdosing tousled waistcoat.</p>
                        <a href="{{ url('/resenas') }}" class="text-yellow-400 inline-flex items-center">
                            Learn More
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                @if(auth()->user() && auth()->user()->is_admin)
                <!-- CAJA 5 -->
                <div class="p-2 lg:w-1/4 md:w-1/2">
                    <div data-aos="fade-up" data-aos-duration="1000"
                        class="h-full bg-gray-800 bg-opacity-80 px-4 pt-8 pb-12 rounded-lg overflow-hidden text-center relative transition-transform transform hover:scale-105 hover:shadow-lg">
                        <h1 class="title-font sm:text-xl text-lg font-medium text-white mb-3">Panel de Control</h1>
                        <img src="{{ asset('img/controlpanel.jpg') }}" alt="Panel de Control"
                            class="w-full h-40 object-cover mb-4 rounded">
                        <p class="leading-relaxed mb-3 text-white mb-1">Accede al panel de control para gestionar cursos, catas y más.</p>
                        <a href="{{ route('admin.panel') }}" class="text-yellow-400 inline-flex items-center">
                            Learn More
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                @endif

            </div>
        </div>
    </section>
<!-- ChatBot -->
<div class="fixed bottom-8 right-8 z-50">
    <div id="chat-container" class="hidden w-80 bg-white/90 backdrop-blur-lg rounded-2xl shadow-xl border border-white/20 transform transition-all duration-300">
        <div class="chat-header bg-gradient-to-r from-yellow-400 to-amber-600 text-white p-4 rounded-t-2xl flex items-center">
            <i class="fas fa-wine-glass-alt mr-2"></i>
            <h3 class="font-semibold">Wine Assistant</h3>
            <button id="chat-close" class="ml-auto hover:text-yellow-200 transition-colors">
                <i class="fas fa-times"></i>
            </button>
        </div>
        
        <div class="chat-messages h-64 p-4 overflow-y-auto space-y-3" id="chat-messages">
            <div class="bot-message bg-white/80 backdrop-blur-sm p-3 rounded-lg border border-white/30 text-gray-700 shadow-sm">
                ¡Hola! Soy tu asistente de vinos. ¿En qué puedo ayudarte?
            </div>
        </div>
        
        <div class="chat-input p-4 border-t border-white/30 flex gap-2">
            <input type="text" id="chat-input" 
                   class="flex-1 bg-white/50 backdrop-blur-sm px-4 py-2 rounded-full border border-white/30 focus:outline-none focus:ring-2 focus:ring-yellow-400/30 text-gray-700"
                   placeholder="Escribe tu mensaje...">
            <button id="chat-send" 
                    class="bg-yellow-400 text-white px-4 py-2 rounded-full hover:bg-amber-500 transition-colors shadow-sm">
                <i class="fas fa-paper-plane"></i>
            </button>
        </div>
    </div>
    
    <button id="chat-toggle" 
            class="w-14 h-14 bg-gradient-to-br from-yellow-400 to-amber-600 text-white rounded-full shadow-lg hover:shadow-xl transition-all hover:scale-110 flex items-center justify-center">
        <i class="fas fa-comment-dots text-xl"></i>
    </button>
</div>

@vite(['resources/css/app.css', 'resources/js/app.js'])
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>
    .font-dancing {
        font-family: 'Dancing Script', cursive;
    }
    
    .chat-messages::-webkit-scrollbar {
        width: 6px;
    }
    
    .chat-messages::-webkit-scrollbar-track {
        background: rgba(255,255,255,0.1);
        border-radius: 10px;
    }
    
    .chat-messages::-webkit-scrollbar-thumb {
        background: rgba(245,158,11,0.5);
        border-radius: 10px;
    }
    
    [data-aos] {
        transition: all 500ms ease-out;
    }
    
    .user-message {
        @apply bg-yellow-100/80 backdrop-blur-sm p-3 rounded-lg border border-yellow-200 text-gray-700 self-end max-w-[80%];
    }
    
    .bot-message {
        @apply bg-white/80 backdrop-blur-sm p-3 rounded-lg border border-white/30 text-gray-700 shadow-sm max-w-[80%];
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true,
        easing: 'ease-in-out-quad'
    });

    // Chatbot Script
    const chatToggle = document.getElementById('chat-toggle');
    const chatContainer = document.getElementById('chat-container');
    const chatMessages = document.getElementById('chat-messages');
    const chatInput = document.getElementById('chat-input');
    const chatSend = document.getElementById('chat-send');
    const chatClose = document.getElementById('chat-close');

    const responses = {
        "hola": "¡Hola! ¿Cómo puedo ayudarte?",
        "adios": "¡Hasta pronto! Que el vino te acompañe 🍷",
        "gracias": "¡Un placer ayudarte! ¿Necesitas algo más?",
        "cursos": "Descubre nuestros cursos especializados <a href='/cursos' class='text-yellow-600 font-medium'>aquí</a> 🎓",
        "catas": "Explora nuestras experiencias de cata <a href='/catasdevino' class='text-yellow-600 font-medium'>aquí</a> 🍇",
        "especialistas": "Conoce a nuestro equipo <a href='/contacto' class='text-yellow-600 font-medium'>aquí</a> 👩🔬",
        "tarifas": "Consulta nuestras tarifas <a href='/tarifas' class='text-yellow-600 font-medium'>aquí</a> 💰"
    };

    chatToggle.addEventListener('click', () => {
        chatContainer.classList.toggle('hidden');
        chatToggle.classList.toggle('scale-110');
    });

    chatClose.addEventListener('click', () => {
        chatContainer.classList.add('hidden');
    });

    const addMessage = (message, isUser = false) => {
        const messageDiv = document.createElement('div');
        messageDiv.className = isUser ? 'user-message' : 'bot-message';
        messageDiv.innerHTML = message;
        chatMessages.appendChild(messageDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    };

    chatSend.addEventListener('click', () => {
        const message = chatInput.value.trim().toLowerCase();
        if (message) {
            addMessage(message, true);
            const response = responses[message] || "Lo siento, no entiendo. ¿Podrías reformular?";
            setTimeout(() => addMessage(response), 1000);
            chatInput.value = '';
        }
    });

    chatInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') chatSend.click();
    });
</script>

@endsection