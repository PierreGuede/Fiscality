@props([ 'company'=> null ])


{{--<h5 class="text-3xl font-semibold text-blue-900">Paramètre</h5>--}}

<div class="flex mt-6 gap-x-2 ">
    <x-tax-result.aside :company="$company" />
    <div class="w-full  min-h-[60vh] rounded">
        <div class=" flex flex-col justify-between h-full  ">
            <div class=" divide-y-2 ">

                {{ $slot  }}

            </div>
{{--            <div class="mt-auto">--}}
{{--                {{ $footer ?? ''  }}--}}
{{--            </div>--}}
        </div>
    </div>
</div>
