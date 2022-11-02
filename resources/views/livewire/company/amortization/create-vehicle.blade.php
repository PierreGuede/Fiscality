<div class="py-10 px-10 w-full " >
    <div>
        <h5 class="text-base text-gray-600 font-semibold" >Véhicule de Toursime</h5>
    </div>

    <form class="mt-10 space-y-5" action="">
        <x-input type="email" label="Véhicules concernés" id="vehicle" name="vehicle"
                 value="{{ old('email') }}" class="block w-full" required autofocus />

        <x-input type="email" label="Valeur d'origine ou base d'amortissement" id="vehicle" name="vehicle"
                 value="{{ old('email') }}" class="block w-full" required autofocus />
        <x-input type="email" label="Plafond base d'amortissement" id="vehicle" name="vehicle"
                 value="{{ old('email') }}" class="block w-full" required autofocus />
        <x-input type="email" label="Ecart" id="vehicle" name="vehicle"
                 value="{{ old('email') }}" class="block w-full" required autofocus />
        <x-input type="email" label="Dotation eux amortissement compptabilisée" id="vehicle" name="vehicle"
                 value="{{ old('email') }}" class="block w-full" required autofocus />
        <x-input type="email" label="Dotation eux amortissement compptabilisée" id="vehicle" name="vehicle"
                 value="{{ old('email') }}" class="block w-full" required autofocus />
        <x-input type="email" label="Amortissement non deductible" id="vehicle" name="vehicle"
                 value="{{ old('email') }}" class="block w-full" required autofocus />
        <x-input type="date" label="Date d'achat" id="vehicle" name="vehicle"
                 value="{{ old('email') }}" class="block w-full" required autofocus />

        <div class="flex gap-x-3 justify-end">
            <x-button variant="neutral" class="w-36" >   {{ __('Annuler') }} </x-button>
            <x-button class="w-36" >   {{ __('Enregistrer') }} </x-button>
        </div>
    </form>

</div>
