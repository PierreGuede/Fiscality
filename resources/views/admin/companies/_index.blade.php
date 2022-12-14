<x-admin-space-layout>
    <div class="p-4 rounded-lg shadow-xs">        <div class="flex p-2">
            <div class="w-4/5">
                Liste <span
                    class="text-blue-800">({{ count($company) . ' entreprise créé | restant:' . (Auth::user()->subscription->packs->max - count($company)) }})</span>
            </div>
            @hasrole('cabinet')
            <div class="items-center w-1/5 text-center">
                @if (count($company) < Auth::user()->subscription->packs->max)
                    <a href="{{ route('company.enterprise') }}" type="button"
                       class="px-4 py-2 font-bold text-white bg-green-500 border border-gray-500 rounded-md">Creer une
                        Entreprise</a>
                @else
                @endif
            </div>
            @endrole
        </div>
        <table class="w-full p-2 text-sm text-left text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200 ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nom
                    </th>
                    <th scope="col" class="px-6 py-3">
                        action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($company as $company)
                    <tr class="bg-white border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $company->name }}
                        </th>

                        <th scope="row" class="flex px-6 py-4 space-x-4 font-medium text-gray-900 whitespace-nowrap">
                            <a href="{{ route('company.edit', $company->id) }}" class="text-blue-800">Editer</a>
                            <p class="text-red-800 cursor-pointer" @click="showModalConfirm = true">Supprimer</p>
                            <section class="flex flex-wrap items-center h-full p-4">
                                <div class="overflow-auto" style="background-color: rgba(0,0,0,0.5)"
                                    x-show="showModalConfirm"
                                    :class="{ 'absolute inset-0 z-10 flex items-center justify-center': showModalConfirm }">
                                    <div class="w-11/12 px-6 py-4 mx-auto text-left bg-white rounded shadow-lg md:max-w-md"
                                        x-show="showModalConfirm" @click.away="showModalConfirm = false">
                                        <div class="pb-3 ">
                                            <div class="text-center">
                                                <p class="text-xl">Voulez vous vraiment supprimer?</p>
                                            </div>
                                            <div class="flex w-10/12 mx-auto mt-4 space-x-2 text-center">
                                                <div class="w-1/2">
                                                    <button
                                                        class="p-3 px-4 text-white bg-blue-500 rounded-lg modal-close hover:bg-blue-800"
                                                        @click="showModalConfirm = false">Annuler</button>
                                                </div>
                                                <div class="w-1/2">
                                                    <form action="{{ route('typeImpot.delete', $company->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                            class="p-3 px-4 text-white bg-red-500 rounded-lg modal-close hover:bg-red-800">Supprimer</button>
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
    <section class="flex flex-wrap items-center h-full p-4">


        <!--Overlay-->
        <div class="overflow-auto" style="background-color: rgba(0,0,0,0.5)" x-show="showModal"
            :class="{ 'absolute inset-0 z-10 flex items-center justify-center': showModal }">
            <!--Dialog-->
            <div class="w-11/12 px-6 py-4 mx-auto text-left bg-white rounded shadow-lg md:max-w-md" x-show="showModal"
                @click.away="showModal = false">

                <!--Title-->
                <div class="flex items-center justify-between pb-3">
                    <p class="text-2xl font-bold">Créer une Entreprise</p>
                    <div class="z-50 cursor-pointer" @click="showModal = false">
                        <svg class="text-black fill-current" xmlns="http://www.w3.org/2000/svg" width="18"
                            height="18" viewBox="0 0 18 18">
                            <path
                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                            </path>
                        </svg>
                    </div>
                </div>

                <!-- content -->
                <form action="{{ route('company.store') }}" method="POST" class="p-4 space-y-4">
                    @csrf
                    <div class="mt-4">
                        <x-label for="name" :value="__('Nom')" />
                        <input type="text" name="name"
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm ">
                    </div>
                    <div class="mt-4">
                        <x-label for="email" :value="__('Email')" />
                        <x-input name="email" type="email" class="block w-full" value="{{ old('email') }}" />
                    </div>
                    <div class="mt-4">
                        <x-label for="dt_create" :value="__('Date de création')" />
                        <x-input name="dt_create" type="date" class="block w-full" value="{{ old('dt_create') }}" />
                    </div>

                    <div class="mt-4">
                        <x-label for="ifu" :value="__('IFU')" />
                        <x-input name="ifu" type="text" class="block w-full" value="{{ old('ifu') }}" />
                    </div>

                    <div class="mt-4">
                        <x-label id="social_reason" :value="__('Raison Sociale')" />
                        <x-input name="social_reason" type="text" class="block w-full"
                            value="{{ old('social_reason') }}" />
                    </div>
                    <div class="mt-4">
                        <x-label id="celphone" :value="__('Numéro de téléphone')" />
                        <x-input name="celphone" type="text" class="block w-full" value="{{ old('celphone') }}" />
                    </div>
                    <div class="mt-4">
                        <x-label id="centre" :value="__('Centre des impôts gestionnaire')" />
                        <x-input name="centre" type="text" class="block w-full" value="{{ old('centre') }}" />
                    </div>

                    <div class="mt-4">
                        <x-label for="company_id" :value="__('Entreprise mère')" />
                        <select
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600"
                            name="company_id">
                            <option value="" selected></option>
                            @foreach ($mere as $mere)
                                <option value="{{ $mere->id }}">{{ $mere->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit"
                        class="px-4 py-2 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring">Créer</button>
                </form>
                <!--Footer-->


            </div>
            <!--/Dialog -->
        </div><!-- /Overlay -->

    </section>
</x-admin-space-layout>
