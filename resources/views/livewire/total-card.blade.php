<div  class="flex max-w-4xl mt-8 mb-12 ">
    <p class="w-24 bg-blue-700 px-4 py-2.5 text-xl font-semibold text-blue-100">Total</p>
        {{ $total  }}
    <p class="w-full border border-blue-700 px-4 py-2.5 text-right text-lg font-semibold text-blue-900" x-text="formatNumber({{ $total  }})" ></p>
</div>
