<x-app-layout>
    <x-slot name="header">

                {{ __($productCountable->name) }}

    </x-slot>
    <x-auth-validation-errors :errors="$errors"/>

    <div class="p-4 bg-white rounded-lg shadow-xs">

            <form action="{{ route('accounting-product.update',$productCountable->id) }}" method="POST" class="space-y-4">
                @csrf
                <x-label :value="__('Compte')"/>
                    <input type="text" name="account" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" placeholder="Numero account"value="{{ old('account',$productCountable->account) }}">
                    <x-label :value="__('Nom')"/>
                    <input type="text" name="name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" placeholder="nom"value="{{ old('name',$productCountable->name) }}">
                    <x-label :value="__('Type')"/>
                    <select name="type" id=""  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                        <option value="income">Produit</option>
                        <option value="expense">Charge</option>
                    </select>
               <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring">Modifier</button>
            </form>

    </div>

</x-app-layout>
