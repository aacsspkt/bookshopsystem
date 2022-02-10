<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        <header class="max-w-7xl mx-auto px-5 mt-2">
            <div class="max-w-7xl py-4 px-4 sm:px-6">
                {{ $header }}
            </div>
        </header>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        <div class="block relative lg:absolute bottom-0 min-w-full">
            <div class="max-w-7xl px-5 py-4 md:py-6 mx-auto">
                <div class="px-4 sm:px-6 ">
                    <h4 class="text-gray-400 text-sm">&copy; 2022 Ashish Sapkota </h4>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
