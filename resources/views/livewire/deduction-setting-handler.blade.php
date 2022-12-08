<div class="py-4">
    <p class="text-xl text-slate-700 font-semibold py-4">Déductions</p>
    <div class="ml-4 py-2">
        <p class="text-md text-slate-700 font-semibold"> Produits financier</p>
        <div class="ml-4">
            <div class="flex items-center my-3 " >
                <x-input :disabled="$edit_rate_proceed_government" type="number" wire:model="rate_proceed_government" name="rate_proceed_government" value="25" label=" Taux des produits " />
                <div class="space-x-3 px-2" >
                    @if($edit_rate_proceed_government)
                        <x-form.button wire:click="editRateProceedGovernment"  flat orange label="Modifier" />
                    @else
                        <x-form.button wire:click="editRateProceedGovernment" flat orange label="Enregister" />
                    @endif
                    <x-form.button wire:click="resetRateProceedGovernment" flat stone label="Réinitialiser"  />
                </div>
            </div>
            <div class="flex items-center my-3 " >
                <x-input :disabled="$edit_rcm_product_rate" type="number" wire:model="rcm_product_rate" name="rcm_product_rate" value="25" label="Taux des autres produits RCM (%)" />
                <div class="space-x-3 px-2" >
                    @if($edit_rcm_product_rate)
                        <x-form.button wire:click="editRcmProductRate"  flat orange label="Modifier" />
                    @else
                        <x-form.button wire:click="editRcmProductRate" flat orange label="Enregister" />
                    @endif
                    <x-form.button wire:click="resetRcmProductRate" flat stone label="Réinitialiser"  />
                </div>
            </div>
        </div>
    </div>
</div>
