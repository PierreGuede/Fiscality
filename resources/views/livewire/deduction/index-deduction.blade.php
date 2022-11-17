<div>
    @if($state == \App\Http\Livewire\Deduction\IndexDeduction::CREATE)
        @livewire('deduction.create-deduction', ['company' => $company])
    @endif

    @if($state == \App\Http\Livewire\Deduction\IndexDeduction::EDIT)
            @livewire('deduction.edit-deduction', ['company' => $company])
    @endif

@if($state == \App\Http\Livewire\Deduction\IndexDeduction::READ)
    <div>
     @livewire('deduction.detail-deduction', ['company' => $company])
        <div class=" w-11/12 mt-5 flex justify-end">
            <x-button type="button" wire:click="changeState" >Modifier</x-button>
        </div>
    </div>
@endif
</div>
