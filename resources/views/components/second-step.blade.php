<div

    class="max-w-lg" >

    <div class="mt-6 space-y-4">
        {{--        Type de gestion--}}

        <div class="mt-4" >
            <x-input type="text" label="Raison sociale" id="social_reason" wire:model="social_reason" name="social_reason"
                     value="{{ old('ifu') }}" class="block w-full" required autofocus />
        </div>

        <div class="mt-4" >
            <x-input type="text" label="Téléphone" id="celphone" wire:model="celphone" name="celphone"
                     value="{{ old('celphone') }}" class="block w-full" required autofocus />
        </div>

        <x-datetime-picker
            label=""
            class="!rounded-sm !py-2.5 shadow-none border-gray-300"
            without-time="true"
            placeholder="Date de création"
            wire:model.defer="normal_picker"
            max="{{ \Carbon\Carbon::now() }}"
        />

        <div class="space-y-4" >
            <div class="mt-4">
                <x-input type="text" label="IFU" id="ifu" name="ifu"
                            wire:model.defer="ifu"
                         value="{{ old('ifu') }}" class="block w-full" required autofocus />
            </div>
{{--            <input wire:model.defer="ifu_file" data-name="ifu" type="file" name="ifu_file" data-max-files="1"/>--}}
            <x-input.filepond wire:model="ifu_file" x-ref="ifu_file"  data-max-files="1"  />



        </div>
        <div class="space-y-4" >
            <x-input type="text" label="RCCM" id="rccm" name="rccm"
                     wire:model.defer="rccm"
                     value="{{ old('rccm') }}" class="block w-full" required autofocus />
{{--            <input wire:model.defer="rccm_file" data-name="rccm" type="file" name="rccm_file" data-max-files="1"/>--}}
            <x-input.filepond wire:model="rccm_file" x-ref="rccm_file"  data-max-files="1"  />

        </div>

    </div>

</div>

