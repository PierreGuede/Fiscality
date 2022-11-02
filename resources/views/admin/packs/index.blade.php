<x-app-layout>
    <x-slot name="header">

        {{ __('Les packs') }}

    </x-slot>
    <div class="p-4 bg-white rounded-lg shadow-xs">
        <div class="flex p-2">
            <div class="w-4/5">
                Liste
            </div>
            <div class="w-1/5 items-center text-center">
                <button type="button"
                    class="bg-green-500 border border-gray-500 text-white font-bold py-2 px-4 rounded-md"
                    @click="showModal = true">Creer un pack</button>
            </div>
        </div>
        <table class="p-2 w-full text-sm text-left text-gray-500    ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200      ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nom
                    </th>
                    <th scope="col" class="px-6 py-3">
                        nombre d'entreprise fixe
                    </th>
                    <th scope="col" class="px-6 py-3">
                        description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pack as $pack)
                    <tr class="bg-white border-b      ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900    whitespace-nowrap">
                            {{ $pack->name }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900    whitespace-nowrap">
                            {{ $pack->max }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900    whitespace-nowrap">
                            {{ $pack->description }}
                        </th>
                        <th scope="row"
                            class="flex space-x-4 px-6 py-4 font-medium text-gray-900    whitespace-nowrap">
                            <a href="{{ route('pack.edit', $pack->id) }}" class="text-blue-800">Editer</a>
                            <p class="text-red-800 cursor-pointer" @click="showModalConfirm = true">Supprimer</p>
                            <section class="flex flex-wrap p-4 h-full items-center">
                                <div class="overflow-auto" style="background-color: rgba(0,0,0,0.5)"
                                    x-show="showModalConfirm"
                                    :class="{ 'absolute inset-0 z-10 flex items-center justify-center': showModalConfirm }">
                                    <div class="bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg py-4 text-left px-6"
                                        x-show="showModalConfirm" @click.away="showModalConfirm = false">
                                        <div class=" pb-3">
                                            <div class="text-center">
                                                <p class="text-xl">Voulez vous vraiment supprimer?</p>
                                            </div>
                                            <div class="flex space-x-2 mt-4 text-center mx-auto w-10/12">
                                                <div class="w-1/2">
                                                    <button
                                                        class="modal-close px-4 bg-blue-500 p-3 rounded-lg text-white hover:bg-blue-800"
                                                        @click="showModalConfirm = false">Annuler</button>
                                                </div>
                                                <div class="w-1/2">
                                                    <form action="{{ route('pack.delete', $pack->id) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                            class="modal-close px-4 bg-red-500 p-3 rounded-lg text-white hover:bg-red-800">Supprimer</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <section class="flex flex-wrap p-4 h-full items-center">


        <!--Overlay-->
        <div class="overflow-auto" style="background-color: rgba(0,0,0,0.5)" x-show="showModal"
            :class="{ 'absolute inset-0 z-10 flex items-center justify-center': showModal }">
            <!--Dialog-->
            <div class="bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg py-4 text-left px-6" x-show="showModal"
                @click.away="showModal = false">

                <!--Title-->
                <div class="flex justify-between items-center pb-3">
                    <p class="text-2xl font-bold">Créer un pack</p>
                    <div class="cursor-pointer z-50" @click="showModal = false">
                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18"
                            height="18" viewBox="0 0 18 18">
                            <path
                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                            </path>
                        </svg>
                    </div>
                </div>

                <!-- content -->
                <form action="{{ route('pack.store') }}" method="POST" class="space-y-4 p-4">
                    @csrf
                    <x-label :value="__('Nom')" />
                    <input type="text" name="name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                    <x-label :value="__('nombre maximum entreprise')" />
                    <input type="text" name="max" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                    <x-label :value="__('description')" />
                    <input type="text" name="description"
                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                    <button type="submit"
                        class="px-4 py-2 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring">Créer</button>
                </form>
                <!--Footer-->



            </div>
            <!--/Dialog -->
        </div><!-- /Overlay -->

    </section>
</x-app-layout>
