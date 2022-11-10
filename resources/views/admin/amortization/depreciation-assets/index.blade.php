<x-company-layout :company="$company">
    <div class="w-full  min-h-screen" >
        <div class="max-w-5xl w-full mx-auto">
            <h5 class="text-lg font-semibold text-gray-500 py-5 " >Amortissement sur biens qui ne sont pas directement liés à l'exploitation</h5>
            <table class="w-full" >
                <thead class="bg-transparent uppercase py-2 text-gray-600" >
                <th class="text-xs py-3.5 font-semibold" >#</th>
                <th class="text-xs py-3.5 font-semibold" >Catégorie immobilisation</th>
                <th class="text-xs py-3.5 font-semibold" >Désignation</th>
                <th class="text-xs py-3.5 font-semibold" >Dotation comptabilisée</th>
                </thead>
                <tbody>
                @foreach($data as $key => $value)
                    <tr class="w-full shadow-lg shadow-blue-200 border-b-4 border-blue-200 bg-white">
                        <td class=" text-center text-xs font-semibold py-4 px-4  my-10" >{{ $key +1  }}</td>
                        <td class=" text-center text-xs font-semibold py-4  my-10" > {{$value->category_imo}} </td>
                        <td class=" text-center text-xs font-semibold py-4  my-10" >{{ $value->designation  }}</td>
                        <td class=" text-center text-xs font-semibold py-4  my-10" >{{ $value->dotation  }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-company-layout>
