<x-guest-layout>

    <body class="mx-24 bg-seasalt">

        <div class="relative mt-44 ">
            <h1 class="shadow_text font-h1 text-center text-3xl mb-24">
                Le journal
            </h1>
        </div>

        <div class="mx-10 md:flex md:flex-wrap md:justify-center ">
            @foreach ($newspapers as $newspaper)
                <div class="flex border-2 border-carribean rounded-lg mb-8 p-5 md:mx-8  md:w-96 shadow-lg shadow-carribean/50 ">

                    <img class="w-32 mr-6" src="/image/news.png" alt="Icône d'un journal de presse">
                    <div class="flex flex-col content-between">
                        <div class="font-h2 uppercase font-semibold mb-8 mt-5 text-sm">{{ $newspaper->title }}</div>
                        <div class="mx-auto">
                            <a href="{{ url(Storage::url($newspaper->file)) }}" type="button" target="_blank"
                                class="bg-mint p-1 px-1.5 rounded-xl text-seasalt font-p mx-auto hover:scale-110 border-2 border-transparent">Voir le journal</a>
                        </div>

                    </div>

                </div>
            @endforeach
        </div>


    </body>
</x-guest-layout>
