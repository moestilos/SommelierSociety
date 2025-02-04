@extends('layouts.app')  // Se cambió de 'app' a 'layouts.app'
 
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
        @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=EB+Garamond:wght@400;500;600&display=swap');
       
        .font-cinzel {
            font-family: 'Cinzel Decorative', cursive;
        }
       
        .font-garamond {
            font-family: 'EB Garamond', serif;
        }
 
        .wine-gradient {
            background: linear-gradient(135deg, #8a6438 0%, rgba(67, 39, 16, 0.95) 100%);
        }
 
        .input-glow:focus {
            box-shadow: 0 0 15px rgba(149, 40, 40, 0.3);
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
 
<body class="bg-gradient-to-br from-[#DEB887] via-[#D4B88C] to-[#8B4513] dark:bg-gray-900">
    <div class="min-h-screen py-12 px-4 sm:px-6 lg:px-8">
        <!-- Sección Formación Profesional -->
        <div class="max-w-4xl mx-auto mb-12 bg-gradient-to-br from-[#E8DCC4] to-[#C4A484] rounded-xl p-10 shadow-2xl border border-[#B38B6D]/30">
            <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="md:w-1/2 text-center md:text-left">
                    <h2 class="text-3xl font-cinzel text-[#4A3728] mb-4">Formación Profesional</h2>
                    <p class="text-[#5C4033] font-garamond mb-6">Programa certificado con módulos teóricos y prácticos. Incluye certificación internacional y acceso a nuestra red de bodegas asociadas.</p>
                    <a href="{{ url('/cursos') }}" class="inline-flex items-center px-6 py-3 border border-transparent rounded-lg font-cinzel text-[#F5E6CA] bg-[#8B4513]/80 hover:bg-[#A0522D]/90 hover:shadow-lg transition-all duration-300">
                        Explorar Programa
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('img/bodega.jpeg') }}" alt="Formación" class="rounded-xl shadow-lg object-cover w-full h-64">
                </div>
            </div>
        </div>
 
        <!-- Sección Catas Exclusivas -->
        <div class="max-w-4xl mx-auto mb-12 bg-gradient-to-br from-[#DEB887] to-[#D2B48C] rounded-xl p-10 shadow-2xl border border-[#B38B6D]/30">
            <div class="flex flex-col md:flex-row-reverse items-center gap-8">
                <div class="md:w-1/2 text-center md:text-left">
                    <h2 class="text-3xl font-cinzel text-[#4A3728] mb-4">Catas Exclusivas</h2>
                    <p class="text-[#5C4033] font-garamond mb-6">Eventos privados en bodegas seleccionadas. Incluye cata de 5 vinos premium y maridaje con gastronomía local.</p>
                    <a href="{{ url('/catasdevino') }}" class="inline-flex items-center px-6 py-3 border border-transparent rounded-lg font-cinzel text-[#F5E6CA] bg-[#8B4513]/80 hover:bg-[#A0522D]/90 hover:shadow-lg transition-all duración-300">
                        Ver Calendario
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('img/vinocur.jpeg') }}" alt="Catas" class="rounded-xl shadow-lg object-cover w-full h-64">
                </div>
            </div>
        </div>
 
        <!-- Sección Análisis Técnicos -->
        <div class="max-w-4xl mx-auto mb-12 bg-gradient-to-br from-[#E8DCC4] to-[#C4A484] rounded-xl p-10 shadow-2xl border border-[#B38B6D]/30">
            <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="md:w-1/2 text-center md:text-left">
                    <h2 class="text-3xl font-cinzel text-[#4A3728] mb-4">Análisis Técnicos</h2>
                    <p class="text-[#5C4033] font-garamond mb-6">Biblioteca completa con análisis detallados, puntuaciones y recomendaciones de maridaje actualizadas semanalmente.</p>
                    <a href="{{ url('/resenas') }}" class="inline-flex items-center px-6 py-3 border border-transparent rounded-lg font-cinzel text-[#F5E6CA] bg-[#8B4513]/80 hover:bg-[#A0522D]/90 hover:shadow-lg transition-all duración-300">
                        Ver Análisis
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('img/resenas.jpeg') }}" alt="Análisis" class="rounded-xl shadow-lg object-cover w-full h-64">
                </div>
            </div>
        </div>
    </div>
 
    <!-- ChatBot Mejorado -->
    <div class="fixed bottom-8 right-8 z-50">
        <div id="chat-container" class="hidden w-80 bg-[#F5E6CA]/95 backdrop-blur-xl rounded-2xl shadow-2xl border border-[#B38B6D] transform transition-all duración-300">
            <div class="chat-header bg-gradient-to-r from-[#8B4513] to-[#A0522D] text-[#F5E6CA] p-4 rounded-t-2xl flex items-center">
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
 
        // Chatbot Interactivo
        const chatToggle = document.getElementById('chat-toggle');
        const chatContainer = document.getElementById('chat-container');
        const chatMessages = document.querySelector('.chat-messages');
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