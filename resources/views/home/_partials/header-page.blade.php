<div class="fixed w-full top-0 z-40">
    <nav class="bg-gradient-to-b h-16 from-carribean/90 to-mint lg:px-6">
        {{-- <div class="flex justify-between ml-5 lg:"> --}}

        <div class="flex flex-wrap justify-end h-12 lg:justify-center items-center lg:mx-auto max-w-screen-xl"
            x-data="{ open: false }">
            <img class="h-16 hidden lg:block mr-5" src="/image/blason_svg.svg" alt="Blason de Champlive">
            {{-- mobile menu button --}}
            <div class="flex items-center mr-3 border-2 border-transparent lg:hidden">
                <button type="button" @click="open = !open" class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 14 14">
                        <path fill="#fafafa" stroke="#fafafa" stroke-linecap="round" stroke-linejoin="round"
                            d="M13.5 2H.5m13 5H.5m13 5H.5" />
                    </svg>
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="#fafafa"
                            d="M18.36 19.78L12 13.41l-6.36 6.37l-1.42-1.42L10.59 12L4.22 5.64l1.42-1.42L12 10.59l6.36-6.36l1.41 1.41L13.41 12l6.36 6.36z" />
                    </svg> --}}
                </button>
            </div>

            {{-- mobile menu --}}
            <div class="lg:hidden bg-gradient-to-b from-carribean to-mint w-full z-50 font-p text-seasalt "
                x-show="open" x-transition.scale.origin.top x-transition.delay.80ms>
                <div class="flex flex-col space-y-3 py-5 px-5">
                    <a href="{{ route('home') }}">Accueil</a>
                    <div class="flex flex-col space-y-2">
                        <div
                            class="flex items-center text-seasalt uppercase pb-2 mb-3 border-b-2 border-teal-900 font-semibold">

                            <svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 15 15">
                                <path fill="currentColor"
                                    d="M13 4H9V1L7.5 0L6 1v3H2L1 5v1h13V5l-1-1zM7.5 1.5c.4 0 .7.3.7.8s-.3.7-.7.7s-.8-.3-.8-.8c0-.4.4-.7.8-.7zM13 7H2v4l-1 1.5V14h13v-1.5L13 11V7zm-8 5.5H4V8h1v4.5zm3 0H7V8h1v4.5zm3 0h-1V8h1v4.5z" />
                            </svg>
                            <div class="pt-1 ml-2">La Mairie</div>
                        </div>
                        <a href="{{ route('nos-membres') }}">Membres du conseil</a>
                        <a href="{{ route('nos-deliberations') }}">Délibérations</a>
                        <a href="{{ route('services-alentours') }}">Services alentours</a>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <div
                            class="flex items-center text-seasalt uppercase pb-2 mb-3 border-b-2 border-teal-900 font-semibold">

                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 15 15">
                                <path fill="currentColor"
                                    d="M6.176 1.176a.249.249 0 0 0-.352 0l-4.4 4.4A.25.25 0 0 0 1.6 6H3v6.751a.25.25 0 0 0 .249.249h3.5A.248.248 0 0 0 7 12.753v-7.43c0-.066.026-.13.073-.176L8.5 3.5L6.176 1.176ZM6 11H5v-1h1v1Zm0-2H5V8h1v1Zm0-3v1H5V6h1Zm6.75-3h-.5a.25.25 0 0 0-.25.25V5l-1.324-1.824a.249.249 0 0 0-.352 0L8.056 5.932A.246.246 0 0 0 8 6.088v6.66a.249.249 0 0 0 .246.252h1.5a.253.253 0 0 0 .254-.252V11h1v1.747a.253.253 0 0 0 .253.253h1.5a.25.25 0 0 0 .247-.249V3.25a.25.25 0 0 0-.25-.25ZM10 8H9V7h1v1Zm2 0h-1V7h1v1Zm-2 2H9V9h1v1Zm2 0h-1V9h1v1Z" />
                            </svg>
                            <div class="pt-1 ml-2">Le village</div>
                        </div>
                        <a href="{{ route('nos-articles') }}">Actualités</a>
                        <a href="{{ route('nos-associations') }}">Associations</a>
                        <a href="{{ route('numeros-utiles') }}">Numéros utiles</a>
                        <a href="{{ route('journal') }}">Journal</a>
                        <a href="{{ route('rubrique-souvenirs') }}">Rubrique souvenirs</a>

                    </div>
                </div>
                <div>
                </div>
            </div>


            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1  " id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0 text-sm ">
                    <div>
                        <a href="{{ route('home') }}"
                            class="font-semibold leading-6 font-p block py-2 pr-4 pl-3 text-seasalt border-b-2 border-transparent  hover:scale-110">Accueil</a>
                    </div>
                    <div>
                        <div class="hidden md:flex relative  pb-2 mt-2" x-data="{ open: false }">
                            <button type="button" class="flex  gap-x-1 font-semibold leading-6 font-p text-seasalt"
                                @click="open = !open">
                                La Mairie
                                <svg class="h-6 w-6 flex-none text-gray-400 hover:scale-110" viewBox="0 0 20 20"
                                    fill="#FAFAFA" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div x-cloak x-show="open" x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 translate-y-1"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 translate-y-1"
                                x-description="'Product' flyout menu, show/hide based on flyout menu state."
                                class="absolute -left-8 z-50 top-full mt-3 max-w-md w-44 overflow-hidden text-seasalt rounded-lg font-p bg-gradient-to-b from-carribean to-mint border-2 border-carribean shadow-lg ring-1 ring-gray-900/5"
                                x-ref="panel" @click.away="open = false">
                                <div class="p-2 pl-5 ">
                                    <div
                                        class="group relative flex gap-x-6 py-2  leading-6 border-b-2 border-transparent hover:transition-all hover:scale-110">
                                        <div class="flex-auto">
                                            <a href="{{ route('nos-membres') }}" class="block font-semibold ">
                                                Conseil municipal
                                                <span class="absolute inset-0"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="group relative flex gap-x-6 py-2 leading-6 border-b-2 border-transparent hover:transition-all hover:scale-110">
                                        <div class="flex-auto">
                                            <a href="{{ route('nos-deliberations') }}" class="block font-semibold">
                                                Délibérations
                                                <span class="absolute inset-0"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="group relative flex gap-x-6 py-2 leading-6 border-b-2 border-transparent hover:scale-110 ">
                                        <div class="flex-auto">
                                            <a href="{{ route('services-alentours') }}" class="block font-semibold ">
                                                Services alentours
                                                <span class="absolute inset-0"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="hidden md:flex relative z-50 pb-2 mt-2" x-data="{ open: false }">
                            <button type="button"
                                class="flex text-blaitems-center gap-x-1  font-semibold leading-6 font-p text-white"
                                @click="open = !open">
                                Le Village
                                <svg class="h-6 w-6 flex-none text-gray-400 hover:scale-110" viewBox="0 0 20 20"
                                    fill="#FAFAFA" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div x-cloak x-show="open" x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 translate-y-1"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 translate-y-1"
                                x-description="'Product' flyout menu, show/hide based on flyout menu state."
                                class="absolute -left-8 top-full z-50 mt-3 max-w-md w-44 overflow-hidden font-p text-seasalt rounded-lg bg-gradient-to-b from-carribean to-mint border-2 border-carribean shadow-lg ring-1 ring-gray-900/5"
                                x-ref="panel" @click.away="open = false">
                                <div class="p-2 pl-5">
                                    <div
                                        class="group relative flex gap-x-6 py-2 leading-6 border-b-2 border-transparent hover:transition-all hover:scale-110">
                                        <div class="flex-auto">
                                            <a href="{{ route('nos-articles') }}" class="block font-semibold ">
                                                Actualités
                                                <span class="absolute inset-0"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="group relative flex gap-x-6 py-2 leading-6 border-b-2 border-transparent hover:transition-all hover:scale-110">
                                        <div class="flex-auto">
                                            <a href="{{ route('nos-associations') }}" class="block font-semibold ">
                                                Associations
                                                <span class="absolute inset-0"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="group relative flex gap-x-6 py-2 leading-6 border-b-2 border-transparent hover:transition-all hover:scale-110">
                                        <div class="flex-auto">
                                            <a href="{{ route('numeros-utiles') }}" class="block font-semibold ">
                                                Numéros utiles
                                                <span class="absolute inset-0"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="group relative flex gap-x-6 py-2 leading-6 border-b-2 border-transparent hover:transition-all hover:scale-110">
                                        <div class="flex-auto">
                                            <a href="{{ route('journal') }}" class="block font-semibold ">
                                                Journal
                                                <span class="absolute inset-0"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="group relative flex gap-x-6 py-2 leading-6 border-b-2 border-transparent hover:scale-110">
                                        <div class="flex-auto">
                                            <a href="{{ route('rubrique-souvenirs') }}" class="block font-semibold ">
                                                Rubrique souvenirs
                                                <span class="absolute inset-0"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
        {{-- </div> --}}
    </nav>
    <div class="shapedividers_com-7249 w-full h-40 relative z-40 hidden md:block"></div>
</div>
