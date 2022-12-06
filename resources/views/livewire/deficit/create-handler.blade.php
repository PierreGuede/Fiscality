<form wire:submit.prevent="save" class=" w-2/5 space-y-2 " >
    <x-input type="number" wire:model.defer="amount"  label="Montant" id="deficit" name="deficit"
             value="{{ old('deficit') }}" class="block w-full mb-4" required autofocus />
    <x-button type="submit" >Enregistrer</x-button>
</form>
