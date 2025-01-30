<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - South Wine Academy</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Teko', sans-serif;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-900 via-purple-900 to-indigo-900 dark:bg-gray-900">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-xl transition-all duration-300 hover:shadow-2xl">
            <div class="text-center">
                <img src="{{ asset('img/nuevoLogo.png') }}" alt="Logo" class="mx-auto h-20 w-auto rounded-full">
                <h2 class="mt-6 text-3xl font-extrabold text-gray-900 dark:text-white">
                    Create Your Account
                </h2>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                    Join our wine community today
                </p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="mt-8 space-y-6">
                @csrf

                <div class="rounded-md shadow-sm space-y-4">
                    <!-- Name Input -->
                    <div>
                        <label for="name" class="sr-only">Full Name</label>
                        <div class="relative">
                            <input 
                                id="name" 
                                name="name" 
                                type="text" 
                                value="{{ old('name') }}"
                                required 
                                autofocus 
                                autocomplete="name"
                                class="w-full pl-10 pr-4 py-3 border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white transition duration-300"
                                placeholder="Enter your full name"
                            />
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </div>
                        </div>
                        @error('name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email Input -->
                    <div>
                        <label for="email" class="sr-only">Email address</label>
                        <div class="relative">
                            <input 
                                id="email" 
                                name="email" 
                                type="email" 
                                value="{{ old('email') }}"
                                required 
                                autocomplete="email"
                                class="w-full pl-10 pr-4 py-3 border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white transition duration-300"
                                placeholder="Enter your email"
                            />
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                        </div>
                        @error('email')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <div class="relative">
                            <input 
                                id="password" 
                                name="password" 
                                type="password" 
                                required 
                                autocomplete="new-password"
                                class="w-full pl-10 pr-4 py-3 border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white transition duration-300"
                                placeholder="Create a password"
                            />
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                            </div>
                        </div>
                        @error('password')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password Input -->
                    <div>
                        <label for="password_confirmation" class="sr-only">Confirm Password</label>
                        <div class="relative">
                            <input 
                                id="password_confirmation" 
                                name="password_confirmation" 
                                type="password" 
                                required 
                                autocomplete="new-password"
                                class="w-full pl-10 pr-4 py-3 border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white transition duration-300"
                                placeholder="Confirm your password"
                            />
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                        </div>
                        @error('password_confirmation')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <a href="{{ route('login') }}" class="text-sm text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 dark:hover:text-indigo-300 transition duration-300">
                        Already registered?
                    </a>

                    <button type="submit" class="ml-4 inline-flex justify-center py-3 px-6 border border-transparent rounded-lg font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 transition duration-300 shadow-md">
                        Register Now
                    </button>
                </div>

                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300 dark:border-gray-600"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white dark:bg-gray-800 text-gray-500 dark:text-gray-300">
                            Or sign up with
                        </span>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <a href="#" class="w-full flex items-center justify-center p-3 border border-gray-300 dark:border-gray-600 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition duration-300">
                        <!-- Google Icon -->
                        <svg class="w-5 h-5" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5 20C16.0228 20 20.5 15.5228 20.5 10C20.5 4.47715 16.0228 0 10.5 0C4.97715 0 0.5 4.47715 0.5 10C0.5 15.5228 4.97715 20 10.5 20Z" fill="#3B82F6"/>
                            <path d="M15.2588 10.1967C15.2588 9.66955 15.2065 9.16665 15.1095 8.6875H10.5V11.5872H13.1844C13.021 12.3372 12.5766 12.9474 11.9183 13.3515V15.066H13.8183C14.7183 14.2235 15.2588 13.0528 15.2588 10.1967Z" fill="white"/>
                        </svg>
                    </a>
                    
                    <a href="#" class="w-full flex items-center justify-center p-3 border border-gray-300 dark:border-gray-600 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition duration-300">
                        <!-- Facebook Icon -->
                        <svg class="w-5 h-5" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5 0C4.97715 0 0.5 4.47715 0.5 10C0.5 15.5228 4.97715 20 10.5 20C16.0228 20 20.5 15.5228 20.5 10C20.5 4.47715 16.0228 0 10.5 0Z" fill="#3B5998"/>
                            <path d="M14.3413 10.4609H12.1807V20H8.81934V10.4609H6.65918V7.38281H8.81934V5.3125C8.81934 3.61328 9.81738 2.34375 12.2373 2.34375H14.5947V5.25781H12.9326C12.3193 5.25781 12.1807 5.625 12.1807 6.19844V7.38281H14.5957L14.3413 10.4609Z" fill="white"/>
                        </svg>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Dark Mode Toggle Script -->
    <script>
        const themeToggle = document.getElementById('theme-toggle');
        const html = document.documentElement;

        if (localStorage.getItem('theme') === 'dark') {
            html.classList.add('dark');
        }

        themeToggle?.addEventListener('click', () => {
            html.classList.toggle('dark');
            localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
        });
    </script>
</body>
</html>