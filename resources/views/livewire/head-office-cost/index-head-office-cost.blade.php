<div>
    @if($state == 'CREATE')
        <h2>CREATE</h2>
        @livewire('head-office-cost.create-head-office-cost', ['company' => $company])
    @endif

    @if($state == 'UPDATE')
        <h2>UPDATE</h2>
        @livewire('head-office-cost.edit-head-office-cost', ['company' => $company])
    @endif


    @if($state == 'READ')
        <div>
        <h2>READ</h2>
        @livewire('head-office-cost.detail-head-office-cost', ['company' => $company])
            <div class="flex justify-end mt-4" >
                <x-button type="button" wire:click="changeState" >Modifier</x-button>
            </div>
        </div>
    @endif
</div>
