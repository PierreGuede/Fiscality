<div x-data="{ openASide: false }"  class="max-w-5xl w-full mx-auto pt-12 " >
    <h2 class="py-4 text-2xl font-semibold text-gray-700" >Autre réintégration</h2>
    <div class=" grid grid-cols-12 divide-x-2 divide-blue-500 border-2 border-blue-500 border-b-0 ">
        <p class="col-span-6 p-3  ">Nom</p>
        <div class="col-span-4   p-3  "><p>Valeur</p></div>
        <div class="col-span-2  p-3  "><p>Action</p></div>
    </div>

    @livewire('other-reintegration.create-financial-cost')
    {{-- @livewire('other-reintegration.create-commission-on-purchases') --}}
    <livewire:other-reintegration.create-commission-on-purchases :company='$company'>
    @livewire('other-reintegration.create-commission-on-purchases')
    @livewire('other-reintegration.create-redevance')
    @livewire('other-reintegration.create-assistance-cost')
    @livewire('other-reintegration.create-state-donation')
    @livewire('other-reintegration.create-advertising-gift')
    @livewire('other-reintegration.create-excess-rent')

    <div class=" grid grid-cols-12 divide-x-2 divide-blue-500 border-2 border-blue-500 border-b-0  ">
        <p class="col-span-6 my-auto px-2">Charges ne se rapportant pas à l'exercice (et non provisionnées)</p>
        <div class="col-span-4 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>
    <div class=" grid grid-cols-12 divide-x-2 divide-blue-500 border-2 border-blue-500 border-b-0 ">
        <p class="col-span-6 my-auto px-2 ">
            Charges non justifiés par des factures normalisées
        </p>
        <div class="col-span-4 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>
    <div class=" grid grid-cols-12 divide-x-2 divide-blue-500 border-2 border-blue-500 border-b-0 ">
        <p class="col-span-6 my-auto px-2 ">
            Rémunération n'ayant pas fait l'objet de retenues à la source
        </p>
        <div class="col-span-4 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>

    <div class=" grid grid-cols-12 divide-x-2 divide-blue-500 border-2 border-blue-500 border-b-0 ">
        <p class="col-span-6 my-auto px-2 ">
            Frais financier
        </p>
        <div class="col-span-4 ">
            <p class="text-center text-gray-700 font-semibold " >0</p>
        </div>
        <div class="col-span-2">
            <button onclick=" Livewire.emitTo('other-reintegration.create-financial-cost', 'openASide')"  class="focus:outline-none focus:ring-2 focus:ring-blue-200 focus-within:ring-2 w-full text-sm  flex  items-center justify-center px-4 py-2 text-blue-50 bg-blue-500 hover:bg-blue-400 gap-x-2 font-semibold" >
                <svg class="stroke-2 stroke-blue-50 w-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

                <span>Ajouter</span>
            </button>

        </div>
    </div>

    <div class=" grid grid-cols-12 divide-x-2 divide-blue-500 border-2 border-blue-500 border-b-0 ">
        <p class="col-span-6 my-auto px-2 ">
            Commission sur achats
        </p>
        <div class="col-span-4 ">
            <p class="text-center text-gray-700 font-semibold " >0</p>
        </div>
        <div class="col-span-2">
            <button onclick="Livewire.emitTo('other-reintegration.create-commission-on-purchases', 'openASide')"  class=" focus:outline-none focus:ring-2 focus:ring-blue-200 focus-within:ring-2 w-full text-sm  flex  items-center justify-center px-4 py-2 text-blue-50 bg-blue-500 hover:bg-blue-400 gap-x-2 font-semibold" >
                <svg class="stroke-2 stroke-blue-50 w-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

                <span>Ajouter</span>
            </button>

        </div>
    </div>

    <div class=" grid grid-cols-12 divide-x-2 divide-blue-500 border-2 border-blue-500 border-b-0 ">
        <p class="col-span-6 my-auto px-2 ">
            Commission verser au courtier d'assurance ne disposant de

        </p>
        <div class="col-span-4 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>

    <div class=" grid grid-cols-12 divide-x-2 divide-blue-500 border-2 border-blue-500 border-b-0 ">
        <p class="col-span-6 my-auto px-2 ">
            Redevance
        </p>
        <div class="col-span-4 ">
            <p class="text-center text-gray-700 font-semibold " >0</p>
        </div>
        <div class="col-span-2">
            <button  class=" focus:outline-none focus:ring-2 focus:ring-blue-200 focus-within:ring-2 w-full text-sm  flex  items-center justify-center px-4 py-2 text-blue-50 bg-blue-500 hover:bg-blue-400 gap-x-2 font-semibold" >
                <svg class="stroke-2 stroke-blue-50 w-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

                <span>Ajouter</span>
            </button>

        </div>
    </div>

    <div class=" grid grid-cols-12 divide-x-2 divide-blue-500 border-2 border-blue-500 border-b-0 ">
        <p class="col-span-6 my-auto px-2 ">
            Frais d'assistance technique comptable et financière
        </p>
        <div class="col-span-4 ">
            <p class="text-center text-gray-700 font-semibold " >0</p>
        </div>
        <div class="col-span-2">
            <button  class=" focus:outline-none focus:ring-2 focus:ring-blue-200 focus-within:ring-2 w-full text-sm  flex  items-center justify-center px-4 py-2 text-blue-50 bg-blue-500 hover:bg-blue-400 gap-x-2 font-semibold" >
                <svg class="stroke-2 stroke-blue-50 w-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

                <span>Ajouter</span>
            </button>

        </div>
    </div>

    <div class=" grid grid-cols-12 divide-x-2 divide-blue-500 border-2 border-blue-500 border-b-0 ">
        <p class="col-span-6 my-auto px-2 ">
            Intérêts verser par un établissement stable au siège
        </p>
        <div class="col-span-4 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>

    <div class=" grid grid-cols-12 divide-x-2 divide-blue-500 border-2 border-blue-500 border-b-0 ">
        <p class="col-span-6 my-auto px-2 ">
            Dons, subventions et cotisations
        </p>
        <div class="col-span-4 ">
            <p class="text-center text-gray-700 font-semibold " >0</p>
        </div>
        <div class="col-span-2">
            <button  class=" focus:outline-none focus:ring-2 focus:ring-blue-200 focus-within:ring-2 w-full text-sm  flex  items-center justify-center px-4 py-2 text-blue-50 bg-blue-500 hover:bg-blue-400 gap-x-2 font-semibold" >
                <svg class="stroke-2 stroke-blue-50 w-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

                <span>Ajouter</span>
            </button>

        </div>
    </div>

    <div class=" grid grid-cols-12 divide-x-2 divide-blue-500 border-2 border-blue-500 border-b-0 ">
        <p class="col-span-6 my-auto px-2 ">
            Cadeaux publicitaires
        </p>
        <div class="col-span-4 ">
            <p class="text-center text-gray-700 font-semibold " >0</p>
        </div>
        <div class="col-span-2">
            <button  class=" focus:outline-none focus:ring-2 focus:ring-blue-200 focus-within:ring-2 w-full text-sm  flex  items-center justify-center px-4 py-2 text-blue-50 bg-blue-500 hover:bg-blue-400 gap-x-2 font-semibold" >
                <svg class="stroke-2 stroke-blue-50 w-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

                <span>Ajouter</span>
            </button>

        </div>
    </div>

    <div class=" grid grid-cols-12 divide-x-2 divide-blue-500 border-2 border-blue-500 border-b-0 ">
        <p class="col-span-6 my-auto px-2 ">
            Dépenses Somptuaires
        </p>
        <div class="col-span-4 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>

    <div class=" grid grid-cols-12 divide-x-2 divide-blue-500 border-2 border-blue-500 border-b-0 ">
        <p class="col-span-6 my-auto px-2 ">
            Rémunération occultes
        </p>
        <div class="col-span-4 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>

    <div class=" grid grid-cols-12 divide-x-2 divide-blue-500 border-2 border-blue-500 border-b-0 ">
        <p class="col-span-6 my-auto px-2 ">
            Taxe sur les véhicules à moteur
        </p>
        <div class="col-span-4 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>

    <div class=" grid grid-cols-12 divide-x-2 divide-blue-500 border-2 border-blue-500 border-b-0 ">
        <p class="col-span-6 my-auto px-2 ">
            impôt sur les bénéfices
        </p>
        <div class="col-span-4 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>

    <div class=" grid grid-cols-12 divide-x-2 divide-blue-500 border-2 border-blue-500 border-b-0 ">
        <p class="col-span-6 my-auto px-2 ">
            Amendes et pénalités
        </p>
        <div class="col-span-4 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>

    <div class=" grid grid-cols-12 divide-x-2 divide-blue-500 border-2 border-blue-500 border-b-0 ">
        <p class="col-span-6 my-auto px-2 ">
            Immobilisations passées
        </p>
        <div class="col-span-4 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>

    <div class=" grid grid-cols-12 divide-x-2 divide-blue-500 border-2 border-blue-500 border-b-0 ">
        <p class="col-span-6 my-auto px-2 ">
            Autres charges non déductibles
        </p>
        <div class="col-span-4 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>

    <div class=" grid grid-cols-12 divide-x-2 divide-blue-500 border-2 border-blue-500 border-b-0 ">
        <p class="col-span-6 my-auto px-2 ">
            Variation de l'écart de conversation
        </p>
        <div class="col-span-4 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>

    <div class=" grid grid-cols-12 divide-x-2 divide-blue-500 border-2 border-blue-500 border-b-0 ">
        <p class="col-span-6 my-auto px-2 ">
            Surplus de loyers (véhiculede tourisme)
        </p>
        <div class="col-span-4 ">
            <p class="text-center text-gray-700 font-semibold " >0</p>
        </div>
        <div class="col-span-2">
            <button  class=" focus:outline-none focus:ring-2 focus:ring-blue-200 focus-within:ring-2 w-full text-sm  flex  items-center justify-center px-4 py-2 text-blue-50 bg-blue-500 hover:bg-blue-400 gap-x-2 font-semibold" >
                <svg class="stroke-2 stroke-blue-50 w-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

                <span>Ajouter</span>
            </button>

        </div>
    </div>

    <div class=" grid grid-cols-12 divide-x-2 divide-blue-500 border-2 border-blue-500  ">
        <p class="col-span-6 my-auto px-2 ">
            Autres charges non déductibles

        </p>
        <div class="col-span-4 ">
            <x-input  type="text" label="" id="username" name="username"
                      value="{{ old('username') }}" class="w-full " required autofocus />
        </div>
        <div class="col-span-2">

        </div>
    </div>

</div>
