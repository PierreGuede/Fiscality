
<x-company-layout :company="$company" >

<x-company-setting.content-wrapper :company="$company" >

        <form id="form" method="POST" action="{{ route("company.setting.update-company", $company->id)  }}" class=" space-y-4 py-4" >
            @method('PUT')
            @csrf
            <div class="flex gap-x-4" >
                <x-input label="Raison sociale" name="name" placeholder="name" id="name" value="{{ old('name', $company->name)  }}"  />
                <x-input label="Date de création" name="created_date" placeholder="created_date" id="created_date" value="{{ old('created_date', $company->created_date)  }}" />
            </div>
            <div class="flex gap-x-4" >
                <x-input label="Email" name="email" placeholder="email" id="email" value="{{ old('email', $company->email)  }}" />
                <x-input label="Téléphone" name="celphone" placeholder="celphone" id="celphone" value="{{ old('celphone', $company->celphone)  }}" />
            </div>
            <div class="flex gap-x-4" >
                <x-input disabled label="IFU"  placeholder="ifu" id="ifu" value="{{ old('ifu', $company->ifu)  }}" />
                <x-input label="RCCM" name="rccm" placeholder="rccm" id="rccm" value="{{ old('rccm', $company->rccm)  }}" />
            </div>
            <div class="flex gap-x-4" ></div>
            <div class="w-full flex gap-x-4" >
                <x-native-select name="type_company_id" class="!w-full" label="Type d'entreprise"  >
                    @foreach($company_type as $element)
                        <option value="{{ $element->id  }}" @selected($element->id == $company->type_company_id)>{{ $element->name  }}</option>
                    @endforeach
                </x-native-select>

                <x-native-select name="tax_center_id" class="w-full" label="Centre d'impôt"  >
                    @foreach($tax_center as $element)
                        <option value="{{ $element->id  }}" @selected($element->id == $company->tax_center_id)>{{ $element->name  }}</option>
                    @endforeach
                </x-native-select>
            </div>

        </form>

    <x-slot:footer>
        <div class="flex justify-start" >
            <x-button type="submit" form="form" >Enregistrer</x-button>
        </div>
    </x-slot:footer >

</x-company-setting.content-wrapper>

</x-company-layout>
