<x-app-layout>
    <x-slot name="header">

                {{ __($role->name) }}

    </x-slot>
    <div class="p-4 bg-white rounded-lg shadow-xs">

            <form action="{{ route('role.update',$role->id) }}" method="POST" class="space-y-4">
                @csrf
                <input type="text" name="name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm ">
                <div class="mt-4">
                    <x-label for="name" :value="__('Droits')"/>
                    <select class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600" name="permission[]" multiple="">
                        @foreach ($permission as $permission)
                            <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                        @endforeach
                      </select>
                </div>
                <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring">Modifier</button>
            </form>

    </div>

</x-app-layout>
