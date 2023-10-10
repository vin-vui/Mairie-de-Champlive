<x-guest-layout>
<body class="bg-seasalt ">
    <main class="relative my-32 lg:mx-24">
    <h1 class="shadow_text font-h1 text-center text-3xl mb-24 ">Associations</h1>

    <div class="flex flex-col justify-between ">
        @foreach ($associations as $association)
            <div class="flex justify-center ">
                <div class="flex flex-col lg:flex-row w-8/12 mb-24 text-smocky-black border-2 border-carribean rounded-xl shadow-lg shadow-carribean/60">
                    <div class="sm:w-4/12 sm:flex-shrink-0">
                        <img class="w-full max-h-96 object-cover rounded-t-xl lg:rounded-l-xl" src="{{ Storage::url($association->image) }}" alt="{{ $association->name }}">
                    </div>
                    <div class=" my-10 px-3">
                        <h3 class="font-h2 mb-4 text-lg underline text-center">{{ $association->name }}</h3>
                        <p class="font-p">{{ $association->presentation }}</p>
                        <div class="mt-16 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 16 16">
                                <path fill="#00000" fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42a18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>
                            {{ $association->contact }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</main>
</body>
</x-guest-layout>