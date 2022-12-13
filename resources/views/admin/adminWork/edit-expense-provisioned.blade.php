<x-company-layout :company="$company" >
    <x-tax-result.content-wrapper :company="$company">
        <x-title>{{$expense->designation}}</x-title>
    <div class="w-full  min-h-screen" >

        <div class="max-w-5xl w-full mx-auto">
            <form method="POST" class="space-y-4" action="{{ route('tax-result.reintegration.accured-charge.detailExpenseProvisioned.updateExpenseProvisionned',['company'=>$company->id,'expense'=>$expense->id]) }}">
                @method('PUT')
                @csrf
                <div>
                <x-input type="text" label="Compte" id="category_imo" name="compte"
                         value="{{ old('compte',$expense->compte) }}" class="block w-full" required autofocus />
                    @error('compte')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <x-input type="text" label="Désignation" id="designation" name="designation"
                             value="{{ old('designation',$expense->designation) }}" class="block w-full" required autofocus />
                    @error('designation')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <x-input  type="text" label="Montant" id="dotation" name="amount"
                             value="{{ old('amount',$expense->amount) }}" class="block w-full" required autofocus />
                    @error('amount')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex gap-x-3 justify-end">
                    <x-button type="button" variant="neutral" class="w-36" >   {{ __('Annuler') }} </x-button>
                    <x-button type="submit" class="w-36" >   {{ __('Enregistrer') }} </x-button>
                </div>
            </form>


        </div>

    </div>
        </x-tax-result.content-wrapper>

</x-company-layout>
