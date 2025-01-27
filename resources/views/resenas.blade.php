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
    </style>
    <title>Reseñas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen" style="background-image: url('{{ asset('img/fondovinos.jpg') }}'); background-size: cover; background-position: center;">

<section class="bg-[#0000004a] py-12">
    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <h2 class="text-center text-4xl font-bold tracking-tight text-white sm:text-5xl">
            Reseñas de nuestros Clientes    
        </h2>
        <div class="mt-8 flex flex-wrap justify-center gap-6">
            @for ($i = 0; $i < 6; $i++)
            <div class="w-full sm:w-1/2 lg:w-1/3 mb-8">
                <blockquote class="h-full bg-gray-800 bg-opacity-80 px-6 pt-8 pb-12 rounded-lg overflow-hidden text-center relative transition-transform transform hover:scale-105 hover:shadow-lg text-white">
                    <div class="flex items-center gap-4">
                        <img
                            alt=""
                            src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                            class="size-14 rounded-full object-cover"
                        />
                        <div>
                            <div class="flex justify-center gap-0.5 text-green-500">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                            </div>
                            <p class="mt-0.5 text-lg font-medium text-white">Paul Starr</p>
                        </div>
                    </div>
                    <p class="mt-4 text-white">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum incidunt, a
                        consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius accusamus
                        error officiis atque voluptates magnam!
                    </p>
                </blockquote>
            </div>
            @endfor
        </div>
    </div>
</section>

<section class="py-8">
    <div class="container px-6 py-8 mx-auto text-center">
        <h1 class="text-3xl font-extrabold text-white sm:text-5xl">Reseñas</h1>
        <form data-action="{{ route('resenas.store') }}" method="POST" class="mt-8">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-white">Nombre:</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 mt-2 text-gray-900 bg-white rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>
            <div class="mb-4">
                <label for="review" class="block text-white">Reseña:</label>
                <textarea id="review" name="review" class="w-full px-4 py-2 mt-2 text-gray-900 bg-white rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500"></textarea>
            </div>
            <button type="submit" class="px-4 py-2 mt-4 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-yellow-500 rounded-md hover:bg-yellow-600 focus:outline-none focus:bg-yellow-600">Enviar Reseña</button>
        </form>
    </div>
</section>

</body>
</html>
@endsection