<div class=" flex max-w-4xl bg-white w-full  rounded mt-4  ">

    <div class="w-full p-8 border-r-2 border-blue-500 ">
        <h4 class="text-lg font-semibold text-gray-700 mb-4"> Impôt minimum </h4>
        <p class=" text-sm ">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type
        </p>
    </div>

    <div class="w-52 text-center flex flex-col justify-between ">
        <h6 class="py-1.5 border-b-2 border-blue-50">Montant</h6>
        <p class="my-auto">
            {{$total}}
        </p>

        <div class="mt-auto ">
            @if($total > 0)
                <button
                    onclick="Livewire.emit('openModal', 'corporate-tax.edit-minimum-tax', {{ json_encode([ "company" => $company ]) }})"
                    class="w-full text-sm border-b-2 border-blue-50 flex  items-center justify-center px-4 py-2 text-blue-50 bg-blue-500 hover:bg-blue-400 gap-x-2 font-semibold">
                    <svg class="stroke-2 stroke-blue-50 w-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Modifier</span>
                </button>
            @else
                <button
                    onclick="Livewire.emit('openModal', 'corporate-tax.create-minimum-tax', {{ json_encode([ "company" => $company ]) }})"
                    class="w-full text-sm border-b-2 border-blue-50 flex  items-center justify-center px-4 py-2 text-blue-50 bg-blue-500 hover:bg-blue-400 gap-x-2 font-semibold">
                    <svg class="stroke-2 stroke-blue-50 w-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Ajouter</span>
                </button>
            @endif
        </div>
    </div>
</div>
