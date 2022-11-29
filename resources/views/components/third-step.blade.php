@props(['managementType' => '', 'packs', 'selectedPack', 'social_reason', 'ifu', 'rccm' ])

<div class="max-w-lg space-y-4" >
    <div class="flex justify-between items-center" >
        <p class="font-semibold text-slate-700" >Raison sociale:</p>
        <p>{{ $social_reason  }}</p>
    </div>

    <div class="flex justify-between items-center" >
        <p class="font-semibold text-slate-700" >Type de gestion:</p>
        <p class="uppercase" >{{ $managementType  }}</p>
    </div>

    <div class="flex justify-between    " >
        <p class="font-semibold text-slate-700" >Abonnement:</p>
{{--        <p>{{ $pack  }}</p>--}}

        <div class="space-y-4" >
            @foreach($packs as $pack)
                @if($selectedPack == $pack->id)
                    <p x-text="formatNumber({{ $pack->price  }})" ></p>
                    <p>{{ $pack->max  }} Utilisateurs</p>
                @endif
            @endforeach
        </div>
    </div>

    <div class="flex justify-between items-center" >
        <p class="font-semibold text-slate-700" >IFU:</p>
        <p>{{ $ifu  }}</p>
    </div>

    <div class="flex justify-between items-center" >
        <p class="font-semibold text-slate-700" >RCCM:</p>
        <p>{{ $rccm     }}</p>
    </div>


</div>
