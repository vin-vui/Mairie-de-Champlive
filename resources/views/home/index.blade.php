<x-guest-layout>
    <div class="">
        <img class="-mt-40 h-[45rem] w-full object-cover " src="image/header2.jpg"
            alt="Photo du ruisseau de champlive">
        <div class="shapedividers_com-6697 h-32 "></div>
    </div>
    <div class="mx-36">
        <h1 class="shadow_text flex justify-center text-smocky-black font-h1 text-3xl mt-10 ">
            Mairie de CHAMPLIVE
        </h1>
        <div class="flex justify-around my-32">
            <div class="">
                <div class="flex flex-wrap ">
                    <img class="w-48 mr-36" src="image/blason.png" alt="Blason du village de Champlive">
                    <img class="w-96 rounded-3xl" src="image/photo_1.jpg" alt="Photographie de la mairie">
                    <img class=" w-1/2 rounded-3xl mt-16" src="image/photo_2.jpg" alt="Photographie du village">
                </div>
            </div>

            <div class="flex mt-32">
                Champlive, un petit village du Doubs, en Bourgogne-Franche-Comté, offre une évasion
                parfaite de l'agitation urbaine. Niché dans une vallée verdoyante, il séduit par ses paysages
                enchanteurs, ses maisons en pierre, et son ambiance chaleureuse. Les amoureux de la nature y
                trouveront des sentiers de randonnée magnifiques, tandis que les curieux pourront explorer son riche
                passé historique. Champlive est une invitation à la tranquillité et à l'authenticité de la vie à la
                campagne française.
            </div>
        </div>
    </div>

    

    {{-- News --}}

    <div class="shapedividers_com-5351 h-40"></div>
    <div class="relative bg-carribean px-6 pb-20 pt-16 lg:px-8 lg:pb-28 lg:pt-24 z-10 ">
        <div class="relative mx-auto max-w-7xl">
            <div class="text-center">
                <h2 class="text-3xl font-bold font-h1 text-seasalt sm:text-4xl">
                    <span class="border-b-4 border-seasalt">Les
                        actualités du village</span>
                </h2>
            </div>
            <div class="mx-auto mt-24 grid max-w-lg gap-5 lg:max-w-none lg:grid-cols-3">
                @foreach ($articles as $article)
                    <div class="flex flex-col overflow-hidden rounded-lg shadow-2xl hover:scale-95 transition duration-300">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="{{ Storage::url($article->image) }}"
                                alt="{{ $article->title }}">
                        </div>
                        <div class="flex flex-1 flex-col justify-between bg-seasalt p-6 ">
                            <div class="flex-1">
                                <a href="{{ route('article', $article->id) }}" class="mt-2 block">
                                    <p class="text-xl font-semibold text-gray-900">{{ $article->title }}</p>
                                    <p class="line-clamp-4 mt-3 text-base text-smocky-black font-p ">{{ $article->content }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <div class="shapedividers_com-1250 h-32"></div>

    {{-- Deliberation --}}
    <div class="bg-seasalt mt-16">
        <a href="#" class="flex justify-center font-h1 font-bold text-3xl ">
            <span class="shadow_text border-b-4 border-transparent hover:border-carribean mb-5">Délibérations du
                conseil</span>
        </a>

        <div class="bg-seasalt flex flex-wrap justify-center ">
            @foreach ($deliberations as $deliberation)
                <div class="bg-mint/70 w-96 mx-24 my-12 flex rounded-xl shadow-2xl border-2 border-carribean">
                    <div>
                        <img class="w-40 rounded-l-xl" src="image/reunion.png" alt="">
                    </div>
                    <div
                        class="flex flex-col justify-center mx-auto text-seasalt font-p font-semibold w-24 text-center leading-8 ">
                        Scéance du {{ $deliberation->date }}
                        <button type="button"
                            class="mx-auto py-0.5 mt-2 bg-carribean text-sm rounded-lg w-16 text-seasalt font-p hover:scale-110 border-2  border-transparent">Voir</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-guest-layout>
