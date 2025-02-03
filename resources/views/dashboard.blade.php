@extends('layouts.app')

@section('title', 'South Wine Academy')

@section('content')

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=EB+Garamond:wght@400;500;600&display=swap');
        body {
            /* Fondo básico en tonos grises */
            background: linear-gradient(to bottom, #ffffff, #dddddd, #bbbbbb);
        }
        .font-amatic {
            font-family: 'Amatic SC', cursive;
        }
        
        .font-garamond {
            font-family: 'EB Garamond', serif;
        }

        .hover-tilt {
            /* Transición y efecto más sutil */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .hover-tilt:hover {
            transform: scale(1.02);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .price-badge {
            /* Color gris básico */
            background: #888888;
            color: #ffffff;
        }

        /* Nueva clase para estandarizar el tamaño de los recuadros */
        .card-uniform {
            min-height: 400px;
            /* Borde en negro y sombreado personalizado con borde más grueso */
            border: 2px solid #000 !important;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3) !important;
        }
        /* Nueva regla para forzar texto en negro dentro de los recuadros */
        .card-uniform h2,
        .card-uniform p,
        .card-uniform a,
        .card-uniform span {
            color: #000 !important;
        }

        /* Estilo específico para los enlaces de acción */
        .card-uniform a {
            color: #ff8c00 !important; /* Naranja */
        }
        .card-uniform a:hover {
            color: #ff6b00 !important; /* Naranja más oscuro al hover */
        }

        /* Estilos mejorados para el efecto goteo */
        .wine-drop {
            position: fixed;
            width: 12px;
            height: 12px;
            background: radial-gradient(circle at 30% 30%, rgba(160, 0, 40, 0.9), rgba(128, 0, 32, 0.7));
            border-radius: 50% 50% 50% 50%;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
            pointer-events: none;
            z-index: 9999;
            transform-origin: center bottom;
        }

        .wine-trail {
            position: fixed;
            width: 3px;
            background: linear-gradient(to bottom, rgba(128, 0, 32, 0.4), rgba(128, 0, 32, 0.1));
            pointer-events: none;
            z-index: 9998;
            border-radius: 3px;
            filter: blur(0.5px);
        }

        /* Eliminar estilos de goteo y mantener solo los puntos */
        .wine-bubble {
            position: fixed;
            border-radius: 50%;
            background: radial-gradient(circle at 30% 30%, 
                rgba(160, 0, 40, 0.9), 
                rgba(128, 0, 32, 0.7));
            pointer-events: none;
            transition: all 1.5s ease-in-out;
            box-shadow: 0 0 15px rgba(128, 0, 32, 0.4);
            z-index: 1;
            filter: blur(0.5px);
        }

        /* Actualizar las clases de tipografía */
        h2.card-title {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 600;
            font-size: 2.5rem;
            letter-spacing: 0.5px;
            line-height: 1.2;
            text-transform: uppercase;
        }

        .card-text {
            font-family: 'EB Garamond', serif;
            font-size: 1.1rem;
            line-height: 1.6;
            letter-spacing: 0.2px;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen bg-gradient-to-br from-black via-red-800 to-black">

    <!-- Main Content Section -->
    <section class="text-gray-700 body-font flex-grow pt-16">
        <div class="container px-5 py-12 mx-auto">
            <!-- Cambiar de 'flex-wrap' a 'flex-col' para apilar verticalmente -->
            <div class="flex flex-col -mx-4 justify-center space-y-[5%]">

                <!-- Curso Card con animación desde la derecha -->
                <div class="p-4 w-full flex justify-end" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                    <div class="h-full max-w-md card-uniform bg-gray-100 border border-gray-300 rounded-2xl p-6 shadow hover:shadow-lg transition-all duration-300 hover:scale-105">
                        <div class="relative overflow-hidden rounded-xl mb-6">
                            <img class="w-full h-56 object-cover transform transition-all duration-500 hover:scale-105 rounded-xl" 
                                src="{{ asset('img/bodega.jpeg') }}" 
                                alt="Cursos de Sommelier">
                            <span class="absolute top-4 right-4 price-badge text-white px-3 py-1 rounded-full text-sm font-garamond">
                                Nuevo
                            </span>
                        </div>
                        <h2 class="card-title text-3xl font-bold text-white mb-4">Formación Profesional</h2>
                        <p class="card-text text-gray-300 mb-6 leading-relaxed">
                            Programa certificado con módulos teóricos y prácticos. Incluye certificación internacional y acceso a nuestra red de bodegas asociadas.
                        </p>
                        <div class="flex items-center justify-between border-t border-gray-100 pt-4">
                            <a href="{{ url('/cursos') }}" class="flex items-center font-medium font-garamond">
                                Ver programa completo
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Catas Card con animación desde la izquierda -->
                <div class="p-4 w-full" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                    <div class="h-full max-w-md card-uniform bg-gray-100 border border-gray-300 rounded-2xl p-6 shadow hover:shadow-lg transition-all duration-300 hover:scale-105">
                        <div class="relative overflow-hidden rounded-xl mb-6">
                            <img class="w-full h-56 object-cover transform transition-all duration-500 hover:scale-105 rounded-xl" 
                                src="{{ asset('img/vinocur.jpeg') }}" 
                                alt="Experiencias de Cata">
                            <span class="absolute top-4 right-4 price-badge text-white px-3 py-1 rounded-full text-sm font-garamond">
                                Popular
                            </span>
                        </div>
                        <h2 class="card-title text-3xl font-bold text-white mb-4">Catas Exclusivas</h2>
                        <p class="card-text text-gray-300 mb-6 leading-relaxed">
                            Eventos privados en bodegas seleccionadas. Incluye cata de 5 vinos premium y maridaje con gastronomía local.
                        </p>
                        <div class="flex items-center justify-between border-t border-gray-100 pt-4">
                            <a href="{{ url('/catasdevino') }}" class="flex items-center font-medium font-garamond">
                                Ver calendario
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Reseñas Card con animación desde la derecha -->
                <div class="p-4 w-full flex justify-end" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                    <div class="h-full max-w-md card-uniform bg-gray-100 border border-gray-300 rounded-2xl p-6 shadow hover:shadow-lg transition-all duration-300 hover:scale-105">
                        <div class="relative overflow-hidden rounded-xl mb-6">
                            <img class="w-full h-56 object-cover transform transition-all duration-500 hover:scale-105 rounded-xl" 
                                 src="{{ asset('img/resenas.jpeg') }}" 
                                 alt="Reseñas Expertas">
                            <span class="absolute top-4 right-4 price-badge text-white px-3 py-1 rounded-full text-sm font-garamond">
                                Actualizado
                            </span>
                        </div>
                        <h2 class="card-title text-3xl font-bold text-white mb-4">Análisis Técnicos</h2>
                        <p class="card-text text-gray-300 mb-6 leading-relaxed">
                            Biblioteca completa con análisis detallados, puntuaciones y recomendaciones de maridaje actualizadas semanalmente.
                        </p>
                        <div class="flex items-center justify-between border-t border-gray-100 pt-4">
                            <a href="{{ url('/resenas') }}" class="flex items-center font-medium font-garamond">
                                Ver últimas reseñas
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                @if(auth()->user() && auth()->user()->is_admin)
                <!-- CAJA 5 -->
                <div class="p-2 w-full">
                    <div data-aos="fade-up" data-aos-duration="1000" class="h-full max-w-md card-uniform bg-gray-100 border border-gray-300 rounded-2xl px-4 pt-8 pb-12 shadow hover:shadow-lg transition-transform duration-300 hover:scale-105">
                        <h1 class="title-font sm:text-xl text-lg font-medium text-dark mb-3">Panel de Control</h1>
                        <img src="{{ asset('/img/cala.jpg') }}" alt="Panel de Control"
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

    <!-- ChatBot Mejorado -->
    <div class="fixed bottom-8 right-8 z-50">
        <div id="chat-container" class="hidden w-80 bg-white/95 backdrop-blur-xl rounded-2xl shadow-2xl border border-gray-100 transform transition-all duration-300">
            <div class="chat-header bg-gradient-to-r from-amber-700 to-amber-800 text-white p-4 rounded-t-2xl flex items-center">
                <i class="fas fa-wine-bottle mr-3 text-xl"></i>
                <h3 class="font-semibold font-garamond text-lg">Asistente Vinícola</h3>
                <button id="chat-close" class="ml-auto hover:text-amber-200 transition-colors">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <div class="chat-messages h-64 p-4 overflow-y-auto space-y-3">
                <div class="bot-message bg-gray-50/90 backdrop-blur-sm p-3 rounded-lg border border-gray-100 text-gray-700 font-garamond shadow-sm">
                    ¡Salud! ¿En qué puedo asistirte hoy? 🍇
                </div>
            </div>
            
            <div class="chat-input p-4 border-t border-gray-100 flex gap-2">
                <input type="text" id="chat-input" 
                    class="flex-1 bg-gray-50/80 backdrop-blur-sm px-4 py-2 rounded-full border border-gray-200 focus:outline-none focus:ring-2 focus:ring-amber-500/30 text-gray-700 font-garamond"
                    placeholder="Escribe tu consulta...">
                <button id="chat-send" 
                        class="bg-amber-700 text-white px-4 py-2 rounded-full hover:bg-amber-800 transition-colors shadow-sm">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </div>
        
        <button id="chat-toggle" 
                class="w-14 h-14 bg-amber-700 text-white rounded-full shadow-lg hover:shadow-xl transition-all hover:scale-110 flex items-center justify-center">
            <i class="fas fa-wine-glass-alt text-xl"></i>
        </button>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-in-out-quad'
        });

        // Chatbot Interactivo con AJAX
        const chatToggle = document.getElementById('chat-toggle');
        const chatContainer = document.getElementById('chat-container');
        const chatMessages = document.querySelector('.chat-messages');
        const chatInput = document.getElementById('chat-input');
        const chatSend = document.getElementById('chat-send');
        const chatClose = document.getElementById('chat-close');

        const createMessage = (content, isUser = false) => {
            const messageDiv = document.createElement('div');
            messageDiv.className = isUser ? 
                'user-message bg-amber-100/90 border-amber-200 self-end p-3 rounded-lg max-w-[85%] font-garamond text-gray-700 shadow-sm' : 
                'bot-message bg-gray-50/90 border-gray-100 p-3 rounded-lg max-w-[85%] font-garamond text-gray-700 shadow-sm';
            messageDiv.innerHTML = content;
            return messageDiv;
        };

        chatToggle.addEventListener('click', () => {
            chatContainer.classList.toggle('hidden');
            chatToggle.classList.toggle('scale-110');
        });

        chatClose.addEventListener('click', () => {
            chatContainer.classList.add('hidden');
        });

        // Uso de AJAX (fetch) para enviar el mensaje del chat y obtener respuesta
        chatSend.addEventListener('click', () => {
            const message = chatInput.value.trim();
            if (message) {
                chatMessages.appendChild(createMessage(message, true));
                fetch('/chat-response', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({message: message})
                })
                .then(response => response.json())
                .then(data => {
                    chatMessages.appendChild(createMessage(data.message));
                    chatMessages.scrollTop = chatMessages.scrollHeight;
                })
                .catch(error => console.error('Error:', error));
                chatInput.value = '';
            }
        });

        chatInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') chatSend.click();
        });

        // Efecto de puntos de vino con menos frecuencia
        function createWineBubble() {
            const bubble = document.createElement('div');
            bubble.className = 'wine-bubble';
            
            // Tamaño aleatorio entre 3 y 12px
            const size = 3 + Math.random() * 9;
            bubble.style.width = `${size}px`;
            bubble.style.height = `${size}px`;
            
            // Posición aleatoria
            const startX = Math.random() * window.innerWidth;
            const startY = Math.random() * (window.innerHeight - 100);
            bubble.style.left = `${startX}px`;
            bubble.style.top = `${startY}px`;
            
            document.body.appendChild(bubble);

            // Aparecer gradualmente
            setTimeout(() => {
                bubble.style.opacity = '0.8';
            }, 100);

            // Desaparecer y eliminar
            const duration = 5000 + Math.random() * 4000;
            setTimeout(() => {
                bubble.style.opacity = '0';
                setTimeout(() => {
                    bubble.remove();
                }, 1500);
            }, duration);
        }

        // Crear puntos con menos frecuencia
        setInterval(createWineBubble, 1000); // Aumentado a 1 segundo

        // Crear menos puntos iniciales
        for(let i = 0; i < 12; i++) { // Reducido a 12 puntos
            setTimeout(createWineBubble, Math.random() * 2000);
        }

        // Código eliminado: se usa dashboard.js para la animación de imágenes al hacer scroll.
    </script>

</body>
</html>

@endsection