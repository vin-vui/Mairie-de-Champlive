<x-guest-layout>

    <body class="bg-seasalt">
        <main class="mx-24 relative my-56">
            <h1 class="shadow_text font-h1 text-center text-3xl mb-24 ">
                Services alentours
            </h1>

            <div class="mt-24 grid max-w-lg gap-5 lg:max-w-none lg:grid-cols-3">
                @foreach ($services as $service)
                    <div
                        class="flex mx-12 flex-wrap mb-10 font-p font-semibold border-2 border-carribean rounded-xl shadow-carribean shadow-lg">
                        <div class="flex flex-col mx-10 ">
                            <div class="font-h2 text-carribean font-semibold my-5 ">
                                {{ $service->name }}
                            </div>
                            <div>
                                {{ $service->address }}
                                <div>
                                    {{ $service->cp }}
                                    {{ $service->city }}
                                </div>
                            </div>
                            <div>
                                {{ $service->phone }}
                            </div>
                            <div class="mb-5">
                                {{ $service->mail }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>
    </body>
</x-guest-layout>
