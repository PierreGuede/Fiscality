@props(['disabled' => false, 'id' => '', 'name' => '', 'label' => ''])

<div class="relative">
    <input {{ $disabled ? 'disabled' : '' }} id="{{ $id }}" name="{{ $name }}" {!! $attributes->merge([
        'class' =>
            'w-full h-10 px-3 text-gray-900 placeholder-transparent border border-gray-300 rounded-sm peer focus:ring-blue-500/40 focus:ring-4 focus:outline-none focus:border-blue-600',
    ]) !!}
        placeholder="john@doe.com" />
    <label for="{{ $name }}"
        class="absolute left-3 px-2 -top-3.5 text-gray-600 text-sm bg-white transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
        {{ $label }} </label>
</div>
