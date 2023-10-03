<x-guest-layout>
<body class="bg-seasalt ">
    
    <main class="mx-24">
        <h1 class="shadow_text font-h1 text-center text-3xl mb-24" >Actualités du village</h1>

    <div class="mx-auto mt-24 grid max-w-lg gap-5 lg:max-w-none lg:grid-cols-3">
            @foreach ($articles as $article)
                <div class="flex flex-col mx-5 my-5 overflow-hidden rounded-lg shadow-xl shadow-carribean/50 border-2 border-carribean hover:scale-95">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="{{ Storage::url($article->image) }}"
                            alt="{{ $article->title }}">
                    </div>
                    <div class="flex flex-1 flex-col justify-between bg-white p-6">
                        <div class="flex-1">
                            <div class="mt-2 block">
                                <a href="{{ route('article', $article->id) }}" class="text-xl font-semibold text-gray-900">{{ $article->title }}</a>
                                <p class="line-clamp-[7] mt-3 text-base text-smocky-black font-p">{{ $article->content }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>
    </main>

    <footer>
        @include('home._partials.footer-page')
    </footer>

</body>
</x-guest-layout>