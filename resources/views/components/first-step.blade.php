@props(['packs'])

<div>
    <h5 class="text-gray-500">Choisissez un mode de gestion</h5>
    <p class="text-lg font-semibold text-gray-700">Mettons un petit detail ici</p>

    <div  class="mt-6">
        {{--        Type de gestion--}}
        <ul class="flex gap-x-6">
            {{--            Entreprise--}}
            <li class="relative w-64 cursor-pointer">
                <input wire:model="management_type" class="peer sr-only" id="entreprise" type="radio" value="enterprise" name="compte" />
                <label for="entreprise" class="block space-y-7 rounded-md border-2 border-gray-300 p-6 pt-16 text-gray-700 hover:border-blue-100 hover:bg-blue-100 peer-checked:border-blue-500 peer-checked:bg-blue-500 peer-checked:text-blue-50">
                    <p class="text-lg font-semibold">Entreprise</p>
                </label>
                <svg class="absolute top-3 right-3 hidden h-6 w-6 flex-none shrink-0 fill-blue-100 stroke-blue-500 stroke-2 peer-checked:block" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="11" />
                    <path d="m8 13 2.165 2.165a1 1 0 0 0 1.521-.126L16 9" fill="none" />
                </svg>
            </li>

            {{--            Cabinet--}}
            <li class="relative w-64 cursor-pointer">
                <input wire:model="management_type" class="peer sr-only" id="cabinet" type="radio" value="cabinet" name="compte" />
                <label for="cabinet" class="block space-y-7 rounded-md border-2 border-gray-300 p-6 pt-16 text-gray-700 hover:border-blue-100 hover:bg-blue-100 peer-checked:border-blue-500 peer-checked:bg-blue-500 peer-checked:text-blue-50">
                    <p class="text-lg font-semibold">Cabinet</p>
                </label>
                <svg class="absolute top-3 right-3 hidden h-6 w-6 flex-none shrink-0 fill-blue-100 stroke-blue-500 stroke-2 peer-checked:block" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="11" />
                    <path d="m8 13 2.165 2.165a1 1 0 0 0 1.521-.126L16 9" fill="none" />
                </svg>
            </li>
        </ul>

        <ul class="mt-8 flex flex-col gap-y-4">
            @foreach($packs as $pack)
                <li  class="relative">
                    <input wire:model="pack" class="peer sr-only" type="radio" value="{{ $pack->id  }}" name="{{ $pack->id  }} " id="{{ $pack->id  }}" />
                    <label class=" flex cursor-pointer rounded-lg border border-gray-300 bg-white px-5 py-8 hover:bg-gray-50 focus:outline-none peer-checked:border-transparent peer-checked:ring-2 peer-checked:ring-blue-500" for="{{ $pack->id  }}">
                        <div class="  " >
                            <div class="" >
                                <p class="text-slate-700 font-bold" >{{ $pack->price  }}</p>
                                <p class="text-sm text-slate-500" >{{ $pack->max  }} {{ $pack->type == 'cabinet' ? 'Entreprises' : 'Entreprise'  }} </p>
                            </div>
                        </div>
                    </label>
                    <svg class="absolute top-1/3 right-3 hidden h-6 w-6 flex-none shrink-0 fill-blue-100 stroke-blue-500 stroke-2 peer-checked:block" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="11" />
                        <path d="m8 13 2.165 2.165a1 1 0 0 0 1.521-.126L16 9" fill="none" />
                    </svg>
                </li>

            @endforeach

        </ul>
    </div>
</div>
