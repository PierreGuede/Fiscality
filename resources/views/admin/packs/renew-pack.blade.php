<x-guest-layout>
    <div class="mx-auto w-4/6 p-4">
        <div class=" mx-auto space-y-6 ">
            <h2 class="text-4xl font-bold text-sky-800">Renouvellement d'abonnement</h2>
            <h6 class="text-lg font-medium ">Monsieur {{ $user->name }}</h6>
            <p class="">Votre abonnement est expiré depuis fin {{ $pack->created_at->year }}. Veuillez renouveller votre abonnement pour continuer sur TECIT</p>

            <small class="block font-semibold text-sky-400">Date d'expiration du dernier abonnement: {{ $pack->updated_at->day.'-'.$pack->updated_at->month.'-'.$pack->updated_at->year }}</small>

        </div>
        <div  class="mt-6">
           
            <ul class="mt-8 flex flex-col gap-y-4">
                @foreach($cabinet_packs as $cabinet_packs)
                    <li  class="relative">
                        <input wire:model="cabinet_packs" class="peer sr-only" type="radio" value="{{ $cabinet_packs->id  }}" name="{{ $cabinet_packs->id  }} " id="{{ $cabinet_packs->id  }}" />
                        <label class=" flex cursor-pointer rounded-lg border border-gray-300 bg-white px-5 py-8 hover:bg-gray-50 focus:outline-none peer-checked:border-transparent peer-checked:ring-2 peer-checked:ring-blue-500" for="{{ $cabinet_packs->id  }}">
                            <div class="  " >
                                <div class="" >
                                    <p class="text-slate-700 font-bold" >{{ $cabinet_packs->price  }}</p>
                                    <p class="text-sm text-slate-500" >{{ $cabinet_packs->max  }} {{ $cabinet_packs->type == 'cabinet' ? 'Entreprises' : 'Entreprise'  }} </p>
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
</x-guest-layout>
