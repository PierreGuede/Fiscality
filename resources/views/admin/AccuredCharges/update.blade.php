<x-admin-space-layout>

    <div class=" p-4">
        <div class="flex justify-between items-center pb-3">
            <p class="text-2xl font-bold">{{ __($accuredCharges->designation) }}</p>
        </div>

        <form action="{{route('accured-charges.update',$accuredCharges->id) }}" method="POST" class="space-y-4 p-4 max-w-lg" >
            @csrf
            <div class="space-y-2">
                <x-input class="w-full"  for="compte"
                type="number" id="compte" name="compte"  label='Compte' value="{{ old('compte',$accuredCharges->compte) }}" label='Nom du accuredCharges'
                placeholder="Nom du compte" class="" required autofocus />

                <x-input class="w-full" for="designation"
                type="text" id="designation" name="designation"  label='Nom de la provision' value="{{ old('designation',$accuredCharges->designation) }}"
                placeholder="Nom de la provision" class="" required autofocus />
                
                <div class="mt-4">
                    <x-label for="name" :value="__('Type')"/>
                    <x-native-select label="type"
                                     name="type"
                                     class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600">
                        <option value="expense_provisioned" @selected($accuredCharges->expense_provisioned)>Charges provisionnées</option>
                        <option value="personnal_provision" @selected($accuredCharges->personnal_provision)>Provisions sur charges de personnel</option>
                        <option value="provision" @selected($accuredCharges->provision)>provisions pour risque d'exploitation</option>
                    </x-native-select>
                </div>
            </div>
            <div class="flex gap-x-3 justify-end">
                <x-button type="button" variant="neutral" class="w-36" >   {{ __('Annuler') }} </x-button>
                <x-button type="submit" class="w-36" >   {{ __('Enregistrer') }} </x-button>
            </div>

        </form>

    </div>

</x-admin-space-layout>
