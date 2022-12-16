<div class="py-10 pl-10 px-10 w-full" >
    <div x-data="globalData" class="flex justify-between mb-6" >
        <h5 class="text-base text-gray-600 font-semibold" >Produits </h5>
{{--        <form >--}}
            <x-form.button href="{{ asset('model-excel/model-produit.xlsx')  }}"  download="" flat secondary icon="download" label="Télécharger un model" />
{{--        </form>--}}
    </div>
    <form  wire:submit.prevent="save">
        <x-input.filepond wire:model="file" x-ref="file"  data-max-files="1"  />

{{--        <div class="flex  " >--}}
            <x-button type="submit" class="ml-auto"  label="Importez"> Importer </x-button>
{{--        </div>--}}
    </form>

</div>
