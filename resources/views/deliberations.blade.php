<x-guest-layout>

    <body class="mx-24 bg-seasalt">
        <div class="relative mt-44 ">
            <h1 class="shadow_text font-h1 text-center text-3xl mb-24">
                Délibérations du conseil
            </h1>
        </div>
        <div class="flex flex-wrap justify-center ">
            @foreach ($deliberations as $deliberation)
                <div
                    class="bg-mint/70 w-96 md:mx-10 lg:mx-24 my-12 flex rounded-xl shadow-xl shadow-carribean/50 border-2 border-carribean">
                    <div>
                        <img class="w-40 rounded-l-xl" src="image/reunion.png" alt="">
                    </div>
                    <div
                        class="flex flex-col justify-center mx-auto text-seasalt font-p font-semibold w-24 text-center leading-8 ">
                        Scéance du {{ $deliberation->date }}
                        <a href="{{ url(Storage::url($deliberation->file)) }}" type="button" target="_blank"
                            class="mx-auto py-0.5 mt-2 bg-carribean text-sm rounded-lg w-16 text-seasalt font-p hover:scale-110 border-2  border-transparent">Voir</a>

                    </div>
                </div>
            @endforeach
        </div>

    </body>
</x-guest-layout>
