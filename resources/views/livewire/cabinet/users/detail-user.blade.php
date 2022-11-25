<div  class="px-12 pt-12 pb-10 bg-white">
    <form wire:submit.prevent="save">

        <div class="space-y-4" >
            <div class="flex justify-between" >
                <label for="" class="font-semibold text-slate-700" >Nom:</label>
                <p class="text-slate-700" >{{ $name  }}</p>
            </div>
            <div class="flex justify-between" >
                <label for="" class="font-semibold text-slate-700" >Prénom:</label>
                <p class="text-slate-700" >{{ $firstname  }}</p>
            </div>
            <div class="flex justify-between" >
                <label for="" class="font-semibold text-slate-700" >Email:</label>
                <p class="text-slate-700" >{{ $email  }}</p>
            </div>

            <div class="flex justify-between" >
                <label for="" class="font-semibold text-slate-700" >Entreprises associées:</label>
                <p class="text-slate-700" ></p>
            </div>
            @foreach($user->getWorkspaceCompany as $company)
                <div class="flex justify-between" >
                    <label for="" class="font-semibold text-slate-700" > </label>
                    <p class="text-slate-700" > {{ $company->name  }}</p>
                </div>
            @endforeach
        </div>

        <div class="flex justify-end gap-x-3.5 mt-6">
            <x-form.button negative type="button" wire:click=""  onclick="Livewire.emit('closeModal', 'create-user')" variant="neutral"> Fermer</x-form.button>
        </div>
    </form>
</div>
