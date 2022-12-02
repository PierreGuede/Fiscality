@props(['active' => false, 'label' => 'Label' ,'icon' => 'office-bulding'])

<a :class="{ 'bg-blue-700': {{ $active  }} }"   :class="!openSidebar && 'justify-center'" {{ $attributes->merge(['class' => 'group relative mt-2 flex h-8 w-full items-center rounded px-3 hover:bg-blue-700']) }} >
    <x-icon name="{{ $icon  }}" class="w-4 h-4 stroke-current shrink-0" />
    <span x-show="openSidebar" class="ml-2 text-sm font-medium transition-all line-clamp-1 ">{{ $label  }}</span>
    <div class="absolute scale-0 group-hover:scale-100 transition-all duration-300 -right-full translate-x-8 w-full bg-gray-700 text-white text-sm py-1.5 px-2.5 rounded-md " >
        <div class="relative " >
            <p> {{ $label  }} </p>
            <span class=" absolute top-1/2 -translate-y-1/2 -translate-x-1/2 -left-6  bg-gray-700 rounded-full w-3 h-3 block rotate-90 origin-center  " >  </span>
        </div>
    </div>
</a>
