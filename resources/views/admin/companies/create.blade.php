<x-app-layout>
    <x-slot name="header">

                {{ __('Créer une entreprise') }}

    </x-slot>
    <div class="p-4 rounded-lg shadow-xs">
                <div class="bg-white rounded shadow-lg py-4 text-left px-6"  >
                    <x-auth-validation-errors :errors="$errors"/>

                    <form action="{{ route('company.store') }}" method="POST" class="space-y-4 p-4">
                        @csrf
                       <div class="flex space-x-2">
                        <div class="mt-4 w-1/2">
                            <x-label for="name" :value="__('Nom')"/>
                            <input type="text" name="name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm ">
                        </div>
                        <div class="mt-4 w-1/2">
                            <x-label for="email" :value="__('Email')"/>
                            <x-input name="email"
                                     type="email"
                                     class="block w-full"
                                     value="{{ old('email') }}"/>
                        </div>
                       </div>
                       <div class="mt-4">
                        <x-label for="created_date" :value="__('Date de création')"/>
                        <x-input  name="created_date"
                                type="date"
                                class="block w-full"
                                value="{{ old('created_date') }}"/>
                    </div>
                       <div class="flex space-x-2">
                        <div class="mt-4 w-1/2">
                            <x-label for="ifu" :value="__('IFU')"/>
                            <x-input   name="ifu"
                            type="text"
                            class="block w-full"
                            value="{{ old('ifu') }}"/>
                        </div>
                        <div class="mt-4 w-1/2">
                            <x-label for="rccm" :value="__('Justificatif')"/>
                            <input type="file" class="mt-2"  name="path" id="path">
                        </div>

                    </div>
                    <div class="flex space-x-2">
                        <div class="mt-4 w-1/2">
                            <x-label for="rccm" :value="__('RCCM')"/>
                            <x-input   name="rccm"
                            type="text"
                            class="block w-full"
                            value="{{ old('rccm') }}"/>
                        </div>
                        <div class="mt-4 w-1/2">
                            <x-label for="rccm" :value="__('Justificatif')"/>
                            <input type="file" class="mt-2"  name="path_rccm" id="path_rccm">
                        </div>
                    </div>
                    <div class="flex space-x-2">
                        <div class="mt-4 w-1/2">
                            <x-label id="celphone" :value="__('Numéro de téléphone')"/>
                            <x-input  name="celphone"
                            type="text"
                            class="block w-full"
                            value="{{ old('celphone') }}"/>
                        </div>
                        <div class="mt-4 w-1/2">
                            <x-label id="centre" :value="__('Centre des impôts gestionnaire')"/>
                            <x-input   name="centre"
                            type="text"
                            class="block w-full"
                            value="{{ old('centre') }}"/>
                        </div>

                        </div>
                        <div class="flex space-x-2">
                        <div class="mt-4 w-1/3">
                            <x-label for="name" :value="__('Type entreprise')"/>
                            <select  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600"  name="type_company_id">
                                <option value=""></option>
                                @foreach ($type as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-4 w-1/3">
                            <x-label for="name" :value="__('Catégorie')"/>
                            <select class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600"   name="category_id">
                                <option selected></option>
                                @foreach ($typeCat as $typeCat)
                                    <option value="{{ $typeCat->id }}">{{ $typeCat->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-4 w-1/3">
                            <x-label for="name" :value="__('Domaine')"/>
                            <select  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600"  name="domain_id">
                                <option value=""></option>
                                @foreach ($domain as $domain)
                                    <option value="{{ $domain->id }}">{{ $domain->name }}</option>
                                @endforeach
                            </select>
                        </div>


                        </div>


                        <div class="mt-4">
                            <x-label for="company_id" :value="__('Entreprise mère')"/>
                            <select class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600" name="company_id" >
                                <option value="" selected></option>
                                @foreach ($mere as $mere)
                                    <option value="{{ $mere->id }}">{{ $mere->name }}</option>
                                @endforeach
                              </select>
                        </div>

                        <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring">Créer</button>
                    </form>
                    <!--Footer-->


                </div>
                <!--/Dialog -->


    </div>

</x-app-layout>
