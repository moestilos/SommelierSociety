<header class="text-gray-400 bg-black p-2 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
            <!-- Logo VinoA -->
            <img src="{{ asset('img/nuevoLogo.png  ') }}" alt="Logo VinoA" class="w-24 h-20 rounded-full mr-3">
            <span class="ml-3 text-xl holy">South Wine Academy</span>
        </a>

        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center space-x-4">
            <a href="{{ url('/dashboard') }}" class="hover:text-yellow-400">Home</a>
            <a href="{{ url('/contacto') }}" class="hover:text-yellow-400">About Us</a>
            <a href="{{ url('/contact') }}" class="hover:text-yellow-400">Contact Us</a>
            <a href="" class="hover:text-yellow-400">Store</a>
            @auth
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <button class="bg-red-600 text-white px-3 py-2 rounded hover:bg-red-700 transition duration-300 ease-in-out transform hover:scale-105" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Cerrar sesión
            </button>
            @else
            <a href="{{ route('login') }}" class="bg-green-600 text-white px-3 py-2 rounded hover:bg-green-700 transition duration-300 ease-in-out transform hover:scale-105">
                Iniciar sesión
            </a>
            <a href="{{ route('register') }}" class="bg-blue-600 text-white px-3 py-2 rounded hover:bg-blue-700 transition duration-300 ease-in-out transform hover:scale-105">
                Registrarse
            </a>
            @endauth
            <button id="theme-toggle" class="bg-gray-800 text-white px-3 py-2 rounded hover:text-yellow-400 transition duration-300 ease-in-out transform hover:scale-105">
                Modo Oscuro
            </button>
        </nav>
    </div>
</header>