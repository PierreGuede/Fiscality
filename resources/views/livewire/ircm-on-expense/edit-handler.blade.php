<div  class=" pt-12 ">
    <div class=" w-11/12 flex items-center justify-between" >
        <h2 class="py-4 text-2xl font-semibold text-gray-700">Modifier les charges soumises</h2>
        @if( $state ==  \App\Http\Livewire\IrcmOnExpense\EditHandler::FIRST_STEP )
            <x-toggle wire:model="select_all" />
        @endif
    </div>

    @if( $state ==  \App\Http\Livewire\IrcmOnExpense\EditHandler::FIRST_STEP )
        <x-ircm-on-expense.edit.first-step />
    @endif

    @if( $state ==  \App\Http\Livewire\IrcmOnExpense\EditHandler::SECOND_STEP )
        <x-ircm-on-expense.edit.second-step :data="$data" />
    @endif

</div>
