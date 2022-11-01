<x-guest-layout>
    {{-- <div class="w-10/12 p-4 mx-auto bg-slate-800"> --}}
    @livewire('income-expense')

    <p class="text-xl text-center">{{ $company->name }}</p>
    {{-- <livewire:work-in-company :company="$company"> --}}
    <a href="{{ route('company.edit', $company->id) }}"class="hover:text-green-400 ">Annuler</a>

    {{-- </div> --}}
</x-guest-layout>
