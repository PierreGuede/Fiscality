<x-company-layout :company="$company">

    <x-company-setting.content-wrapper :company="$company">

        @foreach($company->detailType as $detail_type)
            <div class="max-w-md py-4">
                <h5 class="text-slate-700 font-semibold text-sm">{{  $detail_type->category->name  }}</h5>

                <div class="flex items-center justify-between">
                    <p class="ml-4 text-sm mt-1.5 font-semibold text-slate-700"> Sous-catégorie:</p>
                    <p class="ml-4 text-sm mt-1.5 text-left font-medium text-slate-700"> {{ $detail_type->name  }}</p>
                </div>

                <div class="flex items-center justify-between">
                    <p class="ml-4 text-sm mt-1.5 font-semibold text-slate-700"> Taux imposable:</p>
                    <p class="ml-4 text-sm mt-1.5 text-left font-medium text-slate-700"> {{ $detail_type->taux . ' %'  }}</p>
                </div>

                <small
                    class=" block ml-4 mt-3">{{ $detail_type->descipriton ? $detail_type->descipriton : 'out ont nez feu fait peu pale. Les rirez mal osait son sacre. Hate pres va crie main sa cime. Un premier devenir lecture qu minutes oh ai musique. Promenade ras ton que divergent annoncait. Des rougeatres executeurs '  }}</small>

            </div>
        @endforeach

    </x-company-setting.content-wrapper>

</x-company-layout>
