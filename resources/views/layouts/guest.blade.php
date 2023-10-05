<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=palanquin:400|quicksand:500|roboto:300" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Styles -->
    @livewireStyles
</head>

<body class="bg-seasalt ">
    <header class="">
        @include('home._partials.header-page')

    </header>

    
    <main >
        <div >
            {{ $slot }}
        </div>
    </main>

@include('home._partials.footer')

    @livewireScripts
</body>

</html>
