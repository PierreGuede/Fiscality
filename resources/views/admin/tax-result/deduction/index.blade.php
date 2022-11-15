<x-company-layout :company="$company" >
<<<<<<< HEAD
    <h1 class="text-xl font-semibold text-gray-700 ml-4">LES DEDUCTION </h1>
=======
    <h1 class="text-xl font-semibold text-gray-700 ml-4">LES DEDUCTION DE : {{ $company->name }}</h1>
    <form method="POST" action="{{ route('tax-result.deduction.store',$company->id) }}">
        @csrf
        <div class=" ml-6 mt-4 space-y-4" x-data="">
            <div class="space-x-4" >
>>>>>>> feat/modification

    @livewire('deduction.create-deduction', ['company' => $company])
</x-company-layout>
