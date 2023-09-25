<x-app-layout>
    <div class="m-10">
        <div class="pb-8 flex justify-around items-center">
            <h2 class="font-bold text-lg text-smocky-black">CRUD Membres du conseil </h2>
            <a class=" mt-10 border-4 border-carribean bg-carribean text-peach rounded-xl p-2" href="{{ route('members.index') }}">
                Retour</a>
        </div>
        <div class="row mt-2">
            <div class="col-lg-12 italic pb-4 text-white">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
            </div>
            <div class="col-lg-12 border-4 border-gray-800 p-4 rounded-xl bg-seasalt text-smocky-black drop-shadow-2xl">
                <div class="row">
                    <div class="pb-5">
                            <label class="font-bold text-lg">Nom</label>
                            {{ $member->lastname}}
                    </div>
                    <div class="pb-5">
                            <label class="font-bold text-lg">Prénom</label>
                            {{ $member->firstname }}
                    </div>
                    <div class="pb-5">
                            <label class="font-bold text-lg">Fonction</label>
                            {{ $member->position }}
                    </div>
                    <div class="pb-5">
                            <label class="font-bold text-lg">Photo</label>
                            <img src="{{ Storage::url($member->photo) }}"> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>