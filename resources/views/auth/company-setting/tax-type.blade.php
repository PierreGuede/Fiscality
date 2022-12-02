
<x-company-layout :company="$company" >

<x-company-setting.content-wrapper :company="$company" >

    @foreach($company->typeCompany->impot as $impot)
        <div class="py-4" >
            <div class="flex items-center gap-x-2" >
                @if($impot->code == \App\Fiscality\TypeImpots\TypeImpot::IS || $company->typeCompany->code == \App\Fiscality\TypeCompanies\TypeCompany::PERSONNES_PHYSIQUE )
                    <x-toggle name="{{ $impot->id  }}" value="{{ $impot->id }}" disabled checked="true" />
                @else
                    <x-toggle name="{{ $impot->id  }}" value="{{ $impot->id  }}" checked="true"  />
                @endif
                    <p class="text-sm font-medium text-slate-900" >{{ $impot->name  }}</p>
            </div>
            <small class="block text-xs text-slate-500 mt-2.5" >Envoyez les rapports à chaque entreprise après avoirs calculés le résultat fiscal </small>
        </div>
    @endforeach

</x-company-setting.content-wrapper>

</x-company-layout>
