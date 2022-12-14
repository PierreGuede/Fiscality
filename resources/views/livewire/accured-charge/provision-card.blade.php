<div class=" flex max-w-4xl bg-white w-full  rounded mt-4" >

    <div class="w-full p-8 border-r-2 border-blue-500 " >
        <h4 class="text-lg font-semibold text-gray-700 mb-4" > Provisions pour risque d'exploitation </h4>
        <p class=" text-sm " >
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
        </p>
    </div>
    <div class="w-52 text-center flex flex-col justify-between " >
        <h6 class="py-1.5 border-b-2 border-blue-50" >Montant</h6>
        @if(!is_null($total))
            <p class="my-auto" x-text="formatNumber({{$total}}, false)"  >
            </p>
        @endif

        <div class="mt-auto ">

            @if(is_null($total))
                <a href="{{ route('work.provision',$company->id) }}" class="w-full focus:outline-none text-sm border-b-2 border-blue-50 flex  items-center justify-center px-4 py-2 text-blue-50 bg-blue-500 hover:bg-blue-400 gap-x-2 font-semibold" >
                    <svg class="stroke-2 stroke-blue-50 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Ajouter</span>
                </a>
            @endif

            @if(!is_null($total))
{{--                <button onclick="Livewire.emit('openModal', 'account-result.edit-expense', {{ json_encode([ "company" => $company ]) }})"  class="w-full focus:outline-none text-sm border-b-2 border-blue-50 flex  items-center justify-center px-4 py-2 text-blue-50 bg-blue-500 hover:bg-blue-400 gap-x-2 font-semibold" >--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="stroke-2 stroke-blue-50 w-5 ">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />--}}
{{--                    </svg>--}}

{{--                    <span>Modifier</span>--}}
{{--                </button>--}}
{{--            @endif--}}
               <button onclick="Livewire.emit('openModal', 'provision-livewire', {{ json_encode([ "company" => $company ]) }})"  class="w-full focus:outline-none text-sm border-b-2 border-blue-50 flex  items-center justify-center px-4 py-2 text-blue-50 bg-blue-500 hover:bg-blue-400 gap-x-2 font-semibold" >
                    Ajouter
               </button>
            @endif

            @if(!is_null($total))
            <a href="{{ route('tax-result.reintegration.accured-charge.detailProvision', $company->id)  }}" class=" group w-full flex text-sm  items-center justify-center px-4 py-2 text-blue-500 bg-blue-100 hover:bg-blue-500 hover:text-blue-50 gap-x-2 font-semibold" >
                <svg class="stroke-2 stroke-blue-500 group-hover:stroke-blue-50 w-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span>Voir plus</span>
            </a>
            @endif
        </div>
    </div>
</div>
