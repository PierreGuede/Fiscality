<div x-data="{ openASide: false }" class="max-w-5xl w-full mx-auto pt-12 ">
    <h2 class="py-4 text-2xl font-semibold text-gray-700">Autre réintégration</h2>
    <div class=" grid grid-cols-12  ">
        <p class="col-span-7 p-3   text-lg text-gray-700 font-semibold  ">Intitulé</p>
        <div class="col-span-3 p-3 text-lg text-gray-700 font-semibold   "><p>Montant</p></div>
        <div class="col-span-2  p-3  "><p></p></div>
    </div>

    @livewire('other-reintegration.edit-financial-cost', ['company' => $company ])
    @livewire('other-reintegration.detail-financial-cost', ['company' => $company ])

    @livewire('other-reintegration.edit-commission-on-purchases', ['company' => $company ])
    @livewire('other-reintegration.detail-commission-on-purchases', ['company' => $company ])

    @livewire('other-reintegration.edit-redevance', ['company' => $company ])
    @livewire('other-reintegration.detail-redevance', ['company' => $company ])

    @livewire('other-reintegration.detail-assistance-cost', ['company' => $company ])
    @livewire('other-reintegration.edit-assistance-cost', ['company' => $company ])

    @livewire('other-reintegration.edit-donation-grant-contributions', ['company' => $company ])
    @livewire('other-reintegration.detail-donation-grant-contributions', ['company' => $company ])

    @livewire('other-reintegration.edit-advertising-gift', ['company' => $company ])
    @livewire('other-reintegration.detail-advertising-gift', ['company' => $company ])

    @livewire('other-reintegration.edit-excess-rent', ['company' => $company ])
    @livewire('other-reintegration.detail-excess-rent', ['company' => $company ])

    <form class="space-y-4" wire:submit.prevent="save">


        <div class=" grid grid-cols-12   ">
            <p class="col-span-7 my-auto px-2">Charges ne se rapportant pas à l'exercice (et non provisionnées)</p>
            <div class="col-span-3 ">
                <x-input step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="expense_not_related" value="{{ old('username') }}" class="w-full " required
                         autofocus/>
            </div>
            <div class="col-span-2">

            </div>
        </div>
        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 my-auto px-2 ">
                Charges non justifiés par des factures normalisées
            </p>
            <div class="col-span-3 ">
                <x-input step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="unjustfified_expense" value="{{ old('username') }}" class="w-full " required
                         autofocus/>
            </div>
            <div class="col-span-2">

            </div>
        </div>
        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 my-auto px-2 ">
                Rémunération n'ayant pas fait l'objet de retenues à la source
            </p>
            <div class="col-span-3 ">
                <x-input step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="remuneration_not_subject_withholding_tax" value="{{ old('username') }}"
                         class="w-full " required autofocus/>
            </div>
            <div class="col-span-2">

            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 my-auto px-2 ">
                Frais financier
            </p>
            <div class="col-span-3 ">
                <x-input step="any" :disabled="true" type="number" label="" id="username" name="username"
                         wire:model.defer="financial_cost" value="{{ old('username') }}" class="w-full " required
                         autofocus/>
            </div>
            <div class="col-span-1 mx-auto my-auto ">

                <button type="button"  onclick="Livewire.emitTo('other-reintegration.edit-financial-cost', 'openASide')"
                        class="focus:outline-none hover:bg-blue-100 p-1.5 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  class="stroke-2 stroke-blue-500 w-6 w-6 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                </button>

                <button type="button"  onclick="Livewire.emitTo('other-reintegration.detail-financial-cost', 'openASide')"
                        class="focus:outline-none hover:bg-green-100 p-1.5 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="stroke-2 stroke-green-400 w-6 w-6 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>

                </button>

            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 my-auto px-2 ">
                Commission sur achats
            </p>
            <div class="col-span-3 ">
                <x-input step="any" :disabled="true" type="number" label="" id="username" name="username"
                         wire:model.defer="commission_on_purchase" value="{{ old('username') }}" class="w-full "
                         required autofocus/>
            </div>
            <div class="col-span-1 mx-auto my-auto">
                <button type="button"  onclick="Livewire.emitTo('other-reintegration.edit-commission-on-purchases', 'openASide')"
                        class="focus:outline-none hover:bg-blue-100 p-1.5 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  class="stroke-2 stroke-blue-500 w-6 w-6 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                </button>

                <button type="button"  onclick="Livewire.emitTo('other-reintegration.detail-commission-on-purchases', 'openASide')"
                        class="focus:outline-none hover:bg-green-100 p-1.5 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="stroke-2 stroke-green-400 w-6 w-6 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>

                </button>

            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 my-auto px-2 ">
                Commission verser au courtier d'assurance ne disposant de

            </p>
            <div class="col-span-3 ">
                <x-input step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="commission_insurance_broker" value="{{ old('username') }}" class="w-full "
                         required autofocus/>
            </div>
            <div class="col-span-2">

            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 my-auto px-2 ">
                Redevance
            </p>
            <div class="col-span-3 ">
                <x-input step="any" :disabled="true" type="number" label="" id="username" name="username"
                         wire:model.defer="redevance" value="{{ old('username') }}" class="w-full " required autofocus/>
            </div>
            <div class="col-span-1 mx-auto my-auto">
                <button type="button"  onclick="Livewire.emitTo('other-reintegration.edit-redevance', 'openASide')"
                        class="focus:outline-none hover:bg-blue-100 p-1.5 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  class="stroke-2 stroke-blue-500 w-6 w-6 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                </button>

                <button type="button"  onclick="Livewire.emitTo('other-reintegration.detail-redevance', 'openASide')"
                        class="focus:outline-none hover:bg-green-100 p-1.5 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="stroke-2 stroke-green-400 w-6 w-6 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>

                </button>

            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 my-auto px-2 ">
                Frais d'assistance technique comptable et financière
            </p>
            <div class="col-span-3 ">
                <x-input step="any" :disabled="true" type="number" label="" id="username" name="username"
                         wire:model.defer="accountind_financial_technical_assistance_costs"
                         value="{{ old('username') }}" class="w-full " required autofocus/>
            </div>
            <div class="col-span-1 mx-auto my-auto">
                <button type="button"  onclick="Livewire.emitTo('other-reintegration.edit-assistance-cost', 'openASide')"
                        class="focus:outline-none hover:bg-blue-100 p-1.5 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  class="stroke-2 stroke-blue-500 w-6 w-6 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                </button>

                <button type="button"  onclick="Livewire.emitTo('other-reintegration.detail-assistance-cost', 'openASide')"
                        class="focus:outline-none hover:bg-green-100 p-1.5 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="stroke-2 stroke-green-400 w-6 w-6 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>

                </button>

            </div>
        </div>


        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 my-auto px-2 ">
                Intérêts verser par un établissement stable au siège
            </p>
            <div class="col-span-3 ">
                <x-input step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="interest_paid" value="{{ old('username') }}" class="w-full " required
                         autofocus/>
            </div>
            <div class="col-span-2">

            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 my-auto px-2 ">
                Dons, subventions et cotisations
            </p>
            <div class="col-span-3 ">
                <x-input step="any" :disabled="true" type="number" label="" id="username" name="username"
                         wire:model.defer="donation_grant_contribution" value="{{ old('username') }}" class="w-full "
                         required autofocus/>
            </div>
            <div class="col-span-1 mx-auto my-auto">
                <button type="button"  onclick="Livewire.emitTo('other-reintegration.detail-assistance-cost', 'openASide')"
                        class="focus:outline-none hover:bg-blue-100 p-1.5 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  class="stroke-2 stroke-blue-500 w-6 w-6 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                </button>

                <button type="button"  onclick="Livewire.emitTo('other-reintegration.detail-donation-grant-contributions', 'openASide')"
                        class="focus:outline-none hover:bg-green-100 p-1.5 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="stroke-2 stroke-green-400 w-6 w-6 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>

                </button>

            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 my-auto px-2 ">
                Cadeaux publicitaires
            </p>
            <div class="col-span-3 ">
                <x-input step="any" :disabled="true" type="number" label="" id="username" name="username"
                         wire:model.defer="advertising_gift" value="{{ old('username') }}" class="w-full " required
                         autofocus/>
            </div>
            <div class="col-span-1 mx-auto my-auto">
                <button type="button"  onclick="Livewire.emitTo('other-reintegration.edit-advertising-gift', 'openASide')"
                        class="focus:outline-none hover:bg-blue-100 p-1.5 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  class="stroke-2 stroke-blue-500 w-6 w-6 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                </button>

                <button type="button"  onclick="Livewire.emitTo('other-reintegration.detail-advertising-gift', 'openASide')"
                        class="focus:outline-none hover:bg-green-100 p-1.5 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="stroke-2 stroke-green-400 w-6 w-6 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>

                </button>

            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 my-auto px-2 ">
                Dépenses Somptuaires
            </p>
            <div class="col-span-3 ">
                <x-input step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="sumptuary_expenses" value="{{ old('username') }}" class="w-full " required
                         autofocus/>
            </div>
            <div class="col-span-2">

            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 my-auto px-2 ">
                Rémunération occultes
            </p>
            <div class="col-span-3 ">
                <x-input step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="occult_remuneration" value="{{ old('username') }}" class="w-full " required
                         autofocus/>
            </div>
            <div class="col-span-2">

            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 my-auto px-2 ">
                Taxe sur les véhicules à moteur
            </p>
            <div class="col-span-3 ">
                <x-input step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="motor_vehicle_tax" value="{{ old('username') }}" class="w-full " required
                         autofocus/>
            </div>
            <div class="col-span-2">

            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 my-auto px-2 ">
                impôt sur les bénéfices
            </p>
            <div class="col-span-3 ">
                <x-input step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="income_tax" value="{{ old('username') }}" class="w-full " required
                         autofocus/>
            </div>
            <div class="col-span-2">

            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 my-auto px-2 ">
                Amendes et pénalités
            </p>
            <div class="col-span-3 ">
                <x-input step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="fines_penalities" value="{{ old('username') }}" class="w-full " required
                         autofocus/>
            </div>
            <div class="col-span-2">

            </div>
        </div>

        {{--        OtherReintegration::create([--}}
        {{--
                    'other_non_deductible_expense' => $this->other_non_deductible_expense,
                    'variation_conversation_gap' => $this->variation_conversation_gap,
                    'excess_rent' => $this->excess_rent,
                    'other_non_deductible_expenses' => $this->other_non_deductible_expenses,
                    'company_id' => $this->company->id,{--        ]);--}}


        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 my-auto px-2 ">
                Immobilisations passées
            </p>
            <div class="col-span-3 ">
                <x-input step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="past_assets" value="{{ old('username') }}" class="w-full " required
                         autofocus/>
            </div>
            <div class="col-span-2">

            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 my-auto px-2 ">
                Autres charges non déductibles
            </p>
            <div class="col-span-3 ">
                <x-input step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="other_non_deductible_expense" value="{{ old('username') }}" class="w-full "
                         required autofocus/>
            </div>
            <div class="col-span-2">

            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 my-auto px-2 ">
                Variation de l'écart de conversation
            </p>
            <div class="col-span-3 ">
                <x-input step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="variation_conversation_gap" value="{{ old('username') }}" class="w-full "
                         required autofocus/>
            </div>
            <div class="col-span-2">

            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 my-auto px-2 ">
                Surplus de loyers (véhiculede tourisme)
            </p>
            <div class="col-span-3 ">
                <x-input step="any" :disabled="true" type="number" label="" id="username" name="username"
                         wire:model.defer="excess_rent" value="{{ old('username') }}" class="w-full " required
                         autofocus/>
            </div>
            <div class="col-span-1 mx-auto my-auto ">

                <button type="button"  onclick="Livewire.emitTo('other-reintegration.edit-excess-rent', 'openASide')"
                        class="focus:outline-none hover:bg-blue-100 p-1.5 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  class="stroke-2 stroke-blue-500 w-6 w-6 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                </button>

                <button type="button"  onclick="Livewire.emitTo('other-reintegration.detail-excess-rent', 'openASide')"
                        class="focus:outline-none hover:bg-green-100 p-1.5 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="stroke-2 stroke-green-400 w-6 w-6 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>

                </button>

            </div>
        </div>

        <div class=" grid grid-cols-12  ">
            <p class="col-span-7 my-auto px-2 ">
                Autres charges non déductibles
            </p>
            <div class="col-span-3 ">
                <x-input step="any" type="number" label="" id="username" name="username"
                         wire:model.defer="other_non_deductible_expenses" value="{{ old('username') }}" class="w-full "
                         required autofocus/>
            </div>
            <div class="col-span-2">

            </div>
        </div>

        <x-button class="">Enregistrer</x-button>

    </form>
</div>

</div>
