@props(['company'])

<div x-data="{ openSidebar: true, openDropdown: false }" :class=" openSidebar ? 'w-60' : 'w-20'  "
     class=" relative flex transition-all h-full flex-col items-center   bg-blue-600 text-blue-100">

    <button type="button" @click="openSidebar = !openSidebar"
            class=" absolute group top-4 right-0 hover:bg-blue-100 transition-colors translate-x-1/2 shadow-lg shadow-blue-200 focus:outline-none  p-1 bg-white rounded-sm">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
             :class=" !openSidebar && 'rotate-180'  " class=" transition-all duration-300  w-4 h-4 stroke-blue-500 ">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5"/>
        </svg>
    </button>


    <a :class="!openSidebar && 'justify-center'" class="mt-3 flex w-full items-start px-3" href="#">
        <svg class="h-8 w-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path
                d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z"/>
        </svg>
        <div x-show="openSidebar" class="ml-2 text-sm font-bold transition-all">
            <p>TECIT</p>
            @if(empty(auth()->user()->profile->social_reason))
                <p class="text-xs font-medium line-clamp-1">{{ auth()->user()->createdBy->profile->social_reason  }}</p>
            @else
                <p class="text-xs font-medium line-clamp-1">{{ auth()->user()->profile->social_reason  }}</p>
            @endif
        </div>
    </a>
    <div class="w-full px-2 pb-2">
        <div class="mt-3 flex w-full flex-col items-center border-t border-blue-300">

            <div x-data="{ expanded: false }" class="p-2  rounded-md w-full text-sm  mt-4 " x-cloak>
                <a href=" {{ route('tax-result.account-result', $company->id)  }}" @click="expanded = !expanded"
                   type="button"
                   class="mt-2 flex h-10 w-full items-center rounded px-3 justify-between  focus:outline-none hover:bg-blue-500 ">
                    <span>Résultat Fiscale</span>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" :class=" expanded ? '' : 'rotate-90' "
                         class="w-4 transition-all h-4 lg:w-5 lg:h-5 stroke-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                    </svg>

                </a>


                <div x-show=" {{ request()->routeIs('tax-result.*') or  request()->routeIs('work.*')  }} "
                     class="relative pl-6  " x-collapse>
                    <div class="absolute h-full w-px bg-blue-400  left-[12px]  "></div>

                    <x-nav-link label="Résultat comptable"
                                href="{{ route('tax-result.account-result', $company->id)  }}"
                                active="{{ request()->routeIs('tax-result.account-result')  }}" icon="office-building"/>


                    {{--                    Reintegration--}}
                    <div x-data="{ child_expanded: false }" class="p-2  rounded-md w-full text-sm   " x-cloak>
                        <button @click="child_expanded = !child_expanded" type="button"
                                class="mt-2 flex h-10 w-full items-center rounded px-3 justify-between  focus:outline-none hover:bg-blue-500 ">
                            <span>Réintegration</span>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" :class=" child_expanded ? '' : 'rotate-90' "
                                 class="w-4 transition-all h-4 lg:w-5 lg:h-5 stroke-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                            </svg>

                        </button>


                        <div x-show=" child_expanded " class="relative pl-6  " x-collapse>
                            <div class="absolute h-full w-px bg-blue-400  left-[12px]  "></div>

                            <x-nav-link label="Amortissement"
                                        href="{{ route('tax-result.reintegration.amortization',$company->id) }}"
                                        icon="office-building"/>
                            <x-nav-link label="Provisions et charges provisionnées"
                                        href="{{ route('tax-result.reintegration.accured-charge',$company->id) }}"
                                        active="{{ request()->routeIs('tax-result.account-result')  }}"
                                        icon="office-building"/>
                            <x-nav-link label="Autre réintégration"
                                        href="{{ route('tax-result.reintegration.other-reintegration',$company->id) }}"
                                        active="{{ request()->routeIs('tax-result.account-result')  }}"
                                        icon="office-building"/>
                        </div>

                    </div>
                    <a href=" {{ route('tax-result.deduction', $company->id)  }} "
                       :class=" {{ request()->routeIs('tax-result.deduction')  }} ? 'bg-blue-500' :''  "
                       class="mt-2 flex h-10 w-full items-center rounded px-3 hover:bg-blue-500 gap-x-2">
                        <svg class="h-4 w-4  stroke-current shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">--}}
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        <span>Déductions</span>
                    </a>
                </div>

            </div>

            <a href="{{ route('head-office-costs', $company->id)  }}" :class="!openSidebar && 'justify-center'"
               class=" group relative mt-2 flex h-12 w-full items-center rounded px-3 hover:bg-blue-700" href="#">
                <svg class="h-6 w-6 stroke-current shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                <span x-show="openSidebar"
                      class="ml-2 text-sm font-medium transition-all line-clamp-1 ">Frais de siège </span>

                <div
                    class="absolute scale-0 group-hover:scale-100 transition-all duration-300 -right-full translate-x-8 w-full bg-gray-700 text-white text-sm py-1.5 px-2.5 rounded-md ">
                    <div class="relative ">

                        <p>Frais de siège</p>

                        <span
                            class=" absolute top-1/2 -translate-y-1/2 -translate-x-1/2 -left-6  bg-gray-700 rounded-full w-3 h-3 block rotate-90 origin-center  ">  </span>
                    </div>
                </div>
            </a>

            <a :class="!openSidebar && 'justify-center'"
               class=" group relative mt-2 flex h-12 w-full items-center rounded px-3 hover:bg-blue-700" href="#">
                <svg class="h-6 w-6 stroke-current shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                <span x-show="openSidebar" class="ml-2 text-sm font-medium transition-all line-clamp-1 ">Document</span>

                <div
                    class="absolute scale-0 group-hover:scale-100 transition-all duration-300 -right-full translate-x-8 w-full bg-gray-700 text-white text-sm py-1.5 px-2.5 rounded-md ">
                    <div class="relative ">

                        <p>Documents</p>

                        <span
                            class=" absolute top-1/2 -translate-y-1/2 -translate-x-1/2 -left-6  bg-gray-700 rounded-full w-3 h-3 block rotate-90 origin-center  ">  </span>
                    </div>
                </div>
            </a>

        </div>

        {{--        Espace de travail--}}
        <p class="text-xs font-medium uppercase mt-6 mb-2">Espace de travail</p>
        <div class=" border-t border-blue-300">
            <div x-data="{ expanded: false }" class="w-full">

                <button @click="expanded = !expanded"
                        class="w-full flex justify-between focus:outline-none items-center hover:bg-blue-500  p-1.5  text-left border-blue-900 text-blue-50">
                    {{ $company->name  }}
                    <x-icon name="chevron-down" class="w-5"/>
                </button>

                @if(empty(auth()->user()->profile->social_reason))
                    <div x-show="expanded" class="absolute z-50 bg-blue-50 h-40 overscroll-y-auto text-blue-900 p-1 rounded-md "
                         x-transition>
                        @foreach(auth()->user()->getWorkspaceCompany as $cp)
                            <button
                                @click="() => {
                                    Livewire.emit('openModal', 'cabinet.confirm-company-acces', {{ json_encode([ $cp->id]) }});
                                    expanded = false;
                                }"
                                class="w-full hover:bg-blue-500 hover:text-blue-50 py-1.5 px-2.5 text-left rounded-md">
                                {{ $cp->name  }}
                            </button>
                        @endforeach
                    </div>
                @else
                <div x-show="expanded" class="absolute z-50 bg-blue-50 h-40 overscroll-y-auto text-blue-900 p-1 rounded-md "
                     x-transition>
                        @foreach(auth()->user()->company as $cp)
                            <button
                                @click="() => {
                                    Livewire.emit('openModal', 'cabinet.confirm-company-acces', {{ json_encode([ $cp->id]) }});
                                    expanded = false;
                                }"
                                class="w-full hover:bg-blue-500 hover:text-blue-50 py-1.5 px-2.5 text-left rounded-md">
                                {{ $cp->name  }}
                            </button>
                        @endforeach
                    </div>
                @endif

            </div>
        </div>

    </div>

<div class=" relative mt-auto w-full">
    <button @click=" openDropdown = !openDropdown " type="button" :class="!openSidebar && 'justify-center'"
            class=" flex h-16 w-full focus:outline-none items-center justify-start bg-blue-800 px-4 hover:bg-blue-700" href="#">
        <svg class="h-6 w-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        <span x-show="openSidebar"
              class="ml-2 text-sm font-medium transition-all line-clamp-1"> {{ auth()->user()->name . ' ' . auth()->user()->firstname  }}</span>
    </button>

    <div x-show="openDropdown" class=" absolute -top-[180%] left-0 ml-2 w-[90%] bg-blue-100 p-2 rounded-sm"
         x-transition.scale>
        <button class=" w-full text-left p-2 text-slate-700 hover:bg-blue-50">Profile</button>
        <button class=" w-full text-left p-2 text-slate-700 hover:bg-blue-50">Déconnexion</button>
    </div>

</div>


</div>
