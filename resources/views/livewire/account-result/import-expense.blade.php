<div class="py-10 pl-10 pr-4 w-full" >
    <div x-data="globalData" class="flex justify-between pr-10 mb-6" >
        <h5 class="text-base text-gray-600 font-semibold" >Charges </h5>
        <x-form.button href="{{ asset('model-excel/model-produit.xlsx')  }}"  download="" flat secondary icon="download" label="Télécharger un model" />
    </div>
    <form  wire:submit.prevent="save">
        <x-input.filepond wire:model="file" x-ref="file"  data-max-files="1" required  />

{{--        <div class="flex  " >--}}
            <x-button type="submit" class=" ml-auto"  label="Importez"> Importer </x-button>
{{--        </div>--}}
    </form>

</div>
