
<div class="fixed w-full top-0 z-40">
    <nav class="bg-gradient-to-b from-carribean/90 to-mint px-4 py-3 lg:px-6">
        <div class="flex flex-wrap justify-center items-center mx-auto max-w-screen-xl">
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <div>
                        <a href="{{ route('home') }}"
                            class="text-sm font-semibold leading-6 font-p block py-2 pr-4 pl-3 text-seasalt border-b-2 border-transparent hover:border-b-2 hover:border-seasalt hover:transition-all">Accueil</a>
                    </div>
                    <div>
                        <div class="hidden md:flex relative  pb-2 mt-2" x-data="{ open: false }">
                            <button type="button" class="flex  gap-x-1 text-sm font-semibold leading-6 font-p text-seasalt" @click="open = !open">
                                La Mairie
                                <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="#FAFAFA"
                                    aria-hidden="true">
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
                                class="absolute -left-8 z-50 top-full mt-3 max-w-md w-44 overflow-hidden bg-seasalt border-2 border-carribean shadow-lg ring-1 ring-gray-900/5"
                                x-ref="panel" @click.away="open = false">
                                <div class="p-2 pl-5 ">
                                    <div
                                        class="group relative flex gap-x-6 py-2 text-sm leading-6 border-b-2 border-transparent hover:transition-all hover:border-carribean">
                                        <div class="flex-auto">
                                            <a href="{{ route('nos-membres') }}" class="block font-semibold text-smocky-black ">
                                                Conseil municipal
                                                <span class="absolute inset-0"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="group relative flex gap-x-6 py-2 text-sm leading-6 border-b-2 border-transparent hover:transition-all hover:border-carribean">
                                        <div class="flex-auto">
                                            <a href="#" class="block font-semibold text-gray-900">
                                                Délibérations
                                                <span class="absolute inset-0"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="group relative flex gap-x-6 py-2 text-sm leading-6 border-b-2 border-transparent ">
                                        <div class="flex-auto">
                                            <a href="#" class="block font-semibold text-gray-900">
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
                                class="flex text-blaitems-center gap-x-1 text-sm font-semibold leading-6 font-p text-white"
                                @click="open = !open">
                                Le Village
                                <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="#FAFAFA"
                                    aria-hidden="true">
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
                                class="absolute -left-8 top-full z-50 mt-3 max-w-md w-44 overflow-hidden bg-seasalt border-2 border-carribean shadow-lg ring-1 ring-gray-900/5"
                                x-ref="panel" @click.away="open = false">
                                <div class="p-2 pl-5">
                                    <div
                                        class="group relative flex gap-x-6 py-2 text-sm leading-6 border-b-2 border-transparent hover:transition-all hover:border-carribean">
                                        <div class="flex-auto">
                                            <a href="#" class="block font-semibold text-gray-900">
                                                Actualités
                                                <span class="absolute inset-0"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="group relative flex gap-x-6 py-2 text-sm leading-6 border-b-2 border-transparent hover:transition-all hover:border-carribean">
                                        <div class="flex-auto">
                                            <a href="{{route('nos-associations') }}" class="block font-semibold text-gray-900">
                                                Associations
                                                <span class="absolute inset-0"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="group relative flex gap-x-6 py-2 text-sm leading-6 border-b-2 border-transparent">
                                        <div class="flex-auto">
                                            <a href="#" class="block font-semibold text-gray-900">
                                                Numéros utiles
                                                <span class="absolute inset-0"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="#"
                            class="text-sm font-semibold leading-6 font-p  block py-2 pr-4 pl-3 text-seasalt border-b-2 border-transparent hover:border-b-2 hover:border-seasalt hover:transition-all">Contact</a>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
    <div class="shapedividers_com-7249 h-40 relative z-40"></div>
</div>