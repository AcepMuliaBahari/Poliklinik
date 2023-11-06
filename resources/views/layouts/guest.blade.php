<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

<<<<<<< HEAD
        <title>{{ config('app.name', 'Poliklinik') }}</title>
=======
        <title>{{ config('app.name', 'Laravel') }}</title>
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
<<<<<<< HEAD
     
=======

>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
<<<<<<< HEAD
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('components.sesion')
            @include('layouts.navbar')
            @if (isset($header))
            
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-5 px-4 sm:px-5 lg:px-8">
                    {{ $header }}
                </div>
            </header>
            @endif
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            {{-- <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div> --}}
            
     
            <div class="w-full sm:max-w-md mt-3 px-6 py-2 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
        </div>
        @include('script.script')
=======
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
    </body>
</html>
