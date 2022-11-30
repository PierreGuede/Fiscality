@props(['company' =>  null])

<div class=" w-60 space-y-1 " >

    @if($company)
        <x-company-setting.link href="{{ route('company.setting', $company->id)  }}" name="Information générale" :active="request()->routeIs('user.setting.personnal-information')"  />
        <x-company-setting.link href="{{ route('company.setting', $company->id)  }}" name="Imposition" :active="request()->routeIs('user.setting.personnal-information')"  />
        <x-company-setting.link href="{{ route('company.setting', $company->id)  }}" name="Type d'impôt" :active="request()->routeIs('user.setting.personnal-information')"  />
    @endif
</div>
