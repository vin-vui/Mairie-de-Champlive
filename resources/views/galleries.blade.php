<x-guest-layout>

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
</x-guest-layout>
