<x-app-layout>

    <div class="m-10">
        <div class="pb-8 flex justify-around items-center bg-peach">
            <h2 class="font-bold text-lg text-smocky-black">CRUD Membres du conseil</h2>
            <a class=" mt-10 border-4 border-carribean bg-carribean text-peach rounded-xl p-2" href="{{ route('members.create') }}">
                Ajouter un membre</a>
            <a class=" mt-10 border-4  border-carribean bg-carribean text-peach rounded-xl p-2" href="{{ route('dashboard') }}">
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
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Prénom
                            </th>
                            <th scope="col" class="px-16 py-3">
                                Fonction
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                  
                    <tbody>
                        @foreach ($members as $member)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td scope="row" class="px-6 py-4">{{ $member->id }}</td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $member->lastname }}</td>
                                <td class="px-6 py-4">{{ $member->firstname }}</td>
                                <td class="px-16 py-4">{{ $member->position }}</td>
                

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <form action="{{ route('members.destroy', $member) }}" method="POST">

                                        <a class="font-medium text-green-600 dark:text-green-500 hover:underline pr-2"
                                            href="{{ route('members.show', $member) }}">Voir</a>

                                        <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline pr-2"
                                            href="{{ route('members.edit', $member) }}">Editer</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                            class="font-medium text-red-600 dark:text-red-500 hover:underline">Supprimer</button>
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
