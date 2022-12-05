<div class="max-w-5xl w-full mx-auto" >

@if($state == \App\Http\Livewire\OtherReintegration\IndexOtherReintegration::CREATE)
        @livewire('other-reintegration.create-other-reintegration', ['company' => $company])
    @endif

    @if($state == \App\Http\Livewire\OtherReintegration\IndexOtherReintegration::EDIT)
        @livewire('other-reintegration.edit-other-reintegration', ['company' => $company])
    @endif

    @if($state == \App\Http\Livewire\OtherReintegration\IndexOtherReintegration::READ)
        <div>
            @livewire('other-reintegration.detail-other-reintegration', ['company' => $company])
            <div class=" w-10/12 mt-10 flex justify-end" >
                <x-button type="button" wire:click="changeState" >Modifier</x-button>
            </div>
        </div>
    @endif
</div>
