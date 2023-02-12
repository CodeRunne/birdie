<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Tailwind -->
    @vite('resources/css/app.css')

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        .logo {
            font-family: Ibm Plex Mono;
        }
    </style>
</head>
<body>
    <main>
        <header class="px-4 py-2 container mx-auto">
            <p class="logo text-red-500 text-xl font-bold">Birdie</p>
        </header>
        <section class="px-4 container mx-auto">
            @yield('content')
        </section>
    </main>
</body>
</html>
