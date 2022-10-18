<x-app-layout>
    <x-slot name="header">
                    {{ __($company->name) }}
    </x-slot>
    <div class="p-2 bg-white rounded-lg shadow-xs">
        <div class="flex m-2 pb-2 border-b-2 border-gray-200">
            <div class="w-2/3 flex space-x-2">
                @if ($company->is_confirmed==1)
                <p class="text-xl text-green-800" > Activé </p>
                @else
                <p class="text-xl text-red-800"> Pas encore activé</p>
                <a href="{{ route('company.activeCompany',$company->id) }}" class="text-blue-800">Activer</a>
                @endif
                @if ($company->status == 'pending')
                <a href="{{ route('company.acceptCompany',$company->id) }}" class="bg-green-500 text-xs py-2 px-2 mt-2 mb-3 inline-block text-white hover:bg-green-200 hover:text-green-500 duration-200 transition rounded">Accepter</a>
                <a href="{{ route('company.rejectCompany',$company->id) }}" class="bg-red-500 text-xs py-2 px-2 mt-2 mb-3 inline-block text-white hover:bg-red-200 hover:text-red-500 duration-200 transition rounded">Rejeter</a>
                @else

                @endif
            </div>
            <div class="w-1/3 text-center justify-center">
                <p class="text-sm text-center">Télécharger</p>
                <div class="flex text-center justify-center items-center space-x-4">

                    <a href="{{ route('company.downladIFU',$company->id) }}" class="w-1/3 flex space-x-4 text-white rounded-md text-center p-2 bg-gray-500" >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                       <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                     </svg>
                      <span class="">IFU</span>
                   </a>
                   <a href="{{ route('company.downladRCCM',$company->id) }}" class="w-1/3 flex space-x-4 text-white rounded-md text-center p-2 bg-blue-500" >
                       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                         </svg>
                       <span>RCCM</span>
                   </a>

                </div>
            </div>
        </div>
        <div class="w-10/12 flex mx-auto pb-4">
            <div class="w-1/2 flex">
                <div class="w-1/2">
                    <p>Dirigeant</p>
                    {{ $company->user->name }}
                </div>
                <div class="w-1/2">
                    <p>Date de création</p>
                    {{ $company->created_date }}
                </div>
            </div>
           <div class="w-1/2 flex text-center">
            <div class="w-1/2">
                <p>Numéro IFU</p>
                {{ $company->ifu }}
            </div>
            <div class="w-1/2">
                <p>Numéro RCCM</p>
                {{ $company->rccm }}
            </div>

            </div>
        </div>
        <div class="w-10/12 mx-auto pb-4">
            @if ($company->childrenCompany->count()==0)
            @else
            @foreach ($company->childrenCompany as $childrenCompany)
                <p>{{ $childrenCompany->name }}</p>
            @endforeach
            @endif
        </div>
        <h2 class="text-xl">Les impots affectées</h2>
        <div class="w-10/12 mx-auto m-4">

            @foreach ($company->typeCompany->impot as $impottype)
                    {{$impottype->name}}
            @endforeach
        </div>
    </div>
    <div class="w-10/12 mx-auto text-md m-4">
        @if ($company->is_active == 1)
            <a href="{{ route('company.unblockCompany',$company->id) }}" class="w-full flex justify-center text-white rounded-md text-center p-2 bg-green-500"> Debloquer cette entreprise</a>
        @else
            <p class="w-full  text-white rounded-md text-center p-2 bg-red-500 cursor-pointer" @click="showModalConfirm = true"> Bloquer cette entreprise</p>
        @endif
        {{-- <button type="button" class="w-full  text-white rounded-md text-center p-2 bg-red-500" ></button> --}}
    </div>
</div>
<section class="flex flex-wrap p-4 h-full items-center">
    <div class="overflow-auto" style="background-color: rgba(0,0,0,0.5)" x-show="showModalConfirm" :class="{ 'absolute inset-0 z-10 flex items-center justify-center': showModalConfirm }">
        <div class="bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg py-4 text-left px-6" x-show="showModalConfirm" @click.away="showModalConfirm = false" >
            <div class=" pb-3">
                <div class="text-center">
                    <p class="text-xl">Voulez vous vraiment bloquer l'entreprise?</p>
                </div>
                <div class="flex space-x-2 mt-4 text-center mx-auto w-10/12">
                    <div class="w-1/2">
                        <button class="modal-close px-4 bg-blue-500 p-3 rounded-lg text-white hover:bg-blue-800" @click="showModalConfirm = false">Annuler</button>
                    </div>
                    <div class="w-1/2 mt-2">
                        <a href="{{ route('company.blockCompany',$company->id) }}" class=" mt-8  bg-red-500 p-3 rounded-lg text-white hover:bg-red-800"> Bloquer</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

</x-app-layout>
