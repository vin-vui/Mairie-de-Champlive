<x-app-layout>
    <div class="m-10">
        <div class="pb-3 flex justify-end items-center">
            <a class="border-2 border-carribean bg-carribean text-seasalt rounded-xl p-2 px-5 hover:text-carribean hover:font-bold hover:bg-seasalt" href="{{ route('articles.index') }}">
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
            <div class="col-lg-12 border-2 border-carribean p-4 rounded-xl bg-seasalt text-smocky-black drop-shadow-2xl">
                <div class="row">
                    <div class="pb-5">
                        <div class="flex flex-col">
                            <label class="font-bold text-lg">Titre</label>
                            {{ $article->title}}
                        </div>
                    </div>
                    <div class="pb-5">
                        <div class="flex flex-col">
                            <label class="font-bold text-lg">Description</label>
                            {{ $article->content }}
                        </div>
                    </div>
                    <div class="pb-5">
                        <div class="flex flex-col">
                            <label class="font-bold text-lg">Date</label>
                            {{ $article->date }}
                        </div>
                    </div>
                    <div class="pb-5">
                        <div class="flex flex-col">
                            <label class="font-bold text-lg">Lieu</label>
                            {{ $article->location }}
                        </div>
                    </div>
                    <div class="pb-5">
                        <div class="flex flex-col">
                            <label class="font-bold text-lg">Image </label>
                            <img src="{{ Storage::url($article->image) }}"> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>