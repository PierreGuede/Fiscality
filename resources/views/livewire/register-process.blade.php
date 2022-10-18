<div>
    <x-auth-validation-errors :errors="$errors"  class="fixed top-2 right-5 w-1/3 bg-gray-200 border-l-4 rounded-md border-red-800 p-4 text-black"/>

    <form wire:submit.prevent="registering" {{-- method="POST" action="{{ route('company.store') }}" enctype="multipart/form-data" --}}>
        @if ($currentStep == 1)
            <div class="step-one flex">
                    <section class=" w-2/3 p-4 h-full items-center">
                        <div class="bg-white  mx-auto  rounded shadow-lg py-4 text-left px-6"   >

                                <div class="w-full text-right">
                                    <p class="text-xl">Etape 1/5</p>
                                </div>

                            <p class=" text-xl">Bonjour {{ Auth::user()->name }}</p>
                            <p class="">Choisissez le mode de gestion</p>

                            <div class="flex items-center mx-auto mt-6 ">
                                <div class="w-full">
                                    <h1 class="mb-4 text-xl font-semibold text-gray-700">
                                        Processus de creation de compte
                                    </h1>

                                    <x-label for="name" :value="__('Type de gestion')"/>

                                    {{-- <span class="text-red-800 p-2 text-xl">@error('role') {{ $message }} @enderror</span> --}}
                                    <div class="space-y-2">
                                        <div class="flex p-6 border-2 rounded-lg hover:ring-4 hover:border-purple-500 hover:ring-purple-500/50 ring-offset-1 " >
                                            <div class="w-1/12"><input class="peer" type="radio" wire:model="role" {{-- name="role" --}} id="role" value="cabinet"></div>

                                        <div class="ml-4">

                                            <h2 class=" text-xl font-semibold mb-2 ">
                                                Cabinet
                                            </h2>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore repellendus porro obcaecati dolore ipsam! Quidem corrupti deserunt fugiat ea,</p>
                                        </div>
                                        </div>
                                        <div class="flex p-6 border-2 rounded-lg hover:ring-4 hover:border-purple-500 hover:ring-purple-500/50 ring-offset-1 ">
                                            <div class="w-1/12"><input type="radio" wire:model="role" {{-- name="role" --}} id="role" value="enterprise"></div>
                                            <div class="ml-4">

                                                <h2 class=" text-xl font-semibold mb-2 ">
                                                Entreprise en soi
                                            </h2>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore repellendus porro obcaecati dolore ipsam! Quidem corrupti deserunt fugiat ea,</p>
                                        </div>

                                        </div>
                                    </div>

                            </div>
                            </div>
                        </div>

                    </section>
                    <section class=" w-1/3 p-4  items-center">
                        <div class="bg-white  mx-auto  rounded shadow-lg py-4 text-left px-6" >
                            <p class="text-xl">Infomations Concernant le Type de gestion</p>
                        </div>
                    </section>
            </div>
        @endif
        {{-- Step 2 --}}
        @if ($currentStep == 2)
            <div class="step-two ">
                <section class=" p-4 h-full items-center">
                    <div class="bg-white  mx-auto  rounded shadow-lg py-4 text-left px-6"   >
                        @if ($this->role=="cabinet")
                        <div class="mx-auto w-10/12 p-4 mb-8"><p class="text-xl">Vous avez choisir de continuer en tant que cabinet. Nous vous offrons divers pack de souscription pour votre compte. Pour continuer choisissez le type de pack qui vous plait</p></div>
                        <div class="flex space-x-2">
                            <div class="cursor-pointer w-1/3 bg-slated-800 text-white rounded shadow-lg py-4 text-center px-6  hover:ring-4 hover:border-slated-500 hover:ring-slated-500/50 ring-offset-1 ">
                                <div class="mt-2">
                                    <p class="text-xl">Pack Bronze</p>
                                    <br>
                                    <span>50.00 USD ($)</span>
                                </div>
                                <div class="p-4">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aut enim ad, ipsam, eveniet, cumque nesciunt minima porro odio esse debitis vero est. Iure doloribus aspernatur perferendis repudiandae modi minus.</p>
                                </div>
                                <div>
                                    <button wire:model="subcription" wire:click="choseBronze" type="button"  class="bg-slated-500 w-10/12 mx-auto py-2 px-2 mt-2 mb-3 inline-block text-white hover:bg-green-200 hover:text-slated-500 duration-200 transition rounded">Souscrire au Bronze</button type="button">

                                </div>
                            </div>
                            <div class="cursor-pointer w-1/3 bg-orange-800 text-white rounded shadow-lg py-4 text-center px-6  hover:ring-4 hover:border-orange-500 hover:ring-orange-500/50 ring-offset-1 ">
                                <div class="mt-2">
                                    <p class="text-xl text-orange-400">Pack Or</p>
                                    <br>
                                    <span>50.00 USD ($)</span>
                                </div>
                                <div class="p-4">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aut enim ad, ipsam, eveniet, cumque nesciunt minima porro odio esse debitis vero est. Iure doloribus aspernatur perferendis repudiandae modi minus.</p>
                                </div>
                                <div>
                                    <button wire:model="subcription" wire:click="choseOr" type="button"  class="bg-orange-500 w-10/12 mx-auto py-2 px-2 mt-2 mb-3 inline-block text-white hover:bg-orange-200 hover:text-green-500 duration-200 transition rounded">Souscrire en Or</button type="button">

                                </div>
                            </div>
                            <div class="w-1/3 bg-teal-800 text-white rounded shadow-lg py-4 text-center px-6 cursor-pointer  hover:ring-4 hover:border-teal-500 hover:ring-teal-500/50 ring-offset-1 ">
                                <div class="mt-2">
                                    <p class="text-xl text-teal-400">Pack Diamant</p>
                                    <br>
                                    <span>50.00 USD ($)</span>
                                </div>
                                <div class="p-4">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aut enim ad, ipsam, eveniet, cumque nesciunt minima porro odio esse debitis vero est. Iure doloribus aspernatur perferendis repudiandae modi minus.</p>
                                </div>
                                <div>
                                    <button wire:model="subcription" wire:click="choseDiament" type="button"  class="bg-teal-500 w-10/12 mx-auto py-2 px-2 mt-2 mb-3 inline-block text-white hover:bg-teal-200 hover:text-green-500 duration-200 transition rounded">Souscrire au Diamant</button >

                                </div>
                            </div>
                        </div>
                         @else
                         <div class="mx-auto w-10/12 p-4 mb-8"><p class="text-xl">Vous avez choisir de continuer en tant qu'entreprise en soi. Nous vous offrons un pack de souscription unique pour votre compte. Confirmez si vous etes d'accord pour continuer</p></div>

                         <div class="w-1/3 mx-auto bg-slated-800 text-white rounded shadow-lg py-4 text-center px-6">
                            <div class="mt-2">
                                <p class="text-xl">Pack solo Imposant</p>
                                <br>
                                <span>50.00 USD ($)</span>
                            </div>
                            <div class="p-4">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aut enim ad, ipsam, eveniet, cumque nesciunt minima porro odio esse debitis vero est. Iure doloribus aspernatur perferendis repudiandae modi minus.</p>
                            </div>
                            <div>
                                <button wire:model="subcription" wire:click="choseSolo" type="button"  class="bg-slated-500 w-10/12 mx-auto py-2 px-2 mt-2 mb-3 inline-block text-white hover:bg-green-200 hover:text-slated-500 duration-200 transition rounded">Souscrire au solo</button type="button">
                            </div>
                        </div>
                        @endif
                    </div>

                </section>
            </div>
        @endif

        @if ($currentStep == 3)

        <div class="step-5 mx-auto w-10/12 rounded shadow-lg p-4 py-4">

            <div class="flex">
                <div class="w-2/3">
                    <p class="text-xl"> En dernier, renseignez les diverses informations de votre entreprise</p>
                </div>
                <div class="w-1/3 text-right">
                    <p class="text-xl">Etape 5/5</p>
                </div>
            </div>
            <div class="mt-4">
                <x-label for="born_day" :value="__('Date de création')"/>
                <x-input  wire:model="born_day" {{-- name="born_day" --}}
                        type="date"
                        class="block w-full"
                        value="{{ old('born_day') }}"/>
            </div>

            <div class="flex space-x-2">
                <div class="mt-4 w-1/2">
                    <x-label for="ifu" :value="__('IFU')"/>
                    <x-input  wire:model="ifu" {{-- name="ifu" --}}
                    type="text"
                    class="block w-full"
                    value="{{ old('ifu') }}"/>
                </div>
                <div class="mt-4 w-1/2">
                    <x-label for="rccm" :value="__('Justificatif')"/>
                    <input type="file" class="mt-2"  wire:model="path" {{-- name="path_rccm" --}} id="path">
                </div>

            </div>
            <div class="flex space-x-2">
                <div class="mt-4 w-1/2">
                    <x-label for="rccm" :value="__('RCCM')"/>
                    <x-input  wire:model="rccm" {{-- name="rccm" --}}
                    type="text"
                    class="block w-full"
                    value="{{ old('rccm') }}"/>
                </div>
                <div class="mt-4 w-1/2">
                    <x-label for="rccm" :value="__('Justificatif')"/>
                    <input type="file" class="mt-2"  wire:model="path_rccm" {{-- name="path_rccm" --}} id="path">
                </div>


            </div>
        </div>

        @endif

        <div class="action-buttons justify-between flex space-x-4 mt-6 bg-white pt-2 pb-2">
            @if ($currentStep == 1)
            <div></div>
            @endif
            @if ($currentStep == 2 || $currentStep == 3 )
            <button type="button" class="w-1/3 text-white rounded-md text-center p-2 bg-gray-500" wire:click="decreaseStep()"> Précédent</button>
            @endif
            @if ($currentStep == 1 || $currentStep == 2 )
            <div></div>
            <button type="button" class="w-1/3 text-white rounded-md text-center p-2 bg-green-500" wire:click="increaseStep()"> Suivant</button>

            @endif

            @if ($currentStep == 3)
            <button type="submit" class="w-1/3 text-white rounded-md text-center p-2 bg-blue-700" > Creer mon compte </button>

            @endif


        </div>
    </form>

</div>
