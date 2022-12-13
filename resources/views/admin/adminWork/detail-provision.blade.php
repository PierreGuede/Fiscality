<x-company-layout :company="$company" >
    <x-tax-result.content-wrapper :company="$company" >

    <div class="w-full  min-h-screen" >
        <div class="max-w-5xl w-full mx-auto">
        <x-title>Provisions pour risque d'exploitation</x-title>

            <table class="w-full" >
                <thead class="bg-transparent uppercase py-2 text-gray-600" >
                    <th class="text-xs py-3.5 font-semibold" >#</th>
                    <th class="text-xs py-3.5 font-semibold" >Compte </th>
                    <th class="text-xs py-3.5 font-semibold" >Designation</th>
                    <th class="text-xs py-3.5 font-semibold" >Montant </th>
                    <th class="text-xs py-3.5 font-semibold" >Date </th>
                </thead>
                <tbody>
                @foreach($cahrgesCompany as $key => $value)
                    <tr class="w-full shadow-lg shadow-blue-200 border-b-4 border-blue-200 bg-white">
                        <td class=" text-center text-xs font-semibold py-4 px-4  my-10" >{{ $key +1  }}</td>
                        <td class=" text-center text-xs font-semibold py-4  my-10" > {{$value->compte}} </td>
                        <td class=" text-center text-xs font-semibold py-4  my-10" >{{ $value->designation  }}</td>
                        <td class=" text-center text-xs font-semibold py-4  my-10" > {{ $value->amount }} </td>
                        <td class=" text-center text-xs font-semibold py-4  my-10" > {{ $value->date  }} </td>
                        <td class="text-center text-xs font-semibold py-4 px-4  my-10">
                            <div class="flex space-x-4">
                                <a href="{{ route('tax-result.reintegration.accured-charge.detailProvision.edit',['company'=>$company->id,'provision'=>$value->id]) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-blue-500  cursor-pointer">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                    </svg></a>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-red-600 cursor-pointer">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                  </svg>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
        </x-tax-result.content-wrapper>

</x-company-layout>
