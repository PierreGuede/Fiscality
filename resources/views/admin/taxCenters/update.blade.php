<x-admin-space-layout>

    <div class=" p-4">
        <div class="flex justify-between items-center pb-3">
            <p class="text-2xl font-bold">{{ __($taxCenter->name) }}</p>
        </div>

        <form action="{{route('taxCenter.update',$taxCenter->id) }}" method="POST" class="space-y-4 p-4 max-w-lg" >
            @csrf
            <div class="space-y-2">
                <x-input class="w-full" for="name"
                type="text" id="name" name="name" value="{{ old('name',$taxCenter->name) }}" label='Nom du taxCenter'
                placeholder="Nom du taxCenter" class="" required autofocus />

                <x-input class="w-full" for="addresse"
                type="text" id="addresse" name="addresse" value="{{ old('addresse',$taxCenter->addresse) }}" label='Addresse'
                placeholder="Nombre maximum entreprise" class="" required autofocus />
            </div>
            <div class="flex gap-x-3 justify-end">
                <x-button type="button" variant="neutral" class="w-36" >   {{ __('Annuler') }} </x-button>
                <x-button type="submit" class="w-36" >   {{ __('Enregistrer') }} </x-button>
            </div>

        </form>

    </div>

</x-admin-space-layout>
