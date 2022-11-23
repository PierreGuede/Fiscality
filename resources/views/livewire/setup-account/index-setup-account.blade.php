<main x-data="{ step: @entangle('step').defer }" >
    <div class="mx-auto my-6 max-w-screen-lg">
        <div class="flex gap-x-6">
            <div class="flex items-center gap-x-2">
                <div>
                    <div :class=" step >= 1 ? 'bg-blue-500' :' bg-gray-300'" class="rounded-full p-1"></div>
                </div>
                <h5 :class=" step >= 1 ? 'text-blue-500' : 'text-gray-700'">Compte</h5>
            </div>

            <div class="flex items-center gap-x-2">
                <div>
                    <div :class=" step == 2 ? 'bg-blue-500' :' bg-gray-300'" class="rounded-full p-1"></div>
                </div>
                <h5 :class=" step == 2 ? 'text-blue-500' : 'text-gray-700'">Informations</h5>
            </div>
        </div>

        <div x-show="step == 1" class="pt-6">
            <h2 class="text-3xl font-bold text-gray-700">Compte</h2>
            <p class="text-gray-500">Les informations concernant cette étape</p>
        </div>

        <div x-show="step == 2" class="pt-6">
            <h2 class="text-3xl font-bold text-gray-700">Information</h2>
            <p class="text-gray-500">Les informations concernant cette étape</p>
        </div>


    </div>

    <div>

    </div>

    <!-- Progress bar -->
    <div class="my-8 w-full bg-gray-200">
        <div class=" bg-blue-500 py-0.5" :class="{ 'w-1/2': step == 1} "  ></div>
    </div>

    <form wire:submit.prevent="save" class="mx-auto max-w-screen-lg mb-4">
        <div class="max-w-lg" >

        <div x-show="step == 1" >
{{--            @livewire('setup-account.first-step')--}}
            <x-first-step :packs="$packs" />
        </div>

        <div x-show="step == 2" >
            <x-second-step />
        </div>

        <div  class="max-w-lg mt-6 flex justify-between">
            <div>
                <x-form.button x-show="step == 2" type="button" flat icon="arrow-left" sm  label="Revenir en arrière" @click="step = 1 " />
            </div>
            <div>
                <x-form.button x-show="step == 1" type="button" flat right-icon="arrow-right" sm  label="Suivant" @click="step = 2" />

{{--                <kkiapay-widget   amount="{{ $price  }}"--}}
{{--                                key="cfa29b803b5611edafa2d398c4589a54"--}}
{{--                                              theme="#0095ff"--}}
{{--                                  position="center"--}}
{{--                                sandbox="true"--}}
{{--                                callback="http://localhost:8000/dashboard"--}}
{{--                >--}}

{{--                </kkiapay-widget>--}}

                <input class="hidden" id="price" type="number" value="{{ $price  }}" >
                <x-form.button id="payment" x-show="step == 2" blue  @click="handlePayment($wire.price)"  sm  label="Payer"  />
            </div>
        </div>
        </div>
    </form>

</main>
