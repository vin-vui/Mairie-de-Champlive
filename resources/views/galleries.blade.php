{{-- <x-guest-layout>

    <body class="mx-24 bg-seasalt">
        <div class="relative mt-44 ">
            <h1 class="shadow_text font-h1 text-center text-3xl mb-24">
                Rubrique souvenirs
            </h1>
        </div>


        <div class=" flex  flex-col p-5 md:flex-row md:flex-wrap md:justify-center ">
            @foreach ($galleries as $gallery)
                    <div class="flex mb-8 mx-auto w-[20rem] flex-wrap md:m-5">
                            <img class="block rounded-lg object-cover shadow-lg shadow-carribean/50"
                                src="{{ Storage::url($gallery->image) }}" alt="{{ $gallery->name }}" />
                    </div>
                
            @endforeach
        </div>
</x-guest-layout> --}}
<x-guest-layout>
    <body class="mx-24 bg-seasalt">
        <div class="relative mt-44 ">
            <h1 class="shadow_text font-h1 text-center text-3xl mb-24">
                Rubrique souvenirs
            </h1>
        </div>

        <!-- Pop-up div -->
        <div x-data="{ open: false, img: '' }">
            <div x-show="open" class="fixed top-60 z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75" aria-hidden="true"></div>

                    <!-- Pop-up content -->
                    <div class="inline-block align-bottom bg-white border-2 border-gray-300 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                        <div class="relative">
                            <img :src="img" class="w-full h-auto" />
                            <!-- Close button -->
                            <button @click="open = false" type="button" class="absolute top-0 right-0 mt-3 mr-3 inline-flex justify-center rounded-md shadow-sm px-4 py-2 text-base  font-medium sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm opacity-75">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 16"><path fill="none" stroke="#fafafa" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m11.25 4.75l-6.5 6.5m0-6.5l6.5 6.5"/></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col p-5 md:flex-row md:flex-wrap md:justify-center ">
                @foreach ($galleries as $gallery)
                    <div class="flex mb-8 mx-auto w-[20rem] flex-wrap md:m-5">
                        <img @click="open = true; img = '{{ Storage::url($gallery->image) }}'" class="block rounded-lg object-cover shadow-lg shadow-carribean/50"
                            src="{{ Storage::url($gallery->image) }}" alt="{{ $gallery->name }}" />
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</x-guest-layout>
