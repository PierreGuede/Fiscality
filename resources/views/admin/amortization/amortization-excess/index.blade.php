<x-company-layout>
    <div class="w-full bg-blue-100 min-h-screen" >
        <div class="max-w-5xl w-full mx-auto">
        <h5 class="text-lg font-semibold text-gray-500 py-5 " >Surplus d'amortissement</h5>
            <table class="w-full" >
                <thead class="bg-transparent uppercase py-2 text-gray-600" >
                    <th class="text-xs py-3.5 font-semibold" >#</th>
                    <th class="text-xs py-3.5 font-semibold" >Catégorie immob</th>
                    <th class="text-xs py-3.5 font-semibold" >Désignation</th>
                    <th class="text-xs py-3.5 font-semibold" >Taux utilisé</th>
                    <th class="text-xs py-3.5 font-semibold" >Taux recommendé</th>
                    <th class="text-xs py-3.5 font-semibold" >Écart</th>
                    <th class="text-xs py-3.5 font-semibold" >Dotation</th>
                    <th class="text-xs py-3.5 font-semibold" >Amortissement déductible</th>
                </thead>
                <tbody>
                @foreach($data as $key => $value)
                    <tr class="w-full shadow-lg shadow-blue-200 border-b-4 border-blue-200 bg-white">
                        <td class=" text-center text-xs font-semibold py-4 px-4  my-10" >{{ $key +1  }}</td>
                        <td class=" text-center text-xs font-semibold py-4  my-10" > {{$value->category_imo}} </td>
                        <td class=" text-center text-xs font-semibold py-4  my-10" >{{ $value->designation  }}</td>
                        <td class=" text-center text-xs font-semibold py-4  my-10" > {{ $value->taux_use }} </td>
                        <td class=" text-center text-xs font-semibold py-4  my-10" > {{ $value->taux_recommended  }} </td>
                        <td class=" text-center text-xs font-semibold py-4  my-10" >{{ $value->ecart  }}</td>
                        <td class=" text-center text-xs font-semibold py-4  my-10" >{{ $value->dotation  }}</td>
                        <td class=" text-center text-xs font-semibold py-4  my-10" > {{ $value->deductible_amortization  }} </td>
                        <td class=" text-center text-xs font-semibold py-4  my-10" > <span x-text="formatDate('{{  $value->date }}')" ></span> </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-company-layout>
