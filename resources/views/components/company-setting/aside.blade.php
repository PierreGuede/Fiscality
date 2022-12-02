@props(['company' =>  null])

<div class=" w-60 space-y-1 " >

    @if($company)
        <x-company-setting.link href="{{ route('company.setting', $company->id)  }}" name="Information générale" :active="request()->routeIs('company.setting')"  />
        <x-company-setting.link href="{{ route('company.setting.taxation', $company->id)  }}" name="Imposition" :active="request()->routeIs('company.setting.taxation')"  />
        <x-company-setting.link href="{{ route('company.setting.tax-type', $company->id)  }}" name="Type d'impôt" :active="request()->routeIs('company.setting.tax-type')"  />
    @endif
</div>
