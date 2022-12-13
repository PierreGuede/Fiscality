<div  class="p-12 bg-white">
    <form wire:submit.prevent="save">
        <h5 class="text-xl font-semibold text-slate-700" >{{ $name  }}</h5>
        <div class="mb-4" >
                <x-select
                    label="Selectionnez des entreprises"
                    placeholder="Selectionnez"
                    multiselect
                    :options="$companies"
                    option-label="name"
                    option-value="id"
                    wire:model.defer="assign_companies"
                />
        </div>
{{--@dump($companies)--}}
        <div class="flex justify-end gap-x-3.5 mt-6">
            <x-button type="button" wire:click=""  onclick="Livewire.emit('closeModal', 'create-user')" variant="neutral"> Annuler</x-button>
            <x-button type="submit">Confirmer</x-button>

        </div>
    </form>
</div>
