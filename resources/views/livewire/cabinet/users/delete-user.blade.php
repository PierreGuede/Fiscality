<div x-data="{ sendPassword: false }"  class="py-8 px-6 bg-white">
    <h5 class="text-2xl  font-medium pb-4 text-gray-700" >Suppression</h5>
    <form wire:submit.prevent="delete">

        <div class="w-full flex flex-col items-center mt-4 mb-6 justify-center" >
            <x-icon name="exclamation-circle" class=" w-24 stroke-red-500 mb-4" />
            <h5 class="text-xl" >Êtes-vous sur ?</h5>
        </div>

        <div class="flex justify-end gap-x-3.5 mt-6">
            <x-button type="button" wire:click=""  onclick="Livewire.emit('closeModal', 'cabinet.users.delete-user')" variant="neutral"> Annuler</x-button>
            <x-form.button lg negative  type="submit">Supprimer</x-form.button>
        </div>
    </form>
</div>
