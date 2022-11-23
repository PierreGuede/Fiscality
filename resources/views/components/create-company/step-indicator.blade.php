@props(['current' => false, 'title' => '', 'description' => ''])

<div class="relative mt-8 flex justify-end gap-x-4 p-2">
    <div
        @class([
            'bg-blue-500 ring-2 ring-blue-150' => $current,
            'bg-blue-50' => ! $current,
            'translate-1/2 absolute -right-1.5 top-[calc(50%-0.5rem)] aspect-square h-2.5 w-2.5 rounded-full border-2 border-blue-500' => true
        ])
        ></div>
    <div class="text-right">
        <!-- Step name -->
        <p class="font-semibold">{{$title}}</p>
        <p class="text-xs font-light">{{ $description  }} </p>
    </div>
    <div
        @class([
            'bg-blue-500 text-blue-100' => $current,
             'bg-blue-100 text-blue-600' => ! $current,
             'mr-4 flex aspect-square h-12 items-center justify-center rounded-full' => true
        ])
    >
        <x-icon name="user" class="stroke-2 w-6 h-6 aspect-square" />
    </div>
</div>
