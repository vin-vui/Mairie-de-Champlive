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
        <nav class="bg-carribean  px-4 py-2.5 fixed left-0 right-0 top-0 z-50">
            <div class="flex flex-wrap justify-between items-center">
                <div class="flex justify-start items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center justify-between mr-4">
                        <x-application-logo class="" />
                        <span
                            class="self-center flex justify-center text-seasalt text-2xl font-semibold whitespace-nowrap">Mairie
                            de Champlive</span>
                    </a>
                </div>
                <div class="flex items-center lg:order-2">
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
                            <span class="ml-3">Nouveautés</span>
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
                </ul>

            </div>
        </aside>
    </div>

    <main class="p-4 md:ml-64 min-h-screen pt-20 bg-seasalt">
        {{ $slot }}
    </main>

    @stack('modals')
</body>

</html>
