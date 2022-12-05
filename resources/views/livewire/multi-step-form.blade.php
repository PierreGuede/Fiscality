<div class="text-blue-900">
    <x-notifications position="top-left" />
    <div class="">
        <div>
            <h5 class="text-3xl font-bold">Créer une entreprise</h5>
            <p class="text-xs font-light">Suivez les 4 étapes pour créer une nouvelle entreprise</p>
        </div>


        <div class="mt-12 grid grid-cols-4 border-t-2 border-t-blue-300">
            <!-- Step title -->
            <div class="col-span-1 h-full border-r-2 border-r-blue-300">

                    <x-create-company.step-indicator :current="$currentStep >= 1" title="Domaine"
                                                     description="Domaine d'intervention"/>
                    <x-create-company.step-indicator :current=" $currentStep >= 2 " title="Impôt"
                                                     description="Centres des impôts"/>
                    <x-create-company.step-indicator :current="$currentStep >= 3 " title="Activité"
                                                     description="Domaine d'activité"/>
                    <x-create-company.step-indicator :current="$currentStep >= 4 " title="Autres informations"
                                                     description="Inforamtion suplémentaire"/>
            </div>
            <!-- Step Content -->
            <div class="col-span-3 px-4">
                <div>
                    {{--    <x-auth-validation-errors :errors="$errors"  class="fixed top-2 right-5 w-1/3 bg-gray-200 border-l-4 rounded-md border-red-800 p-4 text-black"/>--}}
                    <form
                        wire:submit.prevent="save" >
                        {{-- Step 1 --}}
                        @if ($currentStep == \App\Http\Livewire\MultiStepForm::FIRST_STEP)
                            <section class=" w-10/12  p-4">
                                <section class="w-full p-4 h-full items-center">
                                    <div class="mt-4">
                                        <x-label for="name" :value="__('Domaine d\'activités')"/>
                                        <x-native-select label="Domaine d'activité de votre entreprise"
                                                         wire:change="findActivity" wire:model="domain_id"
                                                         class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600">
                                            <option value=""></option>
                                            @foreach ($domain as $domain)
                                                <option value="{{ $domain->id }}">{{ $domain->name }}</option>
                                            @endforeach
                                        </x-native-select>
                                    </div>
                                    @if (count($principalActivity) > 0)
                                        <div class="mt-4">
                                            <x-label for="name" :value="__('Activité principale')"/>
                                            <x-native-select label="Activité principale " wire:model="activity_id"
                                                             class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600">
                                                <option value="" selected>Choisir</option>
                                                @foreach ($principalActivity as $principalActivity)
                                                    <option
                                                        value="{{ $principalActivity->id }}">{{ $principalActivity->name }}</option>
                                                @endforeach
                                            </x-native-select>
                                        </div>
                                    @endif
                                </section>
                            </section>

                        @endif

                        {{-- Step 2 --}}

                        @if ($currentStep == \App\Http\Livewire\MultiStepForm::SECOND_STEP)
                            <section class="w-10/12 p-4">
                                <div class="w-full">
                                    <div class="mt-4 ">
                                        <x-label id="centre" :value="__('Centre des impôts gestionnaire')"/>
                                        <x-native-select label="Centre des impôts gestionnaire"
                                                         wire:model="tax_center_id"
                                                         class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600" {{-- name="type_company_id" --}}>
                                            <option value=""></option>
                                            @foreach ($taxCenter as $taxCenter)
                                                <option value="{{ $taxCenter->id }}">{{ $taxCenter->name }}</option>
                                            @endforeach
                                        </x-native-select>
                                    </div>
                                    <div class="mt-4">
                                        <x-label for="name" :value="__('Type entreprise')"/>
                                        <x-native-select label="Type entreprise" wire:model="type_company_id"
                                                         class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600" {{-- name="type_company_id" --}}>
                                            <option value=""></option>
                                            @foreach ($type as $type)
                                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                            @endforeach
                                        </x-native-select>
                                    </div>
                                </div>
                            </section>
                        @endif

                        {{-- Step 3 --}}

                        @if ($currentStep == \App\Http\Livewire\MultiStepForm::THRID_STEP)
                            <div class="flex">
                                <section class=" w-10/12 p-4">
                                    <div class="mt-4 pb-2">
                                        <x-label for="name" :value="__('Catégorie d\'activité')"/>
                                        <div class="mt-4  space-y-4">
                                            @foreach ($typeCat as $typeCat)
                                                <div class="">
                                                    <x-native-select :label="$typeCat->name" wire:model="sub_category_id.{{ $typeCat->id }}"
                                                                     class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600">
                                                        <option value=""></option>
                                                        @foreach ($typeCat->detailType as $subCat)
                                                            <option
                                                                value="{{ $subCat->id }}">{{ $subCat->name }}</option>
                                                        @endforeach

                                                    </x-native-select>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </section>
                            </div>
                        @endif
                        {{-- Step 4 --}}

                        @if ($currentStep == \App\Http\Livewire\MultiStepForm::FOUTH_STEP)
                            <div class="  w-10/12 p-4">
                                    <div class="mt-4 ">
                                        <x-label for="name" :value="__('Non de l\'entreprise')"/>
                                        <x-input type="text"
                                                 label="Raison sociale"
                                                 id="name"
                                                 wire:model="name" {{-- name="name" --}}
                                                 class="block w-full"
                                                 value="{{ old('name') }}"
                                                {{--  wire:keydown="verifyData(name)" --}}
                                                 autofocus/>
                                    </div>

                                    <div class="mt-4">
                                        <x-label for="email" :value="__('Email')"/>
                                        <x-input wire:model="email" label="Email"
                                        type="email"
                                                 class="block w-full"
                                                 value="{{ old('email') }}"/>
                                    </div>

                                <div class="mt-4">
                                    <x-label for="created_date" :value="__('Date de création')"/>
                                    <x-datetime-picker
                                        label=""
                                        wire:model="created_date"
                                        class="rounded-sm shadow-none border-gray-300"
                                        without-time="true"
                                        placeholder="Date de création"
                                    />
                                </div>

                                    <div class="mt-4 ">
                                        <x-label for="ifu" :value="__('IFU')"/>
                                        <x-input label="IFU" wire:model="ifu" {{-- name="ifu" --}}
                                        type="text"
                                                 class="block w-full"
                                                 value="{{ old('ifu') }}"/>
                                    </div>
                                    <div class="mt-4 ">
                                        <x-label for="rccm" :value="__('Justificatif')"/>
                                    </div>

                                    <div class="mt-4">
                                        <x-label for="rccm" :value="__('RCCM')"/>
                                        <x-input wire:model="rccm" {{-- name="rccm" --}}
                                        type="text"
                                        label="RCCM"
                                        class="block w-full"
                                        value="{{ old('rccm') }}"/>
                                    </div>
                                    <div class="mt-4">
                                        <x-label id="celphone" :value="__('Numéro de téléphone')"/>
                                        <x-input label="Numéro de téléphone" wire:model="celphone" {{-- name="celphone" --}}
                                        type="text"
                                        class="block w-full"
                                        value="{{ old('celphone') }}"/>
                                    </div>
{{--                                     <div class="mt-4 space-y-2">
                                        <label for="path" class="text-sm text-gray-500">Justificatif IFU (facultatif)</label>
                                        <x-input.filepond wire:model="path" x-ref="path"  data-max-files="1"  />

                                        <label for="path_rccm" class="text-sm text-gray-500">Justificatif RCCM (facultatif)</label>
                                        <x-input.filepond wire:model="path_rccm" x-ref="path_rccm"  data-max-files="1"  />
                                    </div> --}}
                                </div>
                        @endif
                        {{-- les buttons --}}
                        <div class="w-10/12 justify-between flex space-x-4 mt-6  mt-4 p-4">
                            @if ($currentStep == 1)
                                <div></div>
                            @endif
                            @if ($currentStep > 1 )
                                <x-form.button wire:click="decreaseStep()" icon="chevron-left" secondary label="Précédent" />
                            @endif
                            @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3 )
                                    <x-form.button wire:click="increaseStep()"  right-icon="chevron-right" primary label="Suivant" />

                                @endif

                            @if ($currentStep == 4)
                                <x-form.button type="submit" positive label="Enregistrer" />
                            @endif


                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
