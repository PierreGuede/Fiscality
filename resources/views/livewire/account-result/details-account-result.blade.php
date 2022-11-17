<div  >

    @if ($account_result!=null)
        @livewire('total-card', ['total' => $total])
    <span x-text="response" ></span>
    <div class="mb-6">
        @else
        <select x-model="$wire.state"
                class="w-4/12 px-3 py-2 rounded-sm focus:outline-none focus:ring-4 focus:ring-blue-500/20 border border-gray-300"
                name="fill_intype" id="">

            <option value="user_fill_result">Je renseigne mon résultat comptable</option>
            <option value="user_calculate_result">Je laisse l'application me calculer mon résultat comptable</option>

            @endif
        </select>
    </div>
    @if($state  == 'user_fill_result')
        <form >
            <div class=" w-4/12 ">
                <x-input class="w-full" for=""
                         type="number" id="total_incomes_expenses" label='Total résultat comptable'
                         wire:model.defer="total_incomes_expenses"
                         placeholder="Total résultat comptable" class="" required autofocus/>
                @error('total_incomes_expenses')
                <span class="text-xs text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-4 ">
                <x-button class=""> Enregistrer</x-button>
            </div>
        </form>
    @endif

    @if($state == 'user_calculate_result')
        @livewire('account-result.income-card', [ 'company' => $company])
        @livewire('account-result.expense-card', [ 'company' => $company])
    @endif
</div>
