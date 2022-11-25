<div class="@if($disabled) opacity-60 @endif">
    @if ($label)
        <x-dynamic-component
            :component="WireUi::component('label')"
            class="mb-1"
            :label="$label"
            :has-error="$errors->has($name)"
            :for="$id"
        />
    @endif

    <select {{ $attributes->class([
//            'w-full h-10 px-3 text-gray-900 placeholder-transparent border border-gray-300 rounded-sm  focus:ring-blue-500/40 focus:ring-4 focus:outline-none focus:border-blue-600',
        $defaultClasses(),
        $errorClasses() =>  $errors->has($name),
        $colorClasses() => !$errors->has($name),
    ]) }}>
        @if ($options->isNotEmpty())
            @if ($placeholder)
                <option class="px-1.5 py-2.5 " value="">{{ $placeholder }}</option>
            @endif

            @forelse ($options as $key => $option)
                <option class="px-1.5 py-2.5 " value="{{ $getOptionValue($key, $option) }}"
                    @if(data_get($option, 'disabled', false)) disabled @endif>
                    {{ $getOptionLabel($option) }}
                </option>
            @empty
                @unless ($hideEmptyMessage)
                    <option disabled>
                        {{ $emptyMessage ?? __('wireui::messages.empty_options') }}
                    </option>
                @endunless
            @endforelse
        @else {{ $slot }} @endif
    </select>

    @if ($hint)
        <label @if ($id) for="{{ $id }}" @endif class="mt-2 text-sm text-secondary-500 dark:text-secondary-400">
            {{ $hint }}
        </label>
    @endif

    @if ($name)
        <x-dynamic-component
            :component="WireUi::component('error')"
            :name="$name"
        />
    @endif
</div>
