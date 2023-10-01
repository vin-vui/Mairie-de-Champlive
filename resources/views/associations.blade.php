<body class="bg-seasalt">
    <header>
        @include('home._partials.header-page')
    </header>

    <h1 class="shadow_text font-h1 text-center text-3xl mb-24 ">Associations</h1>

    <div class="flex flex-col ">
        @foreach ($associations as $association)
            <div class="flex justify-center">
                <div class="flex flex-row w-8/12 mb-24 text-smocky-black border-2 border-carribean rounded-xl shadow-lg shadow-carribean">
                    <div class="w-4/12">
                        <img class="bg-cover rounded-l-xl" src="{{ Storage::url($association->image) }}" alt="{{ $association->name }}">
                    </div>
                    <div class="ml-8 my-6">
                        <h3 class="font-h2 mb-4 text-lg underline text-center">{{ $association->name }}</h3>
                        <p class="font-p">{{ $association->presentation }}</p>
                        <div class="mt-16">{{ $association->contact }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <footer>
        @include('home._partials.footer-page')
    </footer>
</body>
