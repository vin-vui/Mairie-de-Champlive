<x-guest-layout>

    <body>
        <div class="relative mt-56">
            <h1 class="shadow_text font-h1 text-center text-3xl">
                Conseil municipal
            </h1>
        </div>

        <div class="w-52 flex flex-col mx-auto mt-24">
            @if ($mayor)
                <img class="border-2 border-carribean rounded-xl shadow-lg shadow-carribean"
                    src="{{ Storage::url($mayor->image) }}" alt="{{ $mayor->firstname }} {{ $mayor->lastname }}">
                <div class="text-center my-3 font-p">
                    <div>{{ $mayor->position }}
                    </div>
                    <div class="mt-3">{{ $mayor->firstname }} {{ $mayor->lastname }}
                    </div>
                </div>
            @endif
        </div>


        <div class=" mt-24">
            <div class="flex justify-center ">
                <div class="flex flex-col mr-40 ">
                    @if ($firstassistant)
                        <img class="w-52 border-2 border-carribean rounded-xl shadow-lg shadow-carribean"
                            src="{{ $firstassistant->image != null ? Storage::url($firstassistant->image) : url('image/avatar-default.svg') }}"
                            alt="{{ $firstassistant->firstname }} {{ $firstassistant->lastname }}">
                        <div class="text-center my-3 font-p">
                            <div>{{ $firstassistant->position }}
                            </div>
                            <div class="mt-3">{{ $firstassistant->firstname }} {{ $firstassistant->lastname }}
                            </div>
                        </div>
                    @endif
                </div>
                <div class="flex flex-col ">
                    @if ($secondassistant)
                        <img class="w-52 border-2 border-carribean rounded-xl shadow-lg shadow-carribean"
                            src="{{ $secondassistant->image != null ? Storage::url($secondassistant->image) : url('image/avatar-default.svg') }}"
                            alt="{{ $secondassistant->firstname }} {{ $secondassistant->lastname }}">
                        <div class="text-center my-3 font-p">
                            <div>{{ $secondassistant->position }}
                            </div>
                            <div class="mt-3">{{ $secondassistant->firstname }} {{ $secondassistant->lastname }}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="flex justify-center flex-wrap w-10/12 mx-auto mb-56
        ">
            @foreach ($advisors as $advisor)
                <div class="flex mx-16 mt-24  ">
                    @if ($advisor)
                        <div class="flex flex-col ">
                            <img class="w-52 h-52 border-2 border-carribean rounded-xl shadow-lg shadow-carribean"
                                src="{{ $advisor->image != null ? Storage::url($advisor->image) : url('image/avatar-default.svg') }}">
                            <div class=" my-3 font-p text-center">
                                <div>{{ $advisor->position }}
                                </div>
                                <div class="mt-3">{{ $advisor->firstname }} {{ $advisor->lastname }}
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>

    </body>


    {{-- Est ce que c'est ça pour mettre une image par défaut si pas d'image ?? --}}
    {{-- src="{{ $mayor->image != null ? Storage::url($mayor->image) : url('image/avatar-default.svg') }}" alt="{{ $firstassistant->firstname }} {{ $firstassistant->lastname }}"> --}}

</x-guest-layout>
