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
        .bg-opacity-60 {
            background-color: rgba(31, 41, 55, 0.1); 
        }
        .bg-opacity-40 {
            background-color: rgba(31, 41, 55, 0.05); 
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
                        class="h-full bg-gray-800 bg-opacity-60 px-4 pt-8 pb-12 rounded-lg overflow-hidden text-center relative transition-transform transform hover:scale-105 hover:shadow-lg">
                        <h1 class="title-font sm:text-xl text-lg font-medium text-white mb-3">Cursos de Sommelier</h1>
                        <img src="{{ asset('img/bodega.jpeg') }}" alt="Tuzorra"
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
                        class="h-full bg-gray-800 bg-opacity-40 px-4 pt-8 pb-12 rounded-lg overflow-hidden text-center relative transition-transform transform hover:scale-105 hover:shadow-lg">
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
                        class="h-full bg-gray-800 bg-opacity-60 px-4 pt-8 pb-12 rounded-lg overflow-hidden text-center relative transition-transform transform hover:scale-105 hover:shadow-lg">
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


            </div>
        </div>
    </section>

    
    <!-- Botón del ChatBot -->
    <div class="chat-container" id="chat-container">
        <div class="chat-header">ChatBot</div>
        <div class="chat-messages" id="chat-messages"></div>
        <div class="chat-input">
            <input type="text" id="chat-input" placeholder="Escribe un mensaje...">
            <button id="chat-send">Enviar</button>
        </div>
    </div>
    <button class="chat-toggle" id="chat-toggle">💬</button>

    <script>
        const chatToggle = document.getElementById('chat-toggle');
        const chatContainer = document.getElementById('chat-container');
        const chatMessages = document.getElementById('chat-messages');
        const chatInput = document.getElementById('chat-input');
        const chatSend = document.getElementById('chat-send');

        const responses = {
            "hola": "¡Hola! ¿Cómo puedo ayudarte?",
            "adios": "¡Adiós! Que tengas un buen día.",
            "gracias": "¡De nada! ¿En qué más puedo ayudarte?",
            "canta": "Tu madre tiene una polla, que ya la quisiera yo, me dio pena por tu padre el dia que se entero, llegó la noche de bodas, de quien se iba a imaginar, que iba a ser a tu padre al que iban a encular",
            "informacion": "Tenemos varios tipos de cursos y varias catas de vino. También puedes obtener información sobre nuestros profesionales y de nuestras tarifas. ¿Qué información deseas?",
            "cursos": "Puedes encontrar más información sobre nuestros cursos <a href='{{ url('/cursos') }}' class='text-yellow-400'>aquí</a>.",
            "catas": "Puedes encontrar más información sobre nuestras catas de vino <a href='{{ url('/catasdevino') }}' class='text-yellow-400'>aquí</a>.",
            "especialistas": "Puedes encontrar más información sobre nuestros especialistas <a href='{{ url('/contacto') }}' class='text-yellow-400'>aquí</a>.",
            "tarifas": "Puedes encontrar más información sobre nuestras tarifas <a href='{{ url('/tarifas') }}' class='text-yellow-400'>aquí</a>."
        };

        chatToggle.addEventListener('click', () => {
            chatContainer.style.display = chatContainer.style.display === 'none' ? 'block' : 'none';
        });

        chatSend.addEventListener('click', () => {
            const message = chatInput.value.trim().toLowerCase();
            if (message) {
                const userMessageElement = document.createElement('div');
                userMessageElement.textContent = message;
                userMessageElement.style.color = 'black'; 
                chatMessages.appendChild(userMessageElement);

                const botResponse = responses[message] || "Lo siento, no entiendo tu mensaje.";
                const botMessageElement = document.createElement('div');
                botMessageElement.innerHTML = botResponse;
                botMessageElement.style.fontWeight = 'bold';
                botMessageElement.style.color = 'black'; 
                chatMessages.appendChild(botMessageElement);

                chatInput.value = '';
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }
        });

        chatInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                chatSend.click();
            }
        });
    </script>

</body>

</html>
@endsection