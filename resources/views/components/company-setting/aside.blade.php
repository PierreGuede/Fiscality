@props(['company' =>  null])

<div class=" w-60 space-y-1 " >

    @if($company)
        <x-company-setting.link href="{{ route('company.setting', $company->id)  }}" name="Information générale" :active="request()->routeIs('company.setting')"  />
        <x-company-setting.link href="{{ route('company.setting.taxation', $company->id)  }}" name="Calcul de l'impôt" :active="request()->routeIs('company.setting.taxation')"  />
        <x-company-setting.link href="{{ route('company.setting.tax-type', $company->id)  }}" name="Types d'impôt" :active="request()->routeIs('company.setting.tax-type')"  />
        <x-company-setting.link href="{{ route('company.setting.all-taxes', $company->id)  }}" name="Autre paramètre" :active="request()->routeIs('company.setting.all-taxes')"  />
    @endif
</div>
