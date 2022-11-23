<x-app-layout>
    <div class="p-6" >
        <div class=" w-full flex justify-between" >
            <h5 class="text-2xl font-semibold text-blue-900" >Espace entreprise</h5>

            <x-form.button  href="{{ route('company.enterprise') }}" primary outline right-icon="plus-circle" label="Ajouter"  />
        </div>

        <div class="mt-8 grid grid-cols-2 gap-8" >
            @foreach ($company as $company)
                @livewire('company.company-card', ['company' => $company])
            @endforeach

        </div>
    </div>
</x-app-layout>
