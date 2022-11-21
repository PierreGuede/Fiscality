<div x-data="{ openSidebar: true }" :class=" openSidebar ? 'w-60' : 'w-20'  "  class=" relative flex transition-all h-full flex-col items-center   bg-blue-600 text-blue-100">

    <button type="button" @click="openSidebar = !openSidebar" class=" absolute group top-4 right-0 hover:bg-blue-100 transition-colors translate-x-1/2 shadow-lg shadow-blue-200 focus:outline-none  p-1 bg-white rounded-sm" >

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" :class=" !openSidebar && 'rotate-180'  " class=" transition-all duration-300  w-4 h-4 stroke-blue-500 ">
            <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
        </svg>
    </button>

    {{--    request()->routeIs('dashboard')"--}}


    <a :class="!openSidebar && 'justify-center'" class="mt-3 flex w-full items-center px-3" href="#">
        <svg class="h-8 w-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" />
        </svg>
        <span x-show="openSidebar" class="ml-2 text-sm font-bold transition-all">TECIT</span>
    </a>
    <div class="w-full px-2 pb-2">
        <div  class="mt-3 flex w-full flex-col items-center border-t border-blue-300">
            {{--            <a href="{{ route('work.accountResult',$company->id) }}"   :class="!openSidebar && 'justify-center'" class=" group relative bg-blue-800 mt-2 flex h-12 w-full items-center rounded px-3 hover:bg-blue-700" href="#">--}}
            {{--                <svg class="h-6 w-6 stroke-current shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
            {{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />--}}
            {{--                </svg>--}}
            {{--                <span x-show="openSidebar" class="ml-2 text-sm font-medium transition-all line-clamp-1 ">Résultat Fiscale</span>--}}

            {{--                <div class="absolute scale-0 group-hover:scale-100 transition-all duration-300 -right-full translate-x-8 w-full bg-gray-700 text-white text-sm py-1.5 px-2.5 rounded-md " >--}}
            {{--                    <div class="relative " >--}}
            {{--                        <p>Résultat comptable</p>--}}
            {{--                        <span class=" absolute top-1/2 -translate-y-1/2 -translate-x-1/2 -left-6  bg-gray-700 rounded-full w-3 h-3 block rotate-90 origin-center  " >  </span>--}}
            {{--                    </div>--}}
            {{--                </div>--}}

            {{--                <div class="ml-4" >--}}
            {{--                    <a href="{{ route('work.accountResult',$company->id) }}"   :class="!openSidebar && 'justify-center'" class=" group relative mt-2 flex h-12 w-full items-center rounded px-3 hover:bg-blue-700" href="#">--}}
            {{--                        <svg class="h-6 w-6 stroke-current shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
            {{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />--}}
            {{--                        </svg>--}}
            {{--                        <span x-show="openSidebar" class="ml-2 text-sm font-medium transition-all line-clamp-1 ">Résultat Comptable</span>--}}

            {{--                    </a>--}}
            {{--                </div>--}}
            {{--            </a>--}}




                <a href="{{ route('users.index') }}"   :class="!openSidebar && 'justify-center'" class=" group relative mt-2 flex h-8 w-full items-center rounded px-3 hover:bg-blue-700">
                    <x-icon name="user" class="w-4 h-4 stroke-current shrink-0" />
                    <span x-show="openSidebar" class="ml-2 text-sm font-medium transition-all line-clamp-1 ">Utilisateurs</span>
                    <div class="absolute scale-0 group-hover:scale-100 transition-all duration-300 -right-full translate-x-8 w-full bg-gray-700 text-white text-sm py-1.5 px-2.5 rounded-md " >
                        <div class="relative " >
                            <p>Utilisateurs</p>
                            <span class=" absolute top-1/2 -translate-y-1/2 -translate-x-1/2 -left-6  bg-gray-700 rounded-full w-3 h-3 block rotate-90 origin-center  " >  </span>
                        </div>
                    </div>
                </a>

                <a  href="{{ route('company.index') }}"  :class="!openSidebar && 'justify-center'" class=" group relative mt-2 flex h-8 w-full items-center rounded px-3 hover:bg-blue-700" >
                    <x-icon name="office-building" class="w-4 h-4 stroke-current shrink-0" />
                    <span x-show="openSidebar" class="ml-2 text-sm font-medium transition-all line-clamp-1 ">Entreprises</span>
                    <div class="absolute scale-0 group-hover:scale-100 transition-all duration-300 -right-full translate-x-8 w-full bg-gray-700 text-white text-sm py-1.5 px-2.5 rounded-md " >
                        <div class="relative " >
                            <p>Entreprises</p>
                            <span class=" absolute top-1/2 -translate-y-1/2 -translate-x-1/2 -left-6  bg-gray-700 rounded-full w-3 h-3 block rotate-90 origin-center  " >  </span>
                        </div>
                    </div>
                </a>








        </div>
    </div>
    <a :class="!openSidebar && 'justify-center'" class="mt-auto flex h-16 w-full items-center justify-start bg-blue-800 px-4 hover:bg-blue-700" href="#">
        <svg class="h-6 w-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span x-show="openSidebar"  class="ml-2 text-sm font-medium transition-all">Compte</span>
    </a>

</div>
