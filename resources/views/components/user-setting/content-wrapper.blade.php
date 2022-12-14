@props(['footer'])

<x-app-layout>

    <h5 class="text-3xl font-semibold text-blue-900">Paramètre</h5>

    <div class="flex mt-6 gap-x-2 ">
        <x-user-setting.aside/>
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
</x-app-layout>
