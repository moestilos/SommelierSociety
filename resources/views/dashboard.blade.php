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
        @import url('https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=EB+Garamond:wght@400;500;600&family=Jaro:opsz@6..72&family=Sofadi+One&display=swap');
        body {
    background: linear-gradient(to bottom, black, #510303, black);
}
        .font-amatic {
            font-family: 'Amatic SC', cursive;
        }
        
        .font-garamond {
            font-family: 'EB Garamond', serif;
        }

        .hover-tilt {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .hover-tilt:hover {
            transform: perspective(1000px) rotateX(2deg) rotateY(2deg) scale(1.02);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        }

        .price-badge {
            background: linear-gradient(45deg, #b45309, #d97706);
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen bg-gradient-to-br from-black via-red-800 to-black">

    <!-- Main Content Section -->
    <section class="text-gray-700 body-font flex-grow pt-16">
        <div class="container px-5 py-12 mx-auto">
            <div class="flex flex-wrap -mx-4 -mb-10 justify-center">

                <!-- Curso Card -->
                <div class="p-4 md:w-1/2 lg:w-1/3">
                    <div class="h-full bg-gradient-to-br from-black via-black to-red-900 backdrop-blur-lg bg-opacity-80 rounded-2xl p-6 shadow-lg hover-tilt border border-gray-100/80 transition-all duration-300">
                        <div class="relative overflow-hidden rounded-xl mb-6">
                            <img class="w-full h-56 object-cover transform transition-all duration-500 hover:scale-105" 
                                 src="{{ asset('img/bodega.jpeg') }}" 
                                 alt="Cursos de Sommelier">
                            <span class="absolute top-4 right-4 price-badge text-white px-3 py-1 rounded-full text-sm font-garamond">
                                Nuevo
                            </span>
                        </div>
                        <h2 class="font-amatic text-3xl font-bold text-white mb-4">Formación Profesional</h2>
                        <p class="text-gray-300 font-garamond mb-6 leading-relaxed">
                            Programa certificado con módulos teóricos y prácticos. Incluye certificación internacional y acceso a nuestra red de bodegas asociadas.
                        </p>
                        <div class="flex items-center justify-between border-t border-gray-100 pt-4">
                            <a href="{{ url('/cursos') }}" class="flex items-center text-amber-400 hover:text-amber-500 font-medium font-garamond">
                                Ver programa completo
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Catas Card -->
                <div class="p-4 md:w-1/2 lg:w-1/3">
                    <div class="h-full bg-gradient-to-br from-black via-black to-red-900 backdrop-blur-lg bg-opacity-80 rounded-2xl p-6 shadow-lg hover-tilt border border-gray-100/80 transition-all duration-300">
                        <div class="relative overflow-hidden rounded-xl mb-6">
                            <img class="w-full h-56 object-cover transform transition-all duration-500 hover:scale-105" 
                                 src="{{ asset('img/vinocur.jpeg') }}" 
                                 alt="Experiencias de Cata">
                            <span class="absolute top-4 right-4 price-badge text-white px-3 py-1 rounded-full text-sm font-garamond">
                                Popular
                            </span>
                        </div>
                        <h2 class="font-amatic text-3xl font-bold text-white mb-4">Catas Exclusivas</h2>
                        <p class="text-gray-300 font-garamond mb-6 leading-relaxed">
                            Eventos privados en bodegas seleccionadas. Incluye cata de 5 vinos premium y maridaje con gastronomía local.
                        </p>
                        <div class="flex items-center justify-between border-t border-gray-100 pt-4">
                            <a href="{{ url('/catasdevino') }}" class="flex items-center text-amber-400 hover:text-amber-500 font-medium font-garamond">
                                Ver calendario
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Reseñas Card -->
                <div class="p-4 md:w-1/2 lg:w-1/3">
                    <div class="h-full bg-gradient-to-br from-black via-black to-red-900 backdrop-blur-lg bg-opacity-80 rounded-2xl p-6 shadow-lg hover-tilt border border-gray-100/80 transition-all duration-300">
                        <div class="relative overflow-hidden rounded-xl mb-6">
                            <img class="w-full h-56 object-cover transform transition-all duration-500 hover:scale-105" 
                                 src="{{ asset('img/resenas.jpeg') }}" 
                                 alt="Reseñas Expertas">
                            <span class="absolute top-4 right-4 price-badge text-white px-3 py-1 rounded-full text-sm font-garamond">
                                Actualizado
                            </span>
                        </div>
                        <h2 class="font-amatic text-3xl font-bold text-white mb-4">Análisis Técnicos</h2>
                        <p class="text-gray-300 font-garamond mb-6 leading-relaxed">
                            Biblioteca completa con análisis detallados, puntuaciones y recomendaciones de maridaje actualizadas semanalmente.
                        </p>
                        <div class="flex items-center justify-between border-t border-gray-100 pt-4">
                            <a href="{{ url('/resenas') }}" class="flex items-center text-amber-400 hover:text-amber-500 font-medium font-garamond">
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
                <div class="p-2 lg:w-1/4 md:w-1/2">
                    <div data-aos="fade-up" data-aos-duration="1000"
                        class="h-full bg-gray-800 bg-opacity-60 px-4 pt-8 pb-12 rounded-lg overflow-hidden text-center relative transition-transform transform hover:scale-105 hover:shadow-lg">
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

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-in-out-quad'
        });

        // Chatbot Interactivo
        const chatToggle = document.getElementById('chat-toggle');
        const chatContainer = document.getElementById('chat-container');
        const chatMessages = document.getElementById('chat-messages');
        const chatInput = document.getElementById('chat-input');
        const chatSend = document.getElementById('chat-send');
        const chatClose = document.getElementById('chat-close');

        const wineResponses = {
            "curso": "Nuestro programa profesional incluye:<br>• Certificación internacional<br>• 120 horas lectivas<br>• Acceso a bodegas asociadas<br>• Bolsa de trabajo<br><a href='/cursos' class='text-amber-700 font-medium mt-2 inline-block'>Ver detalles</a>",
            "cata": "Próximos eventos:<br>• Cata de vinos blancos - 15 Julio<br>• Maridaje con quesos - 22 Julio<br>• Vinos orgánicos - 29 Julio<br><a href='/catas' class='text-amber-700 font-medium mt-2 inline-block'>Reservar plaza</a>",
            "reseña": "Últimas publicaciones:<br>• Rioja Gran Reserva 2015 - 94/100<br>• Albariño Rías Baixas - 92/100<br>• Priorat Blend - 96/100<br><a href='/resenas' class='text-amber-700 font-medium mt-2 inline-block'>Ver análisis completo</a>",
            "precio": "Nuestros planes:<br>• Curso completo: €599<br>• Bono 3 catas: €199<br>• Membresía anual: €299<br><a href='/tarifas' class='text-amber-700 font-medium mt-2 inline-block'>Ver todas las opciones</a>"
        };

        chatToggle.addEventListener('click', () => {
            chatContainer.classList.toggle('hidden');
            chatToggle.classList.toggle('scale-110');
        });

        chatClose.addEventListener('click', () => {
            chatContainer.classList.add('hidden');
        });

        const createMessage = (content, isUser = false) => {
            const messageDiv = document.createElement('div');
            messageDiv.className = isUser ? 
                'user-message bg-amber-100/90 border-amber-200 self-end p-3 rounded-lg max-w-[85%] font-garamond text-gray-700 shadow-sm' : 
                'bot-message bg-gray-50/90 border-gray-100 p-3 rounded-lg max-w-[85%] font-garamond text-gray-700 shadow-sm';
            messageDiv.innerHTML = content;
            return messageDiv;
        };

        chatSend.addEventListener('click', () => {
            const message = chatInput.value.trim().toLowerCase();
            if (message) {
                chatMessages.appendChild(createMessage(message, true));
                
                let response = "¡Interesante consulta! Te recomiendo visitar nuestra sección de ";
                if (message.includes('curso')) response = wineResponses.curso;
                else if (message.includes('cata')) response = wineResponses.cata;
                else if (message.includes('reseña')) response = wineResponses.reseña;
                else if (message.includes('precio')) response = wineResponses.precio;
                else response = `Para más información sobre "${message}", visita <a href="/contacto" class="text-amber-700">nuestra página de contacto</a> o explora nuestro <a href="/faq" class="text-amber-700">centro de ayuda</a>.`;

                setTimeout(() => {
                    chatMessages.appendChild(createMessage(response));
                    chatMessages.scrollTop = chatMessages.scrollHeight;
                }, 800);

                chatInput.value = '';
            }
        });

        chatInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') chatSend.click();
        });
    </script>

</body>
</html>

@endsection