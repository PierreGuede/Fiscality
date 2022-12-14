<span x-data="{{ $xdata }}" x-cloak>
    <button type="button" x-on:click="showModalConfirm = !showModalConfirm"
        class="inline-flex items-center {{ $classes ?? '' }}
        {{ isset($type) ? 'px-6 py-2 rounded-lg text-white bg-blue-500 hover:bg-blue-600' : 'text-red-600 hover:text-red-700'}}">
        {{ $link }}
    </button>

    <div style="background-color: rgba(0, 0, 0, 0.4)" class="fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full"
        x-show="showModalConfirm" x-on:click.away="showModalConfirm = false" x-transition:enter="ease-out transition-slow"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in transition-slow" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0">
        <div class="p-4 max-w-xl mx-auto absolute left-0 right-0 overflow-hidden mt-24">
            <form method="POST" action="{{ $route }}"
                onsubmit="deleteButton.disabled = true; deleteButton.classList.add('base-spinner');">
                @component('components.card', [
                'withFooter' => true
                ])

                <input type="hidden" name="{{ $idName }}" value="{{ $id }}">

                @method('DELETE')
                @csrf

                @component('components.heading', [
                'size' => 'large'
                ])
                {{ $title ?? ''}}
                @endcomponent

                {{ $slot }}

                @slot('footer')
                <div class="text-right">
                    <button type="button" x-on:click="showModalConfirm = false"
                        class="px-4 py-2 rounded-lg text-gray-600 bg-white hover:text-blue-600 shadow mr-2">Cancel</button>
                    <button type="submit" name="deleteButton"
                        class="px-4 py-2 rounded-lg text-white bg-red-500 hover:bg-red-600 shadow">Confirm</button>
                </div>
                @endslot
                @endcomponent
            </form>
        </div>
    </div>
</span>


<table>
....

<td>
@confirm([
    'classes' => 'ml-1 mr-4',
    'title' => 'Vous ??tes s??r de vouloir supprimer?',
    'link' => 'Supprimer',
    'id' => $base->id,
    'idName' => 'id',
    'route' => route('base.delete'),
    'xdata' => json_encode([
        'showModalConfirm' => false
    ])
])
    <p>Si vous supprimez l'enregistrement, vous ne pouvez pas le r??cup??rer.</p>
    <div class="border rounded-lg mt-4">
        <div class="flex py-2 px-4">
            <div class="mr-2">Category Name:</div>
            <div class="flex-1 text-truncate">
                <p class="mb-0 text-gray-800">{{ $base->name }}</p>
            </div>
        </div>
    </div>
@endconfirm
</td>

</table>

