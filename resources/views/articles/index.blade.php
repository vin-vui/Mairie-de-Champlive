<x-app-layout>

    <div class="m-10">
        <div class="pb-3 flex justify-end items-center bg-seasalt">
            <a class="flex justify-center border-2 border-carribean bg-carribean text-seasalt rounded-xl p-2 px-5 hover:text-carribean hover:font-bold hover:bg-seasalt"
                href="{{ route('articles.create') }}">
                Ajouter une actualité</a>
        </div>
        <div class="row mt-2">
            <div class="col-lg-12 italic pb-4 text-smocky-black">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
            </div>
            <div class=" relative overflow-x-auto shadow-md sm:rounded-lg border-2 border-carribean drop-shadow-2xl ">
                <table class=" w-full text-sm text-left text-gray-500 ">
                    <thead class="bg-carribean text-xs text-seasalt uppercase">
                        <tr class="bg-carribean">
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">No
                                    {{-- <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1"
                                            aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                            <path
                                                d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                        </svg></a> --}}
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Nom
                            </th>
                            </th>
                            <th scope="col" class="px-6 py-3 ">
                                Description
                            </th>
                            <th scope="col" class="px-16 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-16 py-3">
                                Lieu
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($articles as $article)
                            <tr class="bg-seasalt border-b  " x-data="{ open: false }">
                                <td scope="row" class="px-6 py-4">{{ $article->id }}</td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $article->title }}</td>
                                <td class="px-6 py-4">{{ $article->content }}</td>
                                <td class="px-16 py-4">{{ $article->date }}</td>
                                <td class="px-16 py-4">{{ $article->location }}</td>

                                <td class="px-6 py-4 flex">
                                    <a class="font-medium  hover:underline pr-2"
                                        href="{{ route('articles.show', $article) }}">
                                        <svg class="bg-green-600 rounded-lg p-0.5 hover:scale-105" xmlns="http://www.w3.org/2000/svg"
                                            width="28" height="28" viewBox="0 0 24 24">
                                            <path fill="#fafafa"
                                                d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3c1.641 0 3-1.358 3-3c0-1.641-1.359-3-3-3z" />
                                            <path fill="#fafafa"
                                                d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316l-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5c-.504 1.158-2.578 5-7.926 5z" />
                                        </svg></a>

                                    <a class="font-medium hover:underline pr-2"
                                        href="{{ route('articles.edit', $article) }}">
                                        <svg class="bg-blue-600 rounded-lg p-0.5 hover:scale-105" xmlns="http://www.w3.org/2000/svg"
                                            width="28" height="28" viewBox="0 0 24 24">
                                            <path fill="#fafafa"
                                                d="m19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Z" />
                                        </svg></a>


                                    <form action="{{ route('articles.destroy', $article) }}" method="POST">

                                        @csrf
                                        @method('DELETE')

                                        <button type="button" @click="open = true"
                                            class="font-medium text-red-600 hover:underline">
                                            <svg class="bg-red-600 rounded-lg p-0.5 hover:scale-105"
                                                xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 24 24">
                                                <path fill="#fafafa"
                                                    d="M7 21q-.825 0-1.413-.588T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.588 1.413T17 21H7Zm2-4h2V8H9v9Zm4 0h2V8h-2v9Z" />
                                            </svg></button>

                                        <div x-show="open" @click.outside="open = false"
                                            class="fixed top-60 left-1/3 z-50" x-cloak>
                                            <div
                                                class="bg-white p-10 rounded-lg shadow-lg border-carribean border-2 shadow-carribean ">
                                                <h2 class="text-lg text-carribean font-bold mb-4">Confirmation de
                                                    suppression</h2>
                                                <p class="mb-4 text-smocky-black">Êtes-vous sûr de vouloir supprimer ?
                                                </p>
                                                <div class="flex justify-end">
                                                    <button type="button"
                                                        class="text-smocky-black mr-2 border-2 border-transparent rounded-lg p-1 hover:border-gray-200 hover:bg-gray-200 "
                                                        @click.prevent="open = false">Annuler</button>
                                                    <button type="submit" @click="open = false"
                                                        class="font-medium border-2 border-transparent rounded-lg p-1 text-red-600 hover:text-seasalt hover:border-red-600 hover:bg-red-600">Supprimer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
