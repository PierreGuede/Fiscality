<div class="" >
    <div class="flex items-center justify-center flex-col mt-8" >
        <x-icon name="exclamation" class="w-20 aspect-square stroke-red-500 stroke-2" />
        <p class="text-center text-lg text-slate-700 " >Êtes-vous sûr?</p>
    </div>

    <div class="flex justify-end gap-x-4 mt-12 px-8 pb-8" >
        <x-button type="button" variant="neutral" onclick="Livewire.emit('closeModal', 'company.amortization.delete-excess-handler')"  >Annuler</x-button>
        <x-button type="button" variant="fill-danger" wire:click="delete"  >Supprimer</x-button>
    </div>
</div>
