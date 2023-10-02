<body class="bg-seasalt">
    <header>
        @include('home._partials.header-page')
    </header>

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-seasalt antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue ">
                <h1 class="mb-12 text-3xl font-bold font-h1 uppercase text-center leading-tight  lg:text-4xl">
                    {{ $article->title }}
                </h1>
                <div class="font-p mb-5 leading-7 flex justify-between">
                    <div><span class="border-b-2 border-carribean">Date  </span>: {{ $article->date }}</div>
                    <div><span class="border-b-2 border-carribean">Lieu </span>: {{ $article->location }}</div>
                </div>
                <div class="font-p mb-10">
                    
                 </div>
                <p class="mb-10 font-p leading-7">{{ $article->content }}</p>
                <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}">
            </article>

        </div>
    </main>

</body>
