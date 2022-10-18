<x-app-layout>
    <x-slot name="header">

                {{ __('L\'Entreprise') }}

    </x-slot>
    <div class="p-4 bg-white rounded-lg shadow-xs">
        <div class="flex p-2">
            <div class="w-4/5">
                Liste
            </div>

        </div>

        <table class="p-2 w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
            <tr>
            <th scope="col" class="px-6 py-3">
              Nom
            </th>
            <th scope="col" class="px-6 py-3">
                Type de gestion
              </th>
            <th scope="col" class="px-6 py-3">
                action
            </th>
            </tr>
            </thead>
            <tbody>
                @foreach ($company as $company)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th  scope="row"  class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            <a href="{{ route('company.edit',$company->id) }}">{{$company->name}}</a>
                        </th>
                        <th  scope="row"  class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            @if ($company->company_id !=null)
                            {{$company->company->name}}
                            @else
                                @foreach ($company->user->roles as $role)
                                    {{ $role->name }}
                                @endforeach
                            @endif
                        </th>
                        <th  scope="row"  class="flex space-x-4 px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            <a href="{{ route('company.edit',$company->id) }}" class="text-blue-800">info sur l'entreprise</a>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- <section class="flex flex-wrap p-4 h-full items-center">


		<!--Overlay-->
		<div class="overflow-auto" style="background-color: rgba(0,0,0,0.5)" x-show="showModal" :class="{ 'absolute inset-0 z-10 flex items-center justify-center': showModal }">
			<!--Dialog-->
			<div class="bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg py-4 text-left px-6" x-show="showModal" @click.away="showModal = false" >

				<!--Title-->
				<div class="flex justify-between items-center pb-3">
					<p class="text-2xl font-bold">Créer une Entreprise</p>
					<div class="cursor-pointer z-50" @click="showModal = false">
						<svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
							<path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
						</svg>
					</div>
				</div>

				<!-- content -->
                <form action="{{ route('company.store') }}" method="POST" class="space-y-4 p-4">
                    @csrf
                    <div class="mt-4">
                        <x-label for="name" :value="__('Nom')"/>
                        <input type="text" name="name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm ">
                    </div>
                    <div class="mt-4">
                        <x-label for="email" :value="__('Email')"/>
                        <x-input name="email"
                                 type="email"
                                 class="block w-full"
                                 value="{{ old('email') }}"/>
                    </div>
                    <div class="mt-4">
                        <x-label for="dt_create" :value="__('Date de création')"/>
                        <x-input name="dt_create"
                                 type="date"
                                 class="block w-full"
                                 value="{{ old('dt_create') }}"/>
                    </div>

                    <div class="mt-4">
                        <x-label for="ifu" :value="__('IFU')"/>
                        <x-input name="ifu"
                        type="text"
                        class="block w-full"
                        value="{{ old('ifu') }}"/>
                    </div>

                    <div class="mt-4">
                        <x-label id="social_reason" :value="__('Raison Sociale')"/>
                        <x-input name="social_reason"
                        type="text"
                        class="block w-full"
                        value="{{ old('social_reason') }}"/>
                    </div>
                    <div class="mt-4">
                        <x-label id="celphone" :value="__('Numéro de téléphone')"/>
                        <x-input name="celphone"
                        type="text"
                        class="block w-full"
                        value="{{ old('celphone') }}"/>
                    </div>
                    <div class="mt-4">
                        <x-label id="centre" :value="__('Centre des impôts gestionnaire')"/>
                        <x-input name="centre"
                        type="text"
                        class="block w-full"
                        value="{{ old('centre') }}"/>
                    </div>


                    <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring">Créer</button>
                </form>
				<!--Footer-->
				<div class="flex justify-end pt-2">
					<button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2" @click="alert('Pour votre Entreprise vous pouvez ajouter des types de personnes qui y travaillent');">Info</button>
					<button class="modal-close px-4 bg-red-500 p-3 rounded-lg text-white hover:bg-red-400" @click="showModal = false">Annuler</button>
				</div>


			</div>
			<!--/Dialog -->
		</div><!-- /Overlay -->

	</section> --}}
</x-app-layout>
