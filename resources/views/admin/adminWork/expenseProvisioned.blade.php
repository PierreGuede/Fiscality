<x-company-layout :company="$company">
    <div class="bg-white  w-10/12 mx-auto p-4">
        <h1 class="text-xl font-semibold text-gray-700">Provisions sur charge personnel </h1>

        <livewire:expense-provisioned-livewire :company='$company'>
    </div>
</x-company-layout>
