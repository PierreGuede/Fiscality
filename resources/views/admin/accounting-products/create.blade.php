<x-app-layout>

    <div class=" p-4">
        <div class="flex justify-between items-center pb-3">
            <p class="text-2xl font-bold">Créer une base</p>
        </div>

        <form action="{{ route('accounting-product.store') }}" method="POST" class="space-y-4 p-4 max-w-lg" >
            @csrf
            <div class="space-y-4">
                <x-input class="w-full" for="account"
                type="number" id="account" name="account" label='Compte'
                placeholder="Compte" class="" required autofocus />
                <x-input class="w-full" for="name"
                type="text" id="name" name="name" label='Nom'
                placeholder="Nom" class="" required autofocus />
                <div class="mt-4">
                    <x-label for="name" :value="__('Type')"/>
                    <x-native-select label="Type"
                                     name="type"
                                     class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600">
                                     <option value="income">Produit</option>
                                     <option value="expense">Charge</option>
                    </x-native-select>
                </div>
            </div>
            <div class="flex gap-x-3 justify-end">
                <x-button type="button" variant="neutral" class="w-36" >   {{ __('Annuler') }} </x-button>
                <x-button type="submit" class="w-36" >   {{ __('Enregistrer') }} </x-button>
            </div>

        </form>
        <!--Footer-->



</div>

</x-app-layout>
