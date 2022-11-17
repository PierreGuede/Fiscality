<x-company-layout :company="$company">
    <div class="bg-white  w-10/12 mx-auto p-4">
        <h1 class="text-xl font-semibold text-gray-700">Les charges personnels</h1>

        <livewire:create-provisions-personnel-expenses :company='$company'>
    </div>
</x-company-layout>
