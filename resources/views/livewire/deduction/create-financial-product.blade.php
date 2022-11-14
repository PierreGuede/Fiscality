<div
    x-show="$wire.open_a_side"
    x-cloak
    x-transition
    class="fixed bg-white/30 backdrop-blur-sm w-full  top-0 left-0  h-screen z-50  ">
    <button wire:click="closeASide"
            class="absolute outline-none group top-2 -translate-x-full  left-[calc(50%-0.2rem)] bg-white rounded-full p-2 z-50 ">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
             class="w-6 h-6 group-hover:rotate-45 duration-300 hover:transition-all ">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
        </svg>

    </button>
    <div  x-data="{  product_net_ircm_amount: 0, product_rate: 0, other_net_ircm_amount: 0, other_rate: 0    } "  class="relative overflow-y-auto w-1/2 bg-white h-full ml-auto  px-12">

        <form wire:submit.prevent="save">

            <p class="text-2xl font-semibold text-gray-700 my-6">Produits financiers</p>


            <div class="space-y-6 w-4/5" >

                <p class="text-lg font-semibold text-gray-700 my-6">Produits des titres émis par l'Etat Béninois, les collectivités publiques béninoises et leurs démembrements</p>
                <div class="">
                    <x-input :disabled="false"
                             class="w-full" for="product_net_ircm_amount"
                             type="number" id="product_net_ircm_amount" label="Montant net d'IRCM"
                             x-model="product_net_ircm_amount"
                             wire:model.defer="product_net_ircm_amount"
                             placeholder="Compte" class="" required autofocus/>
                    @error('product_net_ircm_amount')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="">
                    <x-input :disabled="false"
                             step="any"
                             class="w-full" for="product_rate"
                             type="number" id="product_rate" label="Taux"
                             x-model="product_rate"
                             wire:model.defer="product_rate"
                             placeholder="Compte" class="" required autofocus/>
                    @error('product_rate')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="">
                    <x-input :disabled="false"
                             step="any"
                             class="w-full" for="product_amount_deduct"
                             type="number" id="product_amount_deduct" label="Montant à déduire"
                             wire:model.defer="product_amount_deduct"
                             x-bind:value="((1/product_rate) * product_net_ircm_amount)"
                             placeholder="Compte" class="" required autofocus/>
                    @error('product_amount_deduct')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>

{{--            Autres produits RCM--}}
            <div class="space-y-6 w-4/5" >

                <p class="text-lg font-semibold text-gray-700 my-6">Autres produits RCM</p>
                <div class="">
                    <x-input :disabled="false"
                             step="any"
                             class="w-full" for="other_net_ircm_amount"
                             type="number" id="other_net_ircm_amount" label="Montant net d'IRCM"
                             x-model="other_net_ircm_amount"
                             wire:model.defer="other_net_ircm_amount"

                             placeholder="Compte" class="" required autofocus/>
                    @error('other_net_ircm_amount')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="">
                    <x-input :disabled="false"
                             step="any"
                             class="w-full" for="other_rate"
                             type="number" id="other_rate" label="Taux"
                             wire:model.defer="other_rate"
                             x-model="other_rate"
                             placeholder="Compte" class="" required autofocus/>
                    @error('other_rate')other_rate
                    <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="">
                    <x-input :disabled="false"
                             step="any"
                             class="w-full" for="other_amount_deduct"
                             type="number" id="other_amount_deduct" label="Montant à déduire"
                             wire:model.defer="other_amount_deduct"
                             x-bind:value="((1/other_rate) * other_net_ircm_amount) "
                             placeholder="Compte" class="" required autofocus/>
                    @error('product_amount_deduct')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-4 flex justify-end  ">
                    <x-button >Enregistrer</x-button>
                </div>
            </div>

        </form>

    </div>

</div>
</div>
