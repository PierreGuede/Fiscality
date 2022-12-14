<x-admin-space-layout>

    <div class="p-4 " >
        <div class="flex justify-between ">
            <h5 class="text-2xl font-semibold text-blue-900" >Gestion des droits d'accès</h5>
            <x-form.button onclick='Livewire.emit("openModal", "cabinet.create-role")' primary label="Ajouter un rôle"  />
        </div>

        <div class="mt-8" >
{{--            @foreach($role as $value)--}}
            <div x-data="{expanded: false }" >

                <div  class="bg-white w-full border-b-2 border-b-blue-100 p-2.5 flex gap-x-2 uppercase   items-center text-sm" >
                    <x-icon   name="chevron-down" x-bind:class=" expanded ? 'rotate-90' : 'rotate-0'  "  class="w-5 h-5 rotate-90" />
                    <p> role </p>
                </div>
                <div class="ml-8" >
                    <div  class="bg-white border-b-2 border-b-blue-100 w-full p-2.5 flex gap-x-2 uppercase   items-center text-sm" >
                        <x-toggle label="Create" wire:model.defer="create" />
                    </div>
                    <div  class="bg-white border-b-2 border-b-blue-100 w-full p-2.5 flex gap-x-2 uppercase   items-center text-sm" >
                        <x-toggle label="UPDATE" wire:model.defer="update" />
                    </div>
                    <div  class="bg-white border-b-2 border-b-blue-100 w-full p-2.5 flex gap-x-2 uppercase   items-center text-sm" >
                        <x-toggle label="EDIT" wire:model.defer="edit" />
                    </div>
                    <div  class="bg-white border-b-2 border-b-blue-100 w-full p-2.5 flex gap-x-2 uppercase   items-center text-sm" >
                        <x-toggle label="DELETE" wire:model.defer="delete" />
                    </div>
                </div>
            </div>
{{--            @endforeach--}}

        </div>
    </div>

{{--    <div class="p-4 bg-white rounded-lg shadow-xs">--}}
{{--        <div class="flex p-2">--}}
{{--            <div class="w-4/5">--}}
{{--                Liste--}}
{{--            </div>--}}
{{--            <div class="w-1/5 items-center text-center">--}}
{{--                <button type="button"--}}
{{--                    class="bg-green-500 border border-gray-500 text-white font-bold py-2 px-4 rounded-md"--}}
{{--                    @click="showModal = true">Creer un role</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <table class="p-2 w-full text-sm text-left text-gray-500    ">--}}
{{--            <thead class="text-xs text-gray-700 uppercase bg-gray-200      ">--}}
{{--                <tr>--}}
{{--                    <th scope="col" class="px-6 py-3">--}}
{{--                        Nom--}}
{{--                    </th>--}}
{{--                    <th scope="col" class="px-6 py-3">--}}
{{--                        permissions--}}
{{--                    </th>--}}
{{--                    <th scope="col" class="px-6 py-3">--}}
{{--                        action--}}
{{--                    </th>--}}
{{--                </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--                @foreach ($role as $role)--}}
{{--                    <tr class="bg-white border-b      ">--}}
{{--                        <th scope="row" class="px-6 py-4 font-medium text-gray-900    whitespace-nowrap">--}}
{{--                            {{ $role->name }}--}}
{{--                        </th>--}}
{{--                        <th scope="row" class="px-6 py-4 font-medium text-gray-900    whitespace-nowrap">--}}
{{--                            @foreach ($role->permissions as $permit)--}}
{{--                                | {{ $permit->name }}--}}
{{--                            @endforeach--}}

{{--                        </th>--}}
{{--                        <th scope="row"--}}
{{--                            class="flex space-x-4 px-6 py-4 font-medium text-gray-900    whitespace-nowrap">--}}
{{--                            <a href="{{ route('role.edit', $role->id) }}" class="text-blue-800">Editer</a>--}}
{{--                            <form action="{{ route('role.delete', $role->id) }}" method="POST">--}}
{{--                                @csrf--}}
{{--                                @method('delete')--}}
{{--                                <button type="submit" class="text-red-800">Supprimer</button>--}}
{{--                            </form>--}}
{{--                        </th>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}


{{--    <section class="flex flex-wrap p-4 h-full items-center">--}}


{{--        <!--Overlay-->--}}
{{--        <div class="overflow-auto" style="background-color: rgba(0,0,0,0.5)" x-show="showModal"--}}
{{--            :class="{ 'absolute inset-0 z-10 flex items-center justify-center': showModal }">--}}
{{--            <!--Dialog-->--}}
{{--            <div class="bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg py-4 text-left px-6" x-show="showModal"--}}
{{--                @click.away="showModal = false">--}}

{{--                <!--Title-->--}}
{{--                <div class="flex justify-between items-center pb-3">--}}
{{--                    <p class="text-2xl font-bold">Créer un role</p>--}}
{{--                    <div class="cursor-pointer z-50" @click="showModal = false">--}}
{{--                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18"--}}
{{--                            height="18" viewBox="0 0 18 18">--}}
{{--                            <path--}}
{{--                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">--}}
{{--                            </path>--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- content -->--}}
{{--                <form action="{{ route('role.store') }}" method="POST" class="space-y-4">--}}
{{--                    @csrf--}}
{{--                    <input type="text" name="name"--}}
{{--                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm ">--}}
{{--                    <div class="mt-4">--}}
{{--                        <x-label for="name" :value="__('Droits')" />--}}
{{--                        <select--}}
{{--                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600"--}}
{{--                            name="permission[]" multiple="">--}}
{{--                            @foreach ($permission as $permission)--}}
{{--                                <option value="{{ $permission->name }}">{{ $permission->name }}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <button type="submit"--}}
{{--                        class="px-4 py-2 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring">Créer</button>--}}
{{--                </form>--}}
{{--                <!--Footer-->--}}



{{--            </div>--}}
{{--            <!--/Dialog -->--}}
{{--        </div><!-- /Overlay -->--}}

{{--    </section>--}}


</x-admin-space-layout>
