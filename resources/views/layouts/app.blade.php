<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

<<<<<<< HEAD
        <title>{{ config('', 'Poliklinik') }}</title>
=======
        <title>{{ config('app.name', 'Laravel') }}</title>
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
<<<<<<< HEAD
        {{-- @include('components.sesion') --}}
=======
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
<<<<<<< HEAD

        </div>
        @include('components.footer')
        {{-- @include('script.script') --}}
=======
        </div>
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
    </body>
</html>
