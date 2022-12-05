@props(['company' =>  null])

<div class=" w-60 space-y-1 ">
    @if($company)
        @foreach($company->typeCompany->impot as $impot)
            @if($impot->code == \App\Fiscality\TypeImpots\TypeImpot::IS )
                <x-company-setting.link href="{{ route('corporate-tax', $company->id)  }}" name="Impôt sur les sociétés"
                                        :active="request()->routeIs('corporate-tax')"/>
            @endif
            @if($impot->code == \App\Fiscality\TypeImpots\TypeImpot::IBA )
                <x-company-setting.link href="{{ route('business-profit-tax', $company->id)  }}"
                                        name="Impôt sur les Bénéfices "
                                        :active="request()->routeIs('business-profit-tax')"/>
            @endif

            @if($impot->code == \App\Fiscality\TypeImpots\TypeImpot::IRCM_SUR_CHARGES )
                <x-company-setting.link href="{{ route('ircm-on-expense', $company->id)  }}" name="IRCM sur charge"
                                        :active="request()->routeIs('business-profit-tax')"/>
            @endif

            @if($impot->code == \App\Fiscality\TypeImpots\TypeImpot::IRCM_SUR_RESULTAT )
                <x-company-setting.link href="{{ route('business-profit-tax', $company->id)  }}"
                                        name="IRCM sur résultat net"
                                        :active="request()->routeIs('business-profit-tax')"/>
            @endif
        @endforeach
    @endif
</div>
