<x-guest-layout>
    <div class="bg-slate-800 w-10/12 mx-auto p-4">
        <h1 class="text-xl">Resultat comptable</h1>
        @livewire('accounting-result-livewire', [
            'company' => $company
        ])
    </div>
</x-guest-layout>
