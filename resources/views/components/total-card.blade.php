@props(['total' => 0, 'label'])

<div  class="flex max-w-4xl mt-8 border border-blue-700 mb-12 ">
    @if(empty($label))
        <p class="w-24 bg-blue-700 px-4 py-2.5 text-xl font-semibold text-blue-100">Total</p>
    @else
        <p class=" w-full  px-4 py-2.5 text-lg font-medium text-blue-900"> {{ $label  }} </p>
    @endif
    <p class="w-full  px-4 py-2.5 text-right text-lg font-semibold text-blue-900" x-text="formatNumber({{ $total  }})" ></p>
</div>
