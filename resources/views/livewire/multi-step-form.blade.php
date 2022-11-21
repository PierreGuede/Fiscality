<div>
{{--    <x-auth-validation-errors :errors="$errors"  class="fixed top-2 right-5 w-1/3 bg-gray-200 border-l-4 rounded-md border-red-800 p-4 text-black"/>--}}
    <x-notifications position="top-left" />

    <form wire:submit.prevent="company" {{-- method="POST" action="{{ route('company.store') }}" enctype="multipart/form-data" --}}>
        {{-- Step 1 --}}
        @if ($currentStep == 1)
            <div class="step-one flex">
                <section class="w-2/3 rounded shadow-lg py-4 p-4">
                    <div class="flex">
                        <div class="w-2/3">
                            <p class="text-xl"> Quels sont les domaines dans lesquels votre entreprise travaille?</p>
                        </div>
                        <div class="w-1/3 text-right">
                            <p class="text-xl">Etape 1/4</p>
                        </div>
                    </div>

                    <section class=" p-4 h-full items-center">
                        <div class="mt-4">
                            <x-label for="name" :value="__('Domaine d\'activités')"/>
                            <x-native-select wire:change="findActivity" wire:model="domain_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600">
                                <option value=""></option>
                                @foreach ($domain as $domain)
                                    <option  value="{{ $domain->id }}">{{ $domain->name }}</option>
                                @endforeach
                            </x-native-select>
                        </div>
                    @if (count($principalActivity) > 0)
                        <div class="mt-4">
                            <x-label for="name" :value="__('Activité principale')"/>
                            <x-native-select  wire:model="activity_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600">
                                <option value="" selected >Choisir</option>
                                @foreach ($principalActivity as $principalActivity)
                                    <option  value="{{ $principalActivity->id }}">{{ $principalActivity->name }}</option>
                                @endforeach
                            </x-native-select>
                        </div>
                    @endif
                    </section>
                </section>
                <section class=" w-1/3 p-4  items-center">
                    <div class="bg-white  mx-auto  rounded shadow-lg py-4 text-left px-6" >
                        <p class="text-xl">Infomations Concernant les domaines</p>
                    </div>
                </section>
            </div>
        @endif

        {{-- Step 2 --}}

        @if ($currentStep == 2)
        <div class="step-2 flex">
            <section class="w-2/3 rounded shadow-lg py-4 p-4">
                <div class="flex">
                    <div class="w-2/3">
                        <p class="text-xl"> Renseignez le centre des impot de votre entreprise et le type d'entreprise</p>
                    </div>
                    <div class="w-1/3 text-right">
                        <p class="text-xl">Etape 2/4</p>
                    </div>
                </div>


                <div class="flex space-x-2" >
                    <div class="mt-4 w-1/2">
                        <x-label id="centre" :value="__('Centre des impôts gestionnaire')"  />
                        <x-native-select  wire:model="tax_center_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600"  {{-- name="type_company_id" --}}>
                            <option value=""></option>
                            @foreach ($taxCenter as $taxCenter)
                                <option value="{{ $taxCenter->id }}">{{ $taxCenter->name }}</option>
                            @endforeach
                        </x-native-select>
                    </div>
                    <div class="mt-4 w-1/2">
                        <x-label for="name" :value="__('Type entreprise')"/>
                        <x-native-select  wire:model="type_company_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600"  {{-- name="type_company_id" --}}>
                            <option value=""></option>
                            @foreach ($type as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </x-native-select>
                    </div>
                </div>
            </section>
            <section class=" w-1/3 p-4  items-center">
                <div class="bg-white  mx-auto  rounded shadow-lg py-4 text-left px-6" >
                    <p class="text-xl">Infomations Concernant  le centre des impot de votre entreprise et le type d'entreprise</p>
                </div>
            </section>
        </div>

        @endif

        {{-- Step 3 --}}

        @if ($currentStep == 3)
        <div class="step-3 flex">
            <section class=" w-2/3 rounded shadow-lg py-4 p-4">
                <div class="flex">
                    <div class="w-2/3">
                        <p class="text-xl">Quels est/sont les catégories d'activité de l'entreprise?</p>
                    </div>
                    <div class="w-1/3 text-right">
                        <p class="text-xl">Etape 3/4</p>
                    </div>
                </div>
                <div class="mt-4 pb-2">
                    <x-label for="name" :value="__('Catégorie d\'activité')"/>
                    <div class="mt-4  space-y-4">
                        @foreach ($typeCat as $typeCat)
                        <div class="">
                               <span>{{ $typeCat->name }}</span>

                               <x-native-select wire:model="sub_category_id.{{ $typeCat->id }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600">
                                   <option value=""></option>
                                   @foreach ($typeCat->detailType as $subCat)
                                        <option value="{{ $subCat->id }}">{{ $subCat->name }}</option>
                                   @endforeach

                               </x-native-select>
                            {{-- <input type="checkbox" wire:model="category_id" id="" value="{{ $typeCat->id }}" > --}}
                        </div>
                        @endforeach

                    </div>
                </div>
            </section>
            <section class=" w-1/3 p-4  items-center">
                <div class="bg-white  mx-auto  rounded shadow-lg py-4 text-left px-6" >
                    <p class="text-xl">Infomations Concernant les catégories d'activité d'une entreprise</p>
                </div>
            </section>
        </div>
        @endif
        {{-- Step 4 --}}
        @if ($currentStep == 4)

        <div class="step-4 mx-auto w-10/12 rounded shadow-lg p-4 py-4">

                <div class="flex">
                    <div class="w-2/3">
                        <p class="text-xl"> En dernier, renseignez les diverses informations de votre entreprise</p>
                    </div>
                    <div class="w-1/3 text-right">
                        <p class="text-xl">Etape 4/4</p>
                    </div>
                </div>
                <div class="flex space-x-2" >
                    <div class="mt-4 w-1/2">
                        <x-label for="name" :value="__('Non de l\'entreprise')"/>
                        <x-input type="text"
                                id="name"
                                wire:model="name" {{-- name="name" --}}
                                class="block w-full"
                                value="{{ old('name') }}"

                                autofocus/>
                    </div>

                    <div class="mt-4 w-1/2">
                        <x-label for="email" :value="__('Email')"/>
                        <x-input  wire:model="email" {{-- name="email" --}}
                                type="email"
                                class="block w-full"
                                value="{{ old('email') }}"/>
                    </div>

                </div>
                <div class="mt-4">
                    <x-label for="created_date" :value="__('Date de création')"/>
                    <x-input  wire:model="created_date" {{-- name="created_date" --}}
                            type="date"
                            class="block w-full"
                            value="{{ old('created_date') }}"/>
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
                                  label="RCCM"
                        class="block w-full"
                        value="{{ old('rccm') }}"/>
                    </div>
                    <div class="mt-4 w-1/2">
                        <x-label for="rccm" :value="__('Justificatif')"/>
                        <input type="file" class="mt-2"  wire:model="path_rccm" {{-- name="path_rccm" --}} id="path">
                    </div>


                </div>
                <div class="flex space-x-2">
                    <div class="mt-4 w-1/2">
                        <x-label id="celphone" :value="__('Numéro de téléphone')"/>
                        <x-input  wire:model="celphone" {{-- name="celphone" --}}
                        type="text"
                        class="block w-full"
                        value="{{ old('celphone') }}"/>
                    </div>
                 </div>

        </div>
        @endif
        {{-- les buttons --}}
        <div class="action-buttons justify-between flex space-x-4 mt-6 bg-white pt-2 pb-2">
            @if ($currentStep == 1)
            <div></div>
            @endif
            @if ($currentStep == 2 || $currentStep == 3 ||  $currentStep == 4 )
            <button type="button" class="w-1/3 text-white rounded-md text-center p-2 bg-gray-500" wire:click="decreaseStep()"> Précédent</button>
            @endif
            @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3 )
            <div></div>
            <button type="button" class="w-1/3 text-white rounded-md text-center p-2 bg-green-500" wire:click="increaseStep()"> Suivant</button>

            @endif

            @if ($currentStep == 4)
            <button type="submit" class="w-1/3 text-white rounded-md text-center p-2 bg-blue-700" > Creer mon entreprise </button>

            @endif


        </div>

    </form>
</div>
