<div class="p-12 bg-white" >
    <form wire:submit.prevent="confirmAcces" >

    <div class="text-sm text-slate-500" >
        <h5 class="text-2xl font-semibold text-slate-700" >Confirmation d'accès</h5>
        <p class="my-6" >Vous êtes sur le point d'accéder à l'espace de travail de <span class="bg-gray-200  px-2 rounded-sm font-semibold" > {{ $company->name  }}</span>. Veuillez renseigner son nom tel quel pour confirmer l'accès à cet espace de travail. </p>

        <x-input label="" placeholder="" wire:model="company_name"  />
        @error('company_name') <small>{{ $message  }}</small> @enderror
    </div>
    <div class="flex justify-end gap-x-3.5 mt-6" >
        <x-form.button secondary label="Annuler" />
        @if($activate_button)
            <x-form.button primary label="Confirmer" type="submit" wire:click="confirmAcces " />
        @else
                <x-form.button primary label="Confirmer" disabled="true"     />
        @endif
    </div>
    </form>
</div>
