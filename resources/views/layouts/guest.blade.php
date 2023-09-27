<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=palanquin:400|quicksand:500|roboto:300" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body>
    <header>

        <nav class="bg-gradient-to-b from-carribean/90 to-mint/70  border-gray-200 px-4 py-3 lg:px-6  dark:bg-gray-800">
            <div class="flex flex-wrap justify-center items-center mx-auto max-w-screen-xl">
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="#"
                                class="block py-2 pr-4 pl-3 text-seasalt border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Accueil</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pr-4 pl-3 text-seasalt border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">La
                                mairie</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pr-4 pl-3 text-seasalt border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Le
                                Village</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pr-4 pl-3 text-seasalt border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="">
            <img class="h-[32rem] w-full object-cover shapedividers_com-410" src="storage/header2.jpg"
                alt="Photo du ruisseau de champlive">
            <div class="shapedividers_com-5924 h-32 "></div>
        </div>
    </header>

    <main class="mx-36">
        <div>
            <h1 class="shadow_text flex justify-center text-smocky-black font-h1 text-3xl mt-10 ">
                Mairie de CHAMPLIVE
            </h1>
            <div class="flex">
                <div class="mt-24 w-1/2 justify-around">
                    <div class="flex ">
                        <img class="w-48 mr-36" src="storage/blason.png" alt="Blason du village de Champlive">
                        <img class="w-96 rounded-3xl" src="storage/photo_1.jpg" alt="Photographie de la mairie">
                    </div>
                    <div class="flex mt-16 justify-center">
                        <img class="w-96 rounded-3xl" src="storage/photo_2.jpg" alt="Photographie du village">
                    </div>
                </div>

                <div class="w-1/2">
                    Champlive, un petit village pittoresque du Doubs, en Bourgogne-Franche-Comté, offre une évasion parfaite de l'agitation urbaine. Niché dans une vallée verdoyante, il séduit par ses paysages enchanteurs, ses maisons en pierre, et son ambiance chaleureuse. Les amoureux de la nature y trouveront des sentiers de randonnée magnifiques, tandis que les curieux pourront explorer son riche passé historique. Champlive est une invitation à la tranquillité et à l'authenticité de la vie à la campagne française.
                </div>
            </div>
            

        </div>

        
        
    </main>



    {{-- <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div> --}}

    @livewireScripts
</body>

</html>
