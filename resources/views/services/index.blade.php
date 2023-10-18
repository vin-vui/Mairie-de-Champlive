<x-app-layout>

    <div class="m-10">
        <div class="pb-8 flex justify-around items-center bg-seasalt">
            <h2 class="font-bold text-lg text-smocky-black">CRUD Services</h2>
            <a class=" mt-10 border-2 border-carribean bg-carribean text-seasalt rounded-xl p-2 px-5 hover:text-carribean hover:font-bold hover:bg-seasalt"
                href="{{ route('services.create') }}">
                Ajouter un service</a>
        </div>
        <div class="row mt-2">
            <div class="col-lg-12 italic pb-4 text-smocky-black">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg border-2 border-carribean drop-shadow-2xl">
                <table class="w-full text-sm text-left text-gray-500 ">
                    <thead class="text-xs text-seasalt uppercase bg-carribean ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">No
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1"
                                            aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                            <path
                                                d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                        </svg></a>

                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Nom
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Adresse
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Code postal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Ville
                            </th>
                            <th scope="col" class="px-16 py-3">
                                Email
                            </th>
                            <th scope="col" class="py-3">
                                Téléphone
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($services as $service)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" x-data="{ open: false }">
                                <td scope="row" class="px-6 py-4">{{ $service->id }}</td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $service->name }}</td>
                                <td class="px-6 py-4">{{ $service->address }}</td>
                                <td class="px-6 py-4">{{ $service->cp }}</td>
                                <td class="px-6 py-4">{{ $service->city }}</td>
                                <td class="px-10 py-4">{{ $service->mail }}</td>
                                <td class="py-4">{{ $service->phone }}</td>

                                <td class="px-6 py-4 ">
                                    <form action="{{ route('services.destroy', $service) }}" method="POST">

                                        <a class="font-medium text-green-600 dark:text-green-500 hover:underline pr-2"
                                            href="{{ route('services.show', $service) }}">Voir</a>

                                        <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline pr-2"
                                            href="{{ route('services.edit', $service) }}">Editer</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="button" @click="open = true"
                                            class="font-medium text-red-600 hover:underline">Supprimer</button>

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
