<x-app-layout>
    <x-slot name="header">

                {{ __($type->name) }}

    </x-slot>
    <div class="p-4 bg-white rounded-lg shadow-xs">

            <form action="{{ route('type.update',$type->id) }}" method="POST" class="space-y-4" >
                @csrf
                <input type="text" name="name" value="{{ old('name',$type->name) }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm ">
                <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring">Modifier</button>
            </form>

    </div>

</x-app-layout>
