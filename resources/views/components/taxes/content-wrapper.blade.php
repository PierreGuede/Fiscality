@props(['footer', 'company'=> null ])


<h5 class="text-3xl font-semibold text-blue-900">Impôts</h5>

<div class="flex mt-6 gap-x-2 ">
    <x-taxes.aside :company="$company" />
    <div class="w-full  bg-white min-h-[60vh] rounded">
        <div class="p-8 flex flex-col justify-between h-full  ">
            <div class=" divide-y-2 ">

                {{ $slot  }}

            </div>
            <div class="mt-auto">
                {{ $footer ?? ''  }}
            </div>
        </div>
    </div>
</div>
