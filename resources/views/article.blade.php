<x-guest-layout>

<body class="bg-seasalt ">

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-seasalt antialiased ">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl relative mt-44 lg:my-32">
            <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue ">
                <h1 class="shadow_text font-h1 text-center text-3xl mb-24 uppercase">
                    {{ $article->title }}
                </h1>
                <div class="font-p mb-12 leading-7 flex justify-between flex-col md:flex-row">
                    <div><span class="border-b-2 border-carribean">Date  </span>: {{ $article->date }}</div>
                    <div><span class="border-b-2 border-carribean">Lieu </span>: {{ $article->location }}</div>
                </div>
                <p class="mb-10 font-p leading-7">{{ $article->content }}</p>
                <img class="" src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}">
            </article>
        </div>
    </main>
</body>

</x-guest-layout>