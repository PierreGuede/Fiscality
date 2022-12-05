<x-guest-layout>
        <div class=" w-full flex justify-center items-center h-screen rounded-lg ">
            {{-- <div class="p-2">
                <p class="text-xl text-red-600 font-bold ">Erreur</p>
            </div> --}}
            <div class="p-4">
                <div class="text-center">
                    <img aria-hidden="true" class="mx-auto  text-blue-500 w-2/6 "
                src="{{ asset('images/404-error-4.png') }}" alt="Office"/>
                </div>
            </div>
            <a href="{{URL::previous()}}" class="text-blue-500 block hover:text-blue-300 ">
                <span>Revenir en arrière</span>
            </a>
            {{-- <div class="p-4 flex space-x-4 hover:text-blue-200">
                <a href="{{URL::previous()}}" class="text-blue-500 flex hover:text-blue-300 ">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-md  w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                     </svg>
                     <span>Revenir en arrière</span>
                </a>
                <a href="{{ route('company.index') }}" class="text-blue-500 flex hover:text-blue-300 underline underline-offset-1">Revenir aux entreprises</a>
            </div> --}}
        </div>
</x-guest-layout>
