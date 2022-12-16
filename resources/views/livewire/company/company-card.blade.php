<div x-data="{ name: '' } " class=" flex gap-x-4 bg-white p-4 rounded-md h-52 " >

        <div class="bg-white border-2 border-blue-500 shadow-lg shadow-blue-200 flex items-center justify-center rounded-md aspect-square h-12 " >
            @if($company->logo == '' )
                <x-icon class="w-6 h-6 stroke-blue-500" name="office-building" />
            @else
                <img class="w-12  " src="{{ Storage::path($company->logo)  }}" />
            @endif
        </div>
    <div class="h-full flex flex-col justify-between" >
        <div class="w-auto" >
            <h5 class="text-base text-slate-700 font-semibold line-clamp-1" > {{ $company->name  }} </h5>
            <p class="text-xs text-slate-600" > <span class="font-semibold">IFU</span>  : {{ $company->ifu  }}</p>
            <p class="text-xs text-slate-600" > <span class="font-semibold">RCCM</span> : {{ $company->rccm  }}</p>
            <p class="text-xs text-slate-600" > <span class="font-semibold">Email</span> : {{ $company->email  }}</p>
            <p class="text-xs text-slate-600" > <span class="font-semibold">Téléphone</span> : {{ $company->celphone  }}</p>
        </div>
        <div class="w-full ml-auto   "  >
            <p class="text-xs font-semibold text-slate-600 mb-2" >Actions</p>
            <x-form.button
                onclick="Livewire.emit('openModal', 'cabinet.confirm-company-acces', {{ json_encode([ $company->id]) }})"
{{--                href="{{ route('work.show', $company->id) }}"--}}
                        primary outline  xs icon="lock-open" label="Accéder" />
            <x-form.button positive outline xs icon="eye" label="Voir"  />
            @hasrole('cabinet')
                 <x-form.button negative outline  xs icon="trash" label="Suppr" />
            @endrole

        </div>
    </div>
{{--    <div>3</div>--}}
</div>
