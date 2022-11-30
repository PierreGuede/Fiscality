@props(['disabled' => false, 'id' => '', 'name' => '', 'label' => '', 'errors' ])

<div>
    <div class="relative">
        <input {{ $disabled ? 'disabled' : '' }} id="{{ $id }}" name="{{ $name }}" {!! $attributes->merge([
            'class' =>
                'w-full h-10 px-3 text-gray-900 placeholder-transparent border border-gray-300 rounded-sm peer focus:ring-blue-500/40 focus:ring-4 focus:outline-none focus:border-blue-600',
        ]) !!}
            placeholder="{{ $label  }}" />
        <label for="{{ $name }}"
            class="absolute left-3 px-2 line-clamp-1 -top-2.5 text-gray-600 text-xs bg-white transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2.5 peer-focus:-top-2.5 peer-focus:text-gray-600 peer-focus:text-xs">
            {{ $label  }}
           </label>
    </div>
    @error($name)
        <span class="text-xs text-red-600">{{ $message }}</span>
    @enderror
</div>
