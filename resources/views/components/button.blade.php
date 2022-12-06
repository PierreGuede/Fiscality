@props(['variant' => 'filled' ])

@if( $variant == 'filled' )
<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'block  px-4 py-2.5 font-semibold text-center text-white bg-blue-500 rounded cursor-pointer hover:bg-blue-400 focus:outline-none focus:ring focus:ring-offset-2 focus:ring-blue-500 focus:ring-opacity-80']) }}>
    {{ $slot }}
</button>
@endif

@if( $variant == 'fill-danger' )
    <button
        {{ $attributes->merge(['type' => 'submit', 'class' => 'block  px-4 py-2.5 font-semibold text-center text-white bg-red-500 rounded cursor-pointer hover:bg-red-400 focus:outline-none focus:ring focus:ring-offset-2 focus:ring-red-500 focus:ring-opacity-80']) }}>
        {{ $slot }}
    </button>
@endif

@if( $variant == 'outline' )
    <button
        {{ $attributes->merge(['type' => 'submit', 'class' => 'block  px-4 py-2.5 font-semibold text-center text-white bg-blue-500 rounded cursor-pointer hover:bg-blue-400 focus:outline-none focus:ring focus:ring-offset-2 focus:ring-blue-500 focus:ring-opacity-80']) }}>
        {{ $slot }}
    </button>
@endif


@if( $variant == 'neutral' )
    <button
        {{ $attributes->merge(['type' => 'submit', 'class' => 'block  px-4 py-2.5 font-semibold text-center text-gray-600 border-2 border-gray-600  bg-none hover:bg-gray-600 hover:text-gray-50 rounded cursor-pointer hover:bg-blue-400 focus:outline-none focus:ring focus:ring-offset-2 focus:ring-blue-500 focus:ring-opacity-80']) }}>
        {{ $slot }}
    </button>
@endif


