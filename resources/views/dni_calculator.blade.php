<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Letra DNI</title>
    @vite('resources/css/app.css')

</head>

<body class="bg-gray-900 font-sans antialiased text-gray-100">

    <header class="gradient-bg py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl font-extrabold leading-tight text-gray-100 mb-3">Calculadora de Letra DNI</h1>
            <p class="text-lg text-gray-300 opacity-80">Calcula la letra de tu DNI español de manera fácil y rápida.</p>
        </div>
    </header>


    <div class="max-w-lg mx-auto bg-gray-800 p-8 rounded-3xl mt-10 card-shadow">
        <h2 class="text-4xl font-semibold text-center text-gray-100 mb-8">¡Ingresa tu DNI!</h2>

        <form id="dniForm" class="space-y-6">
            <div>
                <label for="dni" class="block text-sm font-medium text-gray-300">Introduce el número de tu DNI (0 - 99999999):</label>
                <input type="text" id="dni" name="dni" required
                    class="mt-2 block w-full p-4 border border-gray-700 rounded-lg focus:ring-2 focus:ring-opacity-50 focus:ring-red-600 input-focus placeholder-gray-500"
                    placeholder="Ejemplo: 12345678">
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-dark-red text-white py-3 rounded-lg hover-bg-dark-red transition-all">Calcular
                    Letra</button>
            </div>
        </form>


        <div id="resultContainer" class="mt-6 p-6 bg-gray-700 rounded-lg shadow-md hidden">
            <p class="text-lg text-gray-100"><strong>Número:</strong> <span id="dniValue"
                    class="font-semibold text-light-red"></span></p>
            <p class="text-lg text-gray-100"><strong>Letra:</strong> <span id="dniLetter"
                    class="font-semibold text-light-red"></span></p>
        </div>
    </div>

    <footer class="bg-gray-800 text-white py-6 mt-12">
        <div class="max-w-lg mx-auto text-center">
            <p class="text-sm text-muted">© 2025 Todos los derechos reservados</p>
            <p class="text-xs mt-2">Desarrollado por <strong>Issam Chellaf</strong></p>
            <p class="mt-4 text-xs text-gray-400 opacity-70">Este sitio web fue creado como una herramienta educativa.
                Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
