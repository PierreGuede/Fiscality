<x-app-layout>
    <x-slot name="header">

                {{ __($pack->name) }}

    </x-slot>
    <div class="p-4 bg-white rounded-lg shadow-xs">

            <form action="{{ route('pack.update',$pack->id) }}" method="POST" class="space-y-4">
                @csrf
                <x-label :value="__('Nom')"/>
                    <input type="text" name="name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" placeholder="Numero account" value="{{ old('name',$pack->name) }}"">
                    <x-label :value="__('nombre maximum entreprise')"/>
                    <input type="text" name="max" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" placeholder="nom" value="{{ old('name',$pack->max) }}"">
                    <x-label :value="__('description')"/>
                    <input type="text" name="description" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" placeholder="montant" value="{{ old('name',$pack->description) }}"">

                <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring">Modifier</button>
            </form>

    </div>

</x-app-layout>
