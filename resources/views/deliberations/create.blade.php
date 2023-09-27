<x-app-layout>
    <div class="m-10">
        <div class="pb-8 flex justify-around items-center ">
            <h2 class="font-bold text-lg text-smocky-black">CRUD Délibération
            </h2>
            <a class=" mt-10 border-4 border-carribean bg-carribean text-seasalt rounded-xl p-2"
                href="{{ route('articles.index') }}">
                Retour</a>
        </div>
        <div class="row mt-2">
            <div class="col-lg-12 italic pb-4 text-smocky-black">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
            </div>
            <div
                class=" text-smocky-black col-lg-12 border-2 border-carribean  p-4 rounded-xl bg-seasalt drop-shadow-2xl">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Il y a un problème avec votre enregistrement.<br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('deliberations.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                            <label class="font-bold text-lg">Titre :</label>
                            <input type="text" name="title" class="form-control w-full"
                                placeholder="Titre de la délibération">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                        <label class="font-bold text-lg">Date :</label>
                            <input class="form-control w-full" name="date" placeholder="Date"></input> 
                    </div>
                    <div class="form-group py-2">
                        <label class="font-bold text-lg" for="image">Image :</label>
                        <input type="file" name="file" id="file" class="form-control-file">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit"
                            class="border-4 border-carribean bg-carribean  text-seasalt rounded-xl p-2 px-5">Envoyer</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</x-app-layout>