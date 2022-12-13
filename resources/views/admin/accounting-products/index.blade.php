<x-admin-space-layout>

    <div class="p-4 rounded-lg shadow-xs">        
        <div class="flex p-2">
            <div class="w-4/5">
                Liste
            </div>
            <div class="text-right w-1/5">
                <x-form.button icon="plus-sm" primary class="" href="{{ route('accounting-product.create') }}">Ajouter</x-form.button>
            </div>

        </div>
        <table class="p-2 w-full text-sm text-left text-gray-500    ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200      ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        account
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nom
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Type
                    </th>
                    <th scope="col" class="px-6 py-3">
                        action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productCountable as $productCountable)
                    <tr class="bg-white border-b      ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900    whitespace-nowrap">
                            {{ $productCountable->account }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900    whitespace-nowrap">

                            {{ $productCountable->name }}

                        </th>

                        <th scope="row" class="px-6 py-4 font-medium text-gray-900    whitespace-nowrap">
                            @if ($productCountable->type == 'income')
                                <p>produit</p>
                            @else
                                <p>charge</p>
                            @endif
                        </th>
                        <th scope="row"
                            class="flex space-x-4 px-6 py-4 font-medium text-gray-900    whitespace-nowrap">
                            <a href="{{ route('accounting-product.edit', $productCountable->id) }}"
                                class="text-blue-800">Editer</a>
                            <p class="text-red-800 cursor-pointer" @click="showModalConfirm = true">Supprimer</p>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin-space-layout>
