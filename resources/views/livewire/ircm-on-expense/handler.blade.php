<div>

    @if($state == \App\Http\Livewire\IrcmOnExpense\Handler::READ)
        <div class="w-10/12" >
            <x-total-card :total="$total" />

        </div>
        <x-ircm-on-expense.details :data="$data"  />
    @endif

    @if($state == \App\Http\Livewire\IrcmOnExpense\Handler::EDIT)
        @livewire('ircm-on-expense.edit-handler', ['company'=> $company])
    @endif

    @if($state == \App\Http\Livewire\IrcmOnExpense\Handler::CREATE)
            @livewire('ircm-on-expense.handle-other-reintegration', ['company' => $company])
    @endif
</div>
