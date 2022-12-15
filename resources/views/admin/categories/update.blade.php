<x-admin-space-layout>

    <div class=" p-4">
        <div class="flex justify-between items-center pb-3">
            <p class="text-2xl font-bold"> {{ __($category->name) }}</p>
        </div>
        <form action="{{ route('category.update', $category->id) }}" method="POST" class="space-y-4 p-4 max-w-lg">
            @csrf
            <div class="space-y-4">
                <x-input class="w-full" for="name"
                type="text" id="name" name="name" label='Nom de la catégorie'
                placeholder="Nom de la catégorie" value="{{ old('name',$category->name) }}" class="" required autofocus />
            </div>
            <div class="flex gap-x-3 justify-end">
                <x-button type="button" variant="neutral" class="w-36" >   {{ __('Annuler') }} </x-button>
                <x-button type="submit" class="w-36" >   {{ __('Enregistrer') }} </x-button>
            </div>
        </form>


</x-admin-space-layout>
