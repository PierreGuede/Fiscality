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

{{--Password Section--}}
            <div  class="my-2" >
                <x-checkbox label="Envoyer les identifiants par mail" wire:model="send_password" />
            </div>

            @if(!$send_password)
                <div>
                    <div class="mt-4">
                        <x-input label="Mot de passe" type="password"
                                 name="password"
                                 wire:model.defer="password"
                                 class="block w-full"
                                 required/>
                        @error('password') <span class="text-xs text-red-600">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="mt-4">
                        <x-input label="Confirmer votre mot de passe" type="password"
                                 name="password_confirmation"
                                 wire:model.defer="password_confirmation"
                                 class="block w-full"
                                 required/>
                        @error('password_confirmation') <span class="text-xs text-red-600">{{ $message }}</span>
                        @enderror

                    </div>
                </div>
            @endif

        </div>


        <div class="flex justify-end gap-x-3.5 mt-6">
            <x-button type="button" wire:click=""  onclick="Livewire.emit('closeModal', 'cabinet.users.create-user')" variant="neutral"> Annuler</x-button>
            <x-button type="submit">Confirmer</x-button>

        </div>
    </form>
</div>
