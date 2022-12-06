<form  class=" w-2/5 space-y-2 " >
    <x-input type="number" :disabled="true"  wire:model.defer="amount"  label="Montant" id="deficit" name="deficit"
             value="{{ old('deficit') }}" class="block w-full mb-4" required autofocus />
    <x-button type="button" wire:click="edit" >Modifier</x-button>
</form>
