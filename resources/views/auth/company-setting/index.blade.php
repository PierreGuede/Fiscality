

<x-user-setting.content-wrapper>
    <div class="py-4" >
        <div class="flex items-center gap-x-2" >
            <x-toggle wire:model.defer="model" /> <p class="text-sm font-medium text-slate-900" >Envoyez les rapports par emails</p>
        </div>
        <small class="block text-xs text-slate-500 mt-2.5" >Envoyez les rapports à chaque entreprise après avoirs calculés le résultat fiscal </small>
    </div>

    <div class="py-4">
        <div class="flex items-center gap-x-2" >
            <x-toggle wire:model.defer="model" /> <p class="text-sm font-medium text-slate-900" >Notifiez les entreprises par SMS</p>
        </div>
        <small class="block text-xs text-slate-500 mt-2.5" >Envoyez un sms à toutes les entreprises lorsque leurs résultats sont calculés </small>
    </div>
</x-user-setting.content-wrapper>
