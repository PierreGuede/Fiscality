<x-company-layout :company="$company" >
    <div class="w-full  min-h-screen" >
        <div class="max-w-5xl w-full mx-auto">
        <h5 class="text-2xl font-semibold text-gray-700 " >Vehicule de tourismes</h5>
            <table class="w-full" >
                <thead class="bg-transparent uppercase py-2 text-gray-600" >
                    <th class="text-xs py-3.5 font-semibold" >#</th>
                    <th class="text-xs py-3.5 font-semibold" >Véhicule concernés</th>
                    <th class="text-xs py-3.5 font-semibold" >Valeur d'origine ou Base d'amortissement</th>
                    <th class="text-xs py-3.5 font-semibold" >Plafond base d'amortissement</th>
                    <th class="text-xs py-3.5 font-semibold" >Écart</th>
                    <th class="text-xs py-3.5 font-semibold" >Dotation aux amortissements comptabilisée</th>
                    <th class="text-xs py-3.5 font-semibold" >Amortissement non déductible</th>
                    <th class="text-xs py-3.5 font-semibold" >Date d'achat</th>
                </thead>
                <tbody>
                @foreach($data as $key => $value)
                    <tr class="w-full shadow-lg shadow-blue-200 border-b-4 border-blue-200 bg-white">
                        <td class=" text-center text-xs font-semibold py-4 px-4  my-10" >{{ $key +1  }}</td>
                        <td class=" text-center text-xs font-semibold py-4  my-10" > {{$value->name}} </td>
                        <td class=" text-center text-xs font-semibold py-4  my-10" >{{ $value->value  }}</td>
                        <td class=" text-center text-xs font-semibold py-4  my-10" > {{ $value->plafond }} </td>
                        <td class=" text-center text-xs font-semibold py-4  my-10" > {{ $value->ecart  }} </td>
                        <td class=" text-center text-xs font-semibold py-4  my-10" >{{ $value->value  }}</td>
                        <td class=" text-center text-xs font-semibold py-4  my-10" > {{ $value->deductible_amortization  }} </td>
                        <td class=" text-center text-xs font-semibold py-4  my-10" > <span x-text="formatDate('{{  $value->date }}')" ></span> </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-company-layout>
