<div x-data="{ openASide: false }" class=" pt-12 ">
    <h2 class="py-4 text-2xl font-semibold text-gray-700">Les charges à soumettre</h2>

    @if( $state ==  \App\Http\Livewire\IrcmOnExpense\HandleOtherReintegration::FIRST_STEP )
        <x-ircm-on-expense.first-step />
    @endif

    @if( $state ==  \App\Http\Livewire\IrcmOnExpense\HandleOtherReintegration::SECOND_STEP )
        <x-ircm-on-expense.second-step :data="$data" />
    @endif


</div>
