<x-guest-layout>

    <body class="bg-seasalt  ">
        <div class="relative inset-y-52">
            <h1 class="shadow_text font-h1 text-center text-3xl mb-24  ">
                Délibérations du conseil
            </h1>
            <div class="flex flex-wrap justify-center mb-36 ">
                @foreach ($deliberations as $deliberation)
                    <div
                        class="bg-mint/70 w-96 mx-12 my-12 flex rounded-xl shadow-xl shadow-carribean/50 border-2 border-carribean">
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

    </body>
</x-guest-layout>
