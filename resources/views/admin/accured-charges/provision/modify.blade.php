<x-company-layout :company="$company" >

    <div class="w-full  min-h-screen" >
        <div class="max-w-5xl w-full mx-auto">
            <form  class="mt-10 space-y-5" action="{{ route('work.accuredCharge.update',['company'=>$company->id,'accuredChargeCompany'=>$accuredChargeCompany->id]) }}" method="POST">
                @method('PUT')
                @csrf

                <div>
                    <x-input  type="text" label="Catégories d'immobilisation" id="compte" name="compte"
                             value="{{ old('compte',$accuredChargeCompany->compte) }}" class="block w-full" required autofocus />
                    @error('compte')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <x-input  type="text" label="Désignation" id="designation" name="designation"
                             value="{{ old('designation',$accuredChargeCompany->designation) }}" class="block w-full" required autofocus />
                    @error('designation')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <x-input   type="text" label="Montant" id="amount" name="amount"
                             value="{{ old('amount',$accuredChargeCompany->amount) }}" class="block w-full" required autofocus />
                    @error('amount')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex gap-x-3 justify-end">
                    <x-button type="button" wire:click="$emit('closeModal')" variant="neutral" class="w-36" >   {{ __('Annuler') }} </x-button>
                    <x-button type="submit" class="w-36" >   {{ __('Enregistrer') }} </x-button>
                </div>
            </form>


        </div>

    </div>

</x-company-layout>
