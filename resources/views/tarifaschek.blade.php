<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>Verificación de Edad</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen bg-gray-900 text-white">
    <div class="container mx-auto flex flex-col items-center justify-center min-h-screen">
        <h1 class="text-4xl mb-8">Verificación de Edad</h1>
        <p class="mb-4">Debes tener al menos 18 años para acceder a esta página.</p>
        <form id="ageForm" class="flex flex-col items-center">
            <label for="dob" class="mb-2">Fecha de Nacimiento:</label>
            <input type="date" id="dob" name="dob" class="mb-4 p-2 rounded-md text-black">
            <button type="button" onclick="checkAge()" class="px-4 py-2 bg-yellow-500 rounded-md hover:bg-yellow-600">Verificar Edad</button>
        </form>
    </div>
    <script>
        function checkAge() {
            const dob = new Date(document.getElementById('dob').value);
            const today = new Date();
            const age = today.getFullYear() - dob.getFullYear();
            const monthDiff = today.getMonth() - dob.getMonth();
            const dayDiff = today.getDate() - dob.getDate();

            if (monthDiff < 0 || (monthDiff === 0 && dayDiff < 0)) {
                age--;
            }

            if (age >= 18) {
                alert("Acceso permitido. Redirigiendo...");
                window.location.href = "/tarifas";
            } else {
                alert("Lo siento, debes tener al menos 18 años para acceder a esta página.");
            }
        }
    </script>
</body>
</html>
