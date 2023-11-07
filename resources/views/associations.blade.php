<x-guest-layout>

    <body class="mx-24 bg-seasalt">

        <div class="relative mt-44 ">
            <h1 class="shadow_text font-h1 text-center text-3xl mb-24">
                Associations
            </h1>
        </div>

        <section class="bg-seasalt mx-12 md:mx-32 ">
            @foreach ($associations as $association)
                <div
                    class="grid max-w-screen-lg px-4 py-8 mx-auto my-24 lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 border-2 border-carribean rounded-xl shadow-xl shadow-carribean/50">
                    <div class="mr-auto place-self-center lg:col-span-7">
                        <h1 class="max-w-2xl mb-4 text-4xl font-semibold tracking-tight leading-none font-h2">
                            {{ $association->name }}</h1>
                        <div class="max-w-2xl mb-6 font-light text-base text-gray-500 lg:mb-8 font-p">
                            {{ $association->presentation }}</div>
                        <div
                            class="inline-flex items-center justify-center py-3 text-base font-medium text-gray-900 font-p">
                            <svg class="mr-4" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 16 16">
                                <path fill="#00000" fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42a18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>
                            {{ $association->contact }}
                        </div>
                    </div>
                    <div class="hidden lg:mt-0 lg:col-span-5 lg:flex ">
                        <img class="w-96 lg:rounded-lg" src="{{ Storage::url($association->image) }}"
                            alt="{{ $association->name }}">
                    </div>
                </div>
            @endforeach

        </section>
    </body>


</x-guest-layout>
