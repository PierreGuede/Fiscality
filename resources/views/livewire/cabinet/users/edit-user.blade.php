<div x-data="{ sendPassword: false }"  class="p-12 bg-white">
    <form wire:submit.prevent="save">
        <div>
            <div class="flex space-x-2">
                <div class="mt-4 w-1/2">
                    <x-input label="Nom" type="text"
                             id="name"
                             name="name"
                             wire:model.defer="name"
                             class="block w-full"
                             value="{{ old('name') }}"
                             required
                             autofocus/>
                    @error('name')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror

                </div>
                <div class="mt-4 w-1/2">
                    <x-input label="Prénom" type="text"
                             id="firstname"
                             name="firstname"
                             wire:model.defer="firstname"
                             class="block w-full"
                             value="{{ old('firstname') }}"
                             required
                             autofocus/>

                    @error('firstname') <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mt-4">
                <x-input label="Email" name="email"
                         type="email"
                         wire:model.defer="email"
                         class="block w-full"
                         value="{{ old('email') }}"/>
                @error('email')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                @enderror

            </div>
            </div>


        <div class="flex justify-end gap-x-3.5 mt-6">
            <x-button type="button" wire:click=""  onclick="Livewire.emit('closeModal', 'create-user')" variant="neutral"> Annuler</x-button>
            <x-button type="submit">Confirmer</x-button>

        </div>
    </form>
</div>
