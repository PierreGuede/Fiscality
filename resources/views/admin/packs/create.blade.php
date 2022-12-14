<x-app-layout>

    <div class=" p-4">
        <div class="flex justify-between items-center pb-3">
            <p class="text-2xl font-bold">Créer un pack</p>
        </div>

        <form action="{{ route('pack.store') }}" method="POST" class="space-y-4 p-4 max-w-lg" >
            @csrf
            <div class="space-y-2">
                <x-input class="w-full" for="name"
                type="text" id="name" name="name"  label='Nom du pack'
                placeholder="Nom du pack" class="" required autofocus />

                <x-input class="w-full" for="max"
                type="text" id="max" name="max"  label='Nombre maximum entreprise'
                placeholder="Nombre maximum entreprise" class="" required autofocus />
                <x-input class="w-full" for="description"
                type="text" id="description" name="description"  label='description'
                placeholder="description" class="" required autofocus />
            </div>
            <div class="flex gap-x-3 justify-end">
                <x-button type="button" variant="neutral" class="w-36" >   {{ __('Annuler') }} </x-button>
                <x-button type="submit" class="w-36" >   {{ __('Enregistrer') }} </x-button>
            </div>
        </form>
        <!--Footer-->



</div>

</x-app-layout>
