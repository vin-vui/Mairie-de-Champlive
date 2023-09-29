<x-guest-layout>


    {{-- News --}}
    <div class="relative bg-mint px-6 pb-20 pt-16 lg:px-8 lg:pb-28 lg:pt-24">
        <div class="absolute inset-0">
            <div class="h-1/3 bg-mint sm:h-2/3"></div>
        </div>
        <div class="relative mx-auto max-w-7xl">
            <div class="text-center">
                <h2 class="text-3xl font-bold font-h1 text-seasalt sm:text-4xl">
                    <span class="border-b-4 border-seasalt">Les
                        actualités du village</span>
                </h2>
            </div>
            <div class="mx-auto mt-24 grid max-w-lg gap-5 lg:max-w-none lg:grid-cols-3">
                @foreach ($articles as $article)
                    <div class="flex flex-col overflow-hidden rounded-lg shadow-2xl hover:scale-95">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="{{ Storage::url($article->image) }}"
                                alt="{{ $article->title }}">
                        </div>
                        <div class="flex flex-1 flex-col justify-between bg-white p-6">
                            <div class="flex-1">
                                <a href="#" class="mt-2 block">
                                    <p class="text-xl font-semibold text-gray-900">{{ $article->title }}</p>
                                    <p class="mt-3 text-base text-smocky-black font-p">{{ $article->content }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="shapedividers_com-5924 h-32"></div>

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

    <div class="shapedividers_com-7391 h-32"></div>

    <footer>
        @include('home._partials.footer')
    </footer>

</x-guest-layout>
