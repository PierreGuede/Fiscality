<x-company-layout :company="$company" >
    <div class="w-full flex flex-col justify-center ">

        <div class=" w-2/5 " >
            <h2 class="text-2xl font-semibold text-gray-700 py-4" >Frais de siège</h2>

            @livewire('head-office-cost.index-head-office-cost', ['company' => $company])
        </div>

    </div>


</x-company-layout>
