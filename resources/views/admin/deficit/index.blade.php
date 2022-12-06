<x-company-layout :company="$company">

    <x-tax-result.content-wrapper :company="$company">

        <div class="w-full flex flex-col justify-center ">

            <x-title>Report de Déficit</x-title>

            <div class="  ">
                @livewire('deficit.details', ['company' => $company])
            </div>

        </div>
    </x-tax-result.content-wrapper>


</x-company-layout>
