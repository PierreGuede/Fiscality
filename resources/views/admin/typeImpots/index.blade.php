<x-app-layout>

    <div class="p-4 rounded-lg shadow-xs">
        <div class="flex p-2">
            <div class="w-4/5">
                Liste
            </div>
            <div class="text-right w-1/5">
                <x-form.button icon="plus-sm" primary class="" href="{{ route('typeImpot.create') }}">Ajouter</x-form.button>
            </div>
        </div>
        <table class="p-2 w-full text-sm text-left text-gray-500    ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200      ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nom
                    </th>

                    <th scope="col" class="px-6 py-3">
                        action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($typeImpot as $typeImpot)
                    <tr class="bg-white border-b      ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900    whitespace-nowrap">
                            {{ $typeImpot->name }}
                        </th>

                        <th scope="row"
                            class="flex space-x-4 px-6 py-4 font-medium text-gray-900    whitespace-nowrap">
                            <a href="{{ route('typeImpot.edit', $typeImpot->id) }}" class="text-blue-800">Editer</a>
                            <p class="text-red-800 cursor-pointer" @click="showModalConfirm = true">Supprimer</p>

                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
