<x-guest-layout>

    <body class="">
        <div class="relative mt-44 lg:my-32">
            <h1 class="shadow_text font-h1 text-center text-3xl mb-24">
                Conseil municipal
            </h1>
        </div>

        <div class="flex flex-col justify-center mx-auto">
            <div class="flex flex-col justify-center mx-auto">
                @if ($mayor)
                    <img class="object-cover w-52 border-2 border-carribean rounded-xl shadow-lg shadow-carribean"
                        src="{{ $mayor->image != null ? Storage::url($mayor->image) : url('image/avatar-default.svg') }}">
                    <div class="text-center my-3 font-p">
                        <div>{{ $mayor->position }}
                        </div>
                        <div class="mt-3">{{ $mayor->firstname }} {{ $mayor->lastname }}
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <div class="flex mt-12">
            <div class="flex flex-col justify-center mx-auto lg:flex-row">
                <div class="flex flex-col mx-16 mb-24 lg:mb-12">
                    @if ($firstassistant)
                        <img class="object-cover w-52 border-2 border-carribean rounded-xl shadow-lg shadow-carribean"
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
                <div class="flex flex-col mx-16">
                    @if ($secondassistant)
                        <img class="object-cover w-52 border-2 border-carribean rounded-xl shadow-lg shadow-carribean"
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

        <div class="flex justify-center flex-wrap lg:w-10/12 mx-auto ">
            @foreach ($advisors as $advisor)
                <div class="flex mx-16 mt-12  ">
                    @if ($advisor)
                        <div class="flex flex-col ">
                            <img class="w-52 border-2 border-carribean rounded-xl shadow-lg shadow-carribean"
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
</x-guest-layout>
