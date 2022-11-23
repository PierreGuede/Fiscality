<div x-data="{ name: '' } " class=" flex gap-x-4 bg-white p-4 rounded-md" >
    <x-dialog >
        <div class="mt-4" >

        <x-input  label="Entrez le nom de l'entreprise?" placeholder="Entrez le nom de l'entreprise?" x-model="name" />
        </div>
    </x-dialog>
    <div class="bg-blue-600 rounded-md aspect-square h-28 " ></div>
    <div class="h-full flex flex-col justify-between" >
        <div>
            <h5 class="text-base text-slate-700 font-semibold" > {{ $company->name  }}</h5>
            <p class="text-xs text-slate-600" >IFU: {{ $company->ifu  }}</p>
        </div>
        <div class="w-full grid grid-cols-3 gap-x-1.5"  >
            <x-form.button positive outline xs icon="eye" label="Voir"  />
            <x-form.button
                href="{{ route('work.show', $company->id) }}"
{{--                           @click="window.$wireui.confirmDialog({--}}
{{--                                    title: 'Confirmation d accès',--}}
{{--                                    description: 'Vous êtes sur le point d accéder à l espace de travail de  {{ $company->name  }}. Veuillez renseigner son nom tel quel pour confirmer l accès à cet espace de travail.',--}}
{{--                                    icon: 'question',--}}
{{--                                    accept: {--}}
{{--                                        label: 'Confirmer',--}}
{{--                                        method: 'save',--}}
{{--                                        params: 'name',--}}
{{--                                    },--}}
{{--                                    reject: {--}}
{{--                                        label: 'Annuler',--}}
{{--                                    }--}}
{{--                                },1)"--}}
                        primary  xs icon="lock-open" label="Accéder " />
            @hasrole('cabinet')
            <x-form.button negative  xs icon="trash" label="Supprimer" />
            @endrole

        </div>
    </div>
</div>
