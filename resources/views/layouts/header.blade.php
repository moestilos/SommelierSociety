<header class="text-gray-400 bg-black p-2 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
                <!-- Logo VinoA -->
                <img src="{{ asset('img/logonuevo.jpeg  ') }}" alt="Logo VinoA" class="w-10 h-10 rounded-full mr-3">
                <span class="ml-3 text-xl holy">South Wine Academy</span>
            </a>
            <!-- modo oscuro -->
            <div class="ml-auto mr-4">
                <button id="theme-toggle" class="bg-gray-800 text-white px-3 py-2 rounded">
                    Modo Oscuro
                </button>
            </div>

            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <a href="{{ url('/dashboard') }}" class="mr-5 hover:text-yellow">Home</a>
                <a href="{{ url('/contacto') }}" class="mr-5 hover:text-yellow">About Us</a>
                <a href="{{ url('/contact') }}" class="mr-5 hover:text-yellow">Contact Us</a>
                <a href="" class="mr-5 hover:text-yellow">Store</a>
            </nav>
        </div>
    </header>