<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Script inline para evitar FOUC (Flash of Unstyled Content) -->
    <script>
        // Aplicar tema antes da página renderizar
        if (localStorage.theme === 'dark' ||
            (!('theme' in localStorage) &&
                window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        }
    </script>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-white min-h-screen">
    <header class="p-4 border-b border-gray-200 dark:border-gray-700">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <h1 class="text-xl font-semibold">{{ config('app.name') }}</h1>

            <!-- Theme Toggle Component -->
            <x-theme-toggle />
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="mt-auto p-4 border-t border-gray-200 dark:border-gray-700">
        <div class="max-w-7xl mx-auto text-center text-sm text-gray-600 dark:text-gray-400">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>

</html>