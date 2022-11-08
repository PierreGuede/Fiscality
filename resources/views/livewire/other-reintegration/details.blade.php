<div x-data="{ openASide: false }"  class="max-w-5xl w-full mx-auto pt-12 " >
    <h2 class="py-4 text-2xl font-semibold text-gray-700" >Autre réintégration</h2>
    <div class=" grid grid-cols-12  ">
        <p class="col-span-7 p-3   text-lg text-gray-700 font-semibold  ">Intitulé</p>
        <div class="col-span-3 p-3 text-lg text-gray-700 font-semibold   "><p>Montant</p></div>
        <div class="col-span-2  p-3  "><p></p></div>
    </div>

    @livewire('other-reintegration.create-financial-cost', ['company' => $company ])
    @livewire('other-reintegration.create-commission-on-purchases', ['company' => $company ])
    @livewire('other-reintegration.create-redevance', ['company' => $company ])
    @livewire('other-reintegration.create-assistance-cost', ['company' => $company ])
    @livewire('other-reintegration.create-state-donation', ['company' => $company ])
    @livewire('other-reintegration.create-advertising-gift', ['company' => $company ])
    @livewire('other-reintegration.create-excess-rent', ['company' => $company ])

    <div class="space-y-4">

    <div class=" grid grid-cols-12   ">
        <p class="col-span-7 my-auto px-2">Charges ne se rapportant pas à l'exercice (et non provisionnées)</p>
        <div class="col-span-3 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>
    <div class=" grid grid-cols-12  ">
        <p class="col-span-7 my-auto px-2 ">
            Charges non justifiés par des factures normalisées
        </p>
        <div class="col-span-3 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>
    <div class=" grid grid-cols-12  ">
        <p class="col-span-7 my-auto px-2 ">
            Rémunération n'ayant pas fait l'objet de retenues à la source
        </p>
        <div class="col-span-3 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>

    <div class=" grid grid-cols-12  ">
        <p class="col-span-7 my-auto px-2 ">
            Frais financier
        </p>
        <div class="col-span-3 ">
             <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-1 mx-auto my-auto ">
            <button onclick=" Livewire.emitTo('other-reintegration.create-financial-cost', 'openASide')"  class="focus:outline-none hover:bg-blue-100 p-1.5 rounded-md" >
                <svg class="  stroke-2 stroke-blue-50 w-6 w-6 stroke-blue-500 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

            </button>

        </div>
    </div>

    <div class=" grid grid-cols-12  ">
        <p class="col-span-7 my-auto px-2 ">
            Commission sur achats
        </p>
        <div class="col-span-3 ">
             <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-1 mx-auto my-auto">
            <button onclick="Livewire.emitTo('other-reintegration.create-commission-on-purchases', 'openASide')" class="focus:outline-none hover:bg-blue-100 p-1.5 rounded-md"   >
                <svg class="stroke-2 stroke-blue-500 stroke-blue-50 w-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

            </button>

        </div>
    </div>

    <div class=" grid grid-cols-12  ">
        <p class="col-span-7 my-auto px-2 ">
            Commission verser au courtier d'assurance ne disposant de

        </p>
        <div class="col-span-3 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>

    <div class=" grid grid-cols-12  ">
        <p class="col-span-7 my-auto px-2 ">
            Redevance
        </p>
        <div class="col-span-3 ">
             <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-1 mx-auto my-auto">
            <button type="button" onclick="Livewire.emitTo('other-reintegration.create-redevance', 'openASide')" class="focus:outline-none hover:bg-blue-100 p-1.5 rounded-md"   >
                <svg class="stroke-2 stroke-blue-500 stroke-blue-50 w-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

            </button>

        </div>
    </div>

    <div class=" grid grid-cols-12  ">
        <p class="col-span-7 my-auto px-2 ">
            Frais d'assistance technique comptable et financière
        </p>
        <div class="col-span-3 ">
             <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-1 mx-auto my-auto">
            <button type="button" onclick="Livewire.emitTo('other-reintegration.create-assistance-cost', 'openASide')" class="focus:outline-none hover:bg-blue-100 p-1.5 rounded-md"  >
                <svg class="stroke-2 stroke-blue-500 stroke-blue-50 w-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

            </button>

        </div>
    </div>

    <div class=" grid grid-cols-12  ">
        <p class="col-span-7 my-auto px-2 ">
            Intérêts verser par un établissement stable au siège
        </p>
        <div class="col-span-3 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>

    <div class=" grid grid-cols-12  ">
        <p class="col-span-7 my-auto px-2 ">
            Dons, subventions et cotisations
        </p>
        <div class="col-span-3 ">
             <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-1 mx-auto my-auto">
            <button type="button" onclick="Livewire.emitTo('other-reintegration.create-state-donation', 'openASide')" class="focus:outline-none hover:bg-blue-100 p-1.5 rounded-md" >
                <svg class="stroke-2 stroke-blue-500 w-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

            </button>

        </div>
    </div>

    <div class=" grid grid-cols-12  ">
        <p class="col-span-7 my-auto px-2 ">
            Cadeaux publicitaires
        </p>
        <div class="col-span-3 ">
             <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-1 mx-auto my-auto">
            <button type="button" onclick="Livewire.emitTo('other-reintegration.create-advertising-gift', 'openASide')" class="focus:outline-none hover:bg-blue-100 p-1.5 rounded-md" >
                <svg class="stroke-2 stroke-blue-500 w-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

            </button>

        </div>
    </div>

    <div class=" grid grid-cols-12  ">
        <p class="col-span-7 my-auto px-2 ">
            Dépenses Somptuaires
        </p>
        <div class="col-span-3 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>

    <div class=" grid grid-cols-12  ">
        <p class="col-span-7 my-auto px-2 ">
            Rémunération occultes
        </p>
        <div class="col-span-3 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>

    <div class=" grid grid-cols-12  ">
        <p class="col-span-7 my-auto px-2 ">
            Taxe sur les véhicules à moteur
        </p>
        <div class="col-span-3 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>

    <div class=" grid grid-cols-12  ">
        <p class="col-span-7 my-auto px-2 ">
            impôt sur les bénéfices
        </p>
        <div class="col-span-3 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>

    <div class=" grid grid-cols-12  ">
        <p class="col-span-7 my-auto px-2 ">
            Amendes et pénalités
        </p>
        <div class="col-span-3 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>

    <div class=" grid grid-cols-12  ">
        <p class="col-span-7 my-auto px-2 ">
            Immobilisations passées
        </p>
        <div class="col-span-3 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>

    <div class=" grid grid-cols-12  ">
        <p class="col-span-7 my-auto px-2 ">
            Autres charges non déductibles
        </p>
        <div class="col-span-3 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>

    <div class=" grid grid-cols-12  ">
        <p class="col-span-7 my-auto px-2 ">
            Variation de l'écart de conversation
        </p>
        <div class="col-span-3 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>

    <div class=" grid grid-cols-12  ">
        <p class="col-span-7 my-auto px-2 ">
            Surplus de loyers (véhiculede tourisme)
        </p>
        <div class="col-span-3 ">
             <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-1 mx-auto my-auto ">
            <button onclick="Livewire.emitTo('other-reintegration.create-excess-rent', 'openASide')" class="focus:outline-none hover:bg-blue-100 p-1.5 rounded-md"  >
                <svg class="stroke-2 stroke-blue-500 w-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

            </button>

        </div>
    </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 my-auto px-2 ">
                Autres charges non déductibles
            </p>
            <div class="col-span-3 ">
                <x-input  type="text" label="" id="username" name="username"
                          value="{{ old('username') }}" class="w-full " required autofocus />
            </div>
            <div class="col-span-2">

            </div>
        </div>


    </div>
</div>

</div>
