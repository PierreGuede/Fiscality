<x-guest-layout>
    <div class="p-4 ">
        <div class="w-10/12 mx-auto p-4 my-auto rounded-lg shadow-lg bg-white">
            {{-- <div class="p-2">
                <p class="text-xl text-red-600 font-bold ">Erreur</p>
            </div> --}}
            <div class="p-4">
                <div class="text-center">
                    <img aria-hidden="true" class="mx-auto bg-white text-blue-500 w-2/6 "
                src="{{ asset('images/404-error-4.png') }}" alt="Office"/>
                </div>
                <div class="p-4 text-center">
                    <p class="text-md text-gray-500 font-bold">Vous ne pouvez pas créer d'autre entreprise car vous avez déjà atteint la limite d'entreprise a créer pour votre pack.</p>
                </div>
            </div>
            <div class="p-4 flex space-x-4 hover:text-blue-200">
                <a href="{{URL::previous()}}" class="text-blue-500 flex hover:text-blue-300">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-md  w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                     </svg>
                     <span>Revenir en arrière</span>
                </a>
                <a href="{{ route('company.index') }}" class="text-blue-500 flex hover:text-blue-300 underline underline-offset-1">Revenir aux entreprises</a>
            </div>
        </div>
    </div>
</x-guest-layout>
