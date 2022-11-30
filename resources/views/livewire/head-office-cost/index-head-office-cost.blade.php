<div>
    @if($state == 'CREATE')
        @livewire('head-office-cost.create-head-office-cost', ['company' => $company])
    @endif

    @if($state == 'UPDATE')
        @livewire('head-office-cost.edit-head-office-cost', ['company' => $company])
    @endif


    @if($state == 'READ')
        <div>
            @livewire('head-office-cost.detail-head-office-cost', ['company' => $company])
            <div class="flex justify-end mt-4" >
                <x-button type="button" wire:click="changeState" >Modifier</x-button>
            </div>
        </div>
    @endif
</div>
