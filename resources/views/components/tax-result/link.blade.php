@props(['name' => '', 'active' => false])


<a :class=" { 'bg-blue-200 border-l-4 border-l-blue-900 bg-blue-200 border-l-4 border-l-blue-900': {{ $active  }} }  "   {{ $attributes->merge(['class' => 'w-full block text-left px-2.5 py-2 text-sm font-semibold text-blue-900 hover:bg-slate-200 rounded hover:border-l-4 hover:border-l-slate-400 transition-all']) }}  >
    {{ $name  }}
</a>


