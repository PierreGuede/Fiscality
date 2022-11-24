<div class="max-w-lg" >
{{--    <h5 class="text-gray-500">Choisissez un mode de gestion</h5>--}}
{{--    <p class="text-lg font-semibold text-gray-700">Mettons un petit detail ici</p>--}}

    <div class="mt-6 space-y-4">
        {{--        Type de gestion--}}


        <div class="mt-4" >
            <x-input type="text" label="Raison sociale" id="social_reason" name="social_reason"
                 value="{{ old('ifu') }}" class="block w-full" required autofocus />
        </div>

        <x-datetime-picker
            label=""
            class="rounded-sm shadow-none border-gray-300"
            without-time="true"
            placeholder="Date de création"
            wire:model.defer="normalPicker"
        />

        <div class="space-y-4" >
            <div class="mt-4">
                <x-input type="text" label="IFU" id="ifu" name="ifu"
                         value="{{ old('ifu') }}" class="block w-full" required autofocus />
            </div>
            <input data-name="ifu" type="file" name="ifu" data-max-files="1"/>
        </div>
        <div class="space-y-4" >
            <x-input type="text" label="RCCM" id="rccm" name="rccm"
                     value="{{ old('ifu') }}" class="block w-full" required autofocus />
            <input data-name="rccm" type="file" name="rccm" data-max-files="1"/>

        </div>


        <kkiapay-widget amount="20000"
                        key="cfa29b803b5611edafa2d398c4589a54"
{{--                        url="<url-vers-votre-logo>"--}}
                        position="center"
                        sandbox="true"
{{--                        data=""--}}
                        callback="http://localhost:8000/dashboard">
        </kkiapay-widget>

    </div>

</div>

