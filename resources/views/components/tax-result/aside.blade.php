@props(['company' =>  null])

<div class=" w-60 space-y-1 " >

    @if($company)
        <x-tax-result.link href="{{ route('tax-result.account-result', $company->id)  }}" name="Résultat comptable " :active="request()->routeIs('tax-result.account-result')"  />
{{--        <x-tax-result.link href="{{ route('company.setting', $company->id)  }}" name="Réintégration " :active="request()->routeIs('company.setting')"  />--}}

{{--        <x-nav-link label="Amortissement"--}}
{{--                    href="{{ route('tax-result.reintegration.amortization',$company->id) }}"--}}
{{--                    icon="office-building"/>--}}
{{--        <x-nav-link label="Provisions et charges provisionnées"--}}
{{--                    href="{{ route('tax-result.reintegration.accured-charge',$company->id) }}"--}}
{{--                    active="{{ request()->routeIs('tax-result.account-result')  }}"--}}
{{--                    icon="office-building"/>--}}
{{--        <x-nav-link label="Autre réintégration"--}}
{{--                    href="{{ route('tax-result.reintegration.other-reintegration',$company->id) }}"--}}
{{--                    active="{{ request()->routeIs('tax-result.account-result')  }}"--}}
{{--                    icon="office-building"/>--}}

        <div class="divide-y-2" >
            <p class="text-sm text-blue-900 font-semibold pb-1 px-2" >Réintégration</p>
            <div  >
                <x-tax-result.sub-link href="{{ route('tax-result.reintegration.amortization',$company->id) }}" name="Amortisssement " :active="request()->routeIs('tax-result.reintegration.amortization')"  />
                <x-tax-result.sub-link href="{{ route('tax-result.reintegration.accured-charge',$company->id) }}" name="Provisions et charges" :active="request()->routeIs('tax-result.account-result.accured-charge')"  />
                <x-tax-result.sub-link href="{{ route('tax-result.reintegration.other-reintegration',$company->id) }}" name="Autre réintégration" :active="request()->routeIs('tax-result.account-result.other-reintegration')"  />
            </div>
        </div>
        <x-tax-result.link href="{{ route('tax-result.deduction', $company->id)  }}" name="Déductions " :active="request()->routeIs('tax-result.deduction')"  />
    @endif
</div>
