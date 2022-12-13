<x-admin-space-layout>

    <div class=" p-4">
        <div class="flex justify-between items-center pb-3">
            <p class="text-2xl font-bold">Créer un type de compagnie</p>
        </div>

        <form action="{{ route('type.store') }}" method="POST" class="space-y-4 p-4 max-w-lg" >
            @csrf
            <div class="space-y-2">
                <x-input class="w-full" for="name"
                type="text" id="name" name="name"  label="Nom de l'activité"
                placeholder="Nom de l'activité" class="" required autofocus />

                <div class="mt-4">
                    <x-label for="name" :value="__('Impôt')"/>
                    <x-native-select label="Impôt"
                                     name="impot_id"
                                     class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600">
                        <option value=""></option>
                        @foreach ($impot as $impot)
                        <option value="{{ $impot->id }}">{{ $impot->name }}</option>
                    @endforeach
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

</x-admin-space-layout>
