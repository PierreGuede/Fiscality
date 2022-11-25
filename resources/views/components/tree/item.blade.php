@props(['title'=> '', 'hideLink' => false, 'total' => '' , 'description' => ''])

<div class="w-full">
    <div class=" mx-auto  w-full border-2 rounded-sm p-4 border-blue-700 bg-white shadow-lg shadow-blue-200 " >
        <div class="w-full flex justify-between text-slate-700 font-semibold text-sm mb-6" >
            <p>{{ $title  }}</p>
            <p> {{ empty($total) ? 0 : $total  }} </p>
        </div>
        <p class="text-xs text-slate-500">
            {{ $description  }}
        </p>
    </div>
    @if(!$hideLink)
        <div class="w-2 h-16 bg-blue-400 mx-auto" ></div>
    @endif
</div>
