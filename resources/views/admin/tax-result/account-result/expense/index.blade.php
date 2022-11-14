<x-company-layout :company="$company" >
    <div class="w-full  min-h-screen" >
        <div class="max-w-5xl w-full mx-auto">
            <h5 class="text-2xl font-semibold text-gray-700 " >Charges</h5>

            <table class="w-full" >
                <thead class="bg-transparent uppercase py-2 text-gray-600" >
                    <th class=" text-left text-xs py-3.5 font-semibold" >#</th>
                    <th class=" text-left text-xs py-3.5 font-semibold" >Compte</th>
                    <th class=" text-left text-xs py-3.5 font-semibold" >Intitulé</th>
                    <th class=" text-left text-xs py-3.5 font-semibold" >Montant</th>
                </thead>
                <tbody>
                @foreach($expense as $key => $value)
                    <tr class="w-full shadow-lg shadow-blue-200 border-b-4 border-blue-200 bg-white">
                        <td class=" text-left text-xs font-semibold py-4 px-4  my-10" >{{ $key +1  }}</td>
                        <td class=" text-left text-xs font-semibold py-4  my-10" > {{$value->account}} </td>
                        <td class=" text-left text-xs font-semibold py-4  my-10" >{{ $value->name  }}</td>
                        <td class=" text-left text-xs font-semibold py-4  my-10" > {{ $value->amount  }} </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-company-layout>
