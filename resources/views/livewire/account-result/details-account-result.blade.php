<div  >

{{--    @livewire('total-card', ['total' => $total])--}}
    <x-total-card label="Total Résultat Comptable" :total="$total" />
{{--    @if ($account_result!=null)--}}
{{--        @else--}}
{{--    <div class="mb-6 space-y-3">--}}
{{--        <x-radio id="user_fill_result" label="Je renseigne mon résultat comptable"  value="user_fill_result" wire:model="state" />--}}
{{--        <x-radio id="user_calculate_result" label="Je laisse l'application me calculer mon résultat comptable" value="user_calculate_result" wire:model="state" />--}}
{{--            <select wire:model="state"--}}
{{--                class="w-4/12 px-3 py-2 rounded-sm focus:outline-none focus:ring-4 focus:ring-blue-500/20 border border-gray-300"--}}
{{--                name="fill_intype" id="">--}}

{{--                <option value="user_fill_result">Je renseigne mon résultat comptable</option>--}}
{{--                <option value="user_calculate_result"></option>--}}

{{--            </select>--}}
{{--        </div>--}}
{{--    @endif--}}
{{--    @if($state  == 'user_fill_result')--}}
{{--        <form wire:submit.defer="save" >--}}
{{--            <div class=" w-4/12 ">--}}
{{--                <x-input class="w-full" for=""--}}
{{--                         type="number" id="total_incomes_expenses" label='Total résultat comptable'--}}
{{--                         wire:model.defer="total_incomes_expenses"--}}
{{--                         placeholder="Total résultat comptable" class="" required autofocus/>--}}
{{--                @error('total_incomes_expenses')--}}
{{--                <span class="text-xs text-red-600">{{ $message }}</span>--}}
{{--                @enderror--}}
{{--            </div>--}}

{{--            <div class="mt-4 ">--}}
{{--                <x-button type="submit" class=""> Enregistrer</x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    @endif--}}

{{--    @if($state == 'user_calculate_result')--}}
        @livewire('account-result.income-card', [ 'company' => $company])
        @livewire('account-result.expense-card', [ 'company' => $company])
{{--    @endif--}}
</div>
