<main x-data="{ step: @entangle('step') }" x-init="step = 1" >
    <div class="mx-auto my-6 max-w-screen-lg">
        <div class="flex gap-x-6">
            <div class="flex items-center gap-x-2">
                <div>
                    <div @class([
                                'rounded-full p-1',
                                'bg-blue-500' => $step >= 1,
                                'bg-gray-300' => $step < 1
                                ])
                         ></div>
                </div>
                <h5
                    @class([
                            'text-blue-500' => $step >= 1,
                            'text-gray-700' => $step < 1
                    ])
                    :class=" step >= 1 ? 'text-blue-500' : 'text-gray-700'">Abonnement</h5>
            </div>

            <div class="flex items-center gap-x-2">
                <div>
                    <div @class([
                                'rounded-full p-1',
                                'bg-blue-500' => $step >= 2,
                                'bg-gray-300' => $step < 2
                                ])
                    ></div>
                </div>
                <h5
                    @class([
                          'text-blue-500' => $step >= 2,
                          'text-gray-700' => $step < 2
                  ])
                >Informations</h5>
            </div>

            <div class="flex items-center gap-x-2">
                <div>
                    <div @class([
                                'rounded-full p-1',
                                'bg-blue-500' => $step >= 3,
                                'bg-gray-300' => $step < 3
                                ])
                    ></div>
                </div>
                <h5   @class([
                          'text-blue-500' => $step >= 3,
                          'text-gray-700' => $step < 3
                  ])
                >Récapitulatif</h5>
            </div>
        </div>

        <div x-show="step == 1" class="pt-6">
            <h2 class="text-3xl font-bold text-gray-700">Abonnement</h2>
        </div>

        <div x-show="step == 2" class="pt-6">
            <h2 class="text-3xl font-bold text-gray-700">Information</h2>
        </div>

        <div x-show="step == 3" class="pt-6">
            <h2 class="text-3xl font-bold text-gray-700">Récapitulatif</h2>
            <p class="text-gray-500">Veuille vérifiez toutes les informations renseignées avant d'effectuer le paiement</p>
        </div>


    </div>

    <div>

    </div>

    <!-- Progress bar -->
    <div class="my-8 w-full bg-gray-200">
        <div class=" bg-blue-500 py-0.5" :class="{ 'w-1/3': step == 1} "  ></div>
    </div>

    <form wire:submit.prevent="save" class="mx-auto max-w-screen-lg mb-4">
        <div class="max-w-lg" >

        @if($step == 1)
            <div >
                <x-first-step :packs="$packs" />
            </div>
        @endif

        @if($step == 2)
            <div >
                <x-second-step />
            </div>
        @endif

            @if($step == 3)
        <div  >
            <x-third-step :managementType="$management_type"
                          :packs="$packs"
                          :selectedPack="$pack"
                          :social_reason="$social_reason"
                          :ifu="$ifu"
                          :rccm="$rccm"
            />
        </div>
            @endif

        <div  class="max-w-lg mt-6 flex justify-between">
            <div>
                <x-form.button x-show="step > 1 && step <= 3" type="button" flat icon="arrow-left" sm  label="Revenir en arrière" @click="step =  Math.max(1, step -1) " />
            </div>
            <div>
                <x-form.button x-show="step >= 1 && step < 3" type="button" flat right-icon="arrow-right" sm  label="Suivant" @click="step =  Math.max(1, step +1)" />

                <input class="hidden" id="price" type="number" value="{{ $price  }}" >
                <x-form.button id="payment" x-show="step ==  3" blue  @click="handlePayment($wire.price)"  sm  label="Payer"  />
            </div>
        </div>
        </div>
    </form>

</main>
