<x-app-layout>
    <div class="m-10">
        <div class="pb-8 flex justify-around items-center">
            <h2 class="font-bold text-lg text-smocky-black">CRUD Service</h2>
            <a class=" mt-10 border-2 border-carribean bg-carribean text-seasalt rounded-xl p-2 px-5 hover:text-carribean hover:font-bold hover:bg-seasalt"
                href="{{ route('services.index') }}">
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
            <div class="col-lg-12 border-2 border-gray-800 p-4 rounded-xl bg-seasalt text-smocky-black drop-shadow-2xl">
                <div class="row">
                    <div class="pb-5 flex flex-col">
                        <label class="font-bold text-lg">Nom du service</label>
                        {{ $service->name }}
                    </div>
                    <div class="pb-5 flex flex-col">
                        <label class="font-bold text-lg">Adresse</label>
                        {{ $service->address }}
                    </div>
                    <div class="pb-5 flex flex-col">
                        <label class="font-bold text-lg">Code postal</label>
                        {{ $service->cp }}
                    </div>
                    <div class="pb-5 flex flex-col">
                        <label class="font-bold text-lg">Ville</label>
                        {{ $service->city }}
                    </div>
                    <div class="pb-5 flex flex-col">
                        <label class="font-bold text-lg">Email</label>
                        {{ $service->mail }}
                    </div>
                    <div class="pb-5 flex flex-col">
                        <label class="font-bold text-lg">Téléphone</label>
                        {{ $service->phone }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
