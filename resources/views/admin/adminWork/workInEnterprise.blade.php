<x-guest-layout>
    <div class="bg-slate-800 w-10/12 mx-auto p-4">
        <p class="text-xl text-center">{{ $company->name }}</p>
        <livewire:work-in-company :company="$company">
            <a href="{{ route('company.edit',$company->id) }}"class="hover:text-green-400 ">Annuler</a>

    </div>
</x-guest-layout>
