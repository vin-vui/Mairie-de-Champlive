<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    {{-- <x-banner /> --}}

    <div class="antialiased bg-seasalt ">
        <nav class="bg-carribean  px-4 h-16 fixed left-0 right-0 top-0 z-50">
            <div class="flex flex-wrap justify-between items-start mt-2 ">
                <div class="flex justify-start items-start">
                        <x-application-logo class="" />
                        <div
                            class="flex justify-start mt-3 mx-12 text-seasalt text-2xl font-semibold ">Mairie
                            de Champlive</div>
                </div>
                <div class="flex items-center mt-3 lg:order-2">
                    <!-- Dropdown menu profile -->
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button
                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                        src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-seasalt bg-carribean hover:underline transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        </nav>

        <!-- Sidebar -->
        <aside
            class="fixed top-0 left-0 z-40 w-64 h-screen pt-36 transition-transform -translate-x-full bg-carribean md:translate-x-0"
            aria-label="Sidenav" id="drawer-navigation">
            <div class="overflow-y-auto py-5 px-3 h-full bg-carribean">
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('articles.index') }}"
                            class="flex items-center p-2 text-base font-medium text-seasalt rounded-lg  hover:bg-teal-900">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="#fafafa"
                                    d="M4 21q-.825 0-1.413-.588T2 19V5q0-.825.588-1.413T4 3h16q.825 0 1.413.588T22 5v14q0 .825-.588 1.413T20 21H4Zm2-4h12v-2H6v2Zm0-4h4V7H6v6Zm6 0h6v-2h-6v2Zm0-4h6V7h-6v2Z" />
                            </svg>
                            <span class="ml-3">Actualités</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('members.index') }}"
                            class="flex items-center p-2 text-base font-medium text-seasalt rounded-lg  hover:bg-teal-900">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 20 20">
                                <path fill="#fafafa"
                                    d="M7.879 7.5c.504-.61 1.267-1 2.121-1c.854 0 1.617.39 2.121 1a2.75 2.75 0 1 1-4.243 0Zm5.871 1.75c0-.632-.156-1.228-.432-1.75H17.5A1.5 1.5 0 0 1 19 9v.5c0 1.587-1.206 3.212-3.315 3.784A2.5 2.5 0 0 0 13.5 12h-.95a3.74 3.74 0 0 0 1.2-2.75ZM13.5 13a1.496 1.496 0 0 1 1.5 1.5v.5c0 1.971-1.86 4-5 4c-3.14 0-5-2.029-5-4v-.5A1.496 1.496 0 0 1 6.5 13h7ZM1 9.5c0 1.587 1.206 3.212 3.315 3.784A2.5 2.5 0 0 1 6.5 12h.95a3.74 3.74 0 0 1-1.2-2.75c0-.632.156-1.228.433-1.75H2.5A1.5 1.5 0 0 0 1 9v.5Zm7.75-5.75a2.75 2.75 0 1 0-5.5 0a2.75 2.75 0 0 0 5.5 0Zm8 0a2.75 2.75 0 1 0-5.5 0a2.75 2.75 0 0 0 5.5 0Z" />
                            </svg>
                            <span class="ml-3">Membres du conseil</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('deliberations.index') }}"
                            class="flex items-center p-2 text-base font-medium text-seasalt rounded-lg  hover:bg-teal-900">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 14 14">
                                <g fill="none" stroke="#fafafa" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M.5 13.29H8m-1 0v-2.5H1.5v2.5" />
                                    <rect width="7.07" height="4.24" x="3.96" y="2.17" rx="1"
                                        transform="rotate(-45 7.499 4.294)" />
                                    <path d="m9 5.79l4.5 4.5" />
                                </g>
                            </svg>
                            <span class="ml-3">Délibérations</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('associations.index') }}"
                            class="flex items-center p-2 text-base font-medium text-seasalt rounded-lg  hover:bg-teal-900">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="#fafafa"
                                    d="M9 22V8.775q-2.275-.6-3.638-2.513T4 2h2q0 2.075 1.338 3.538T10.75 7h2.5q.75 0 1.4.275t1.175.8L20.35 12.6l-1.4 1.4L15 10.05V22h-2v-6h-2v6H9Zm3-16q-.825 0-1.413-.588T10 4q0-.825.588-1.413T12 2q.825 0 1.413.588T14 4q0 .825-.588 1.413T12 6Z" />
                            </svg>
                            <span class="ml-3">Associations</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services.index') }}"
                            class="flex items-center p-2 text-base font-medium text-seasalt rounded-lg hover:bg-teal-900 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="#fafafa"
                                    d="M20.875 22q-3.9 0-7.337-1.475q-3.438-1.475-6-4.037q-2.563-2.563-4.05-6Q2 7.05 2 3.125q-.025-.45.3-.788Q2.625 2 3.1 2H7q.45 0 .775.337q.325.338.325.813q0 1.1.15 2.075q.15.975.475 1.85q.125.275.05.562q-.075.288-.3.538l-2.5 2.5q1.075 2.2 3.05 4.175Q11 16.825 13.275 18l2.5-2.5q.225-.225.525-.3q.3-.075.6.05q.925.3 1.912.462q.988.163 2.038.163q.475 0 .813.35q.337.35.337.85V20.9q0 .45-.325.775t-.8.325ZM20 12q0-3.35-2.325-5.675Q15.35 4 12 4V2q2.075 0 3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12Zm-4 0q0-1.65-1.175-2.825Q13.65 8 12 8V6q2.5 0 4.25 1.75T18 12Z" />
                            </svg>
                            <span class="ml-3">Services</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('galleries.index') }}"
                            class="flex items-center p-2 text-base font-medium text-seasalt rounded-lg hover:bg-teal-900 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <g fill="#fafafa">
                                    <path
                                        d="M22 12.698c-.002 1.47-.013 2.718-.096 3.743c-.097 1.19-.296 2.184-.74 3.009a4.18 4.18 0 0 1-.73.983c-.833.833-1.893 1.21-3.237 1.39C15.884 22 14.2 22 12.053 22h-.106c-2.148 0-3.83 0-5.144-.177c-1.343-.18-2.404-.557-3.236-1.39c-.738-.738-1.12-1.656-1.322-2.795c-.2-1.12-.236-2.512-.243-4.241C2 12.957 2 12.492 2 12v-.054c0-2.148 0-3.83.177-5.144c.18-1.343.557-2.404 1.39-3.236c.832-.833 1.893-1.21 3.236-1.39c1.168-.157 2.67-.175 4.499-.177a.697.697 0 1 1 0 1.396c-1.855.002-3.234.018-4.313.163c-1.189.16-1.906.464-2.436.994S3.72 5.8 3.56 6.99C3.397 8.2 3.395 9.788 3.395 12v.784l.932-.814a2.14 2.14 0 0 1 2.922.097l3.99 3.99a1.86 1.86 0 0 0 2.385.207l.278-.195a2.79 2.79 0 0 1 3.471.209l2.633 2.37c.265-.557.423-1.288.507-2.32c.079-.972.09-2.152.091-3.63a.698.698 0 0 1 1.396 0Z" />
                                    <path fill-rule="evenodd"
                                        d="M17.5 11c-2.121 0-3.182 0-3.841-.659C13 9.682 13 8.621 13 6.5c0-2.121 0-3.182.659-3.841C14.318 2 15.379 2 17.5 2c2.121 0 3.182 0 3.841.659C22 3.318 22 4.379 22 6.5c0 2.121 0 3.182-.659 3.841c-.659.659-1.72.659-3.841.659Zm.75-6.5a.75.75 0 0 0-1.5 0v1.25H15.5a.75.75 0 0 0 0 1.5h1.25V8.5a.75.75 0 0 0 1.5 0V7.25h1.25a.75.75 0 0 0 0-1.5h-1.25V4.5Z"
                                        clip-rule="evenodd" />
                                </g>
                            </svg>
                            <span class="ml-3">Rubrique souvenirs</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('newspapers.index') }}"
                            class="flex items-center p-2 text-base font-medium text-seasalt rounded-lg hover:bg-teal-900 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24">
                                <g fill="none" stroke="#fafafa" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5">
                                    <path
                                        d="M6 6h8m-8 4h12m-5 4h5m-5 4h5M2 21.4V2.6a.6.6 0 0 1 .6-.6h15.652a.6.6 0 0 1 .424.176l3.148 3.148A.6.6 0 0 1 22 5.75V21.4a.6.6 0 0 1-.6.6H2.6a.6.6 0 0 1-.6-.6Z" />
                                    <path d="M6 18v-4h3v4H6ZM18 2v3.4a.6.6 0 0 0 .6.6H22" />
                                </g>
                            </svg>
                            <span class="ml-3">Journal</span>
                        </a>
                    </li>
                </ul>

            </div>
        </aside>
    </div>

    <main class="p-4 md:ml-64 min-h-screen pt-20 bg-seasalt rounded-lg">
        {{ $slot }}
    </main>

    @stack('modals')
</body>

</html>
