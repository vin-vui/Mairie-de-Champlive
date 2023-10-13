<x-guest-layout>

    <body class="bg-seasalt">
        <main class="relative mt-44 ">
            <h1 class="shadow_text font-h1 text-center text-3xl mb-24 ">
                Services alentours
            </h1>

            <div class="flex flex-wrap justify-center mx-6">
                @foreach ($services as $service)
                    <div class="bg-seasalt w-96 my-8 lg:mx-16 flex flex-col rounded-xl shadow-lg shadow-carribean border-2 border-carribean">
                        <div class="mx-10 my-5">
                            <div class="font-h2 text-carribean font-semibold  ">
                                {{ $service->name }}
                            </div>
                            <div>
                                {{ $service->address }}
                                <div>
                                    {{ $service->cp }}
                                    {{ $service->city }}
                                </div>
                            </div>
                            <div class="mt-3" >
                                {{ $service->phone }}
                            </div>
                            <div class="">
                                {{ $service->mail }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>
    </body>
</x-guest-layout>
