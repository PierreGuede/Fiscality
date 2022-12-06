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

            <x-app-sidebar.nav-link  label="Résultat Fiscale" href="{{ route('tax-result', $company->id)  }}"  icon="office-building" />
            <x-app-sidebar.nav-link  label="Impôt" href="{{ route('corporate-tax', $company->id)  }}"  icon="office-building" :active="request()->routeIs('corporate-tax')" />
            <x-app-sidebar.nav-link  label="Document" href="{{ route('company.index') }}"  icon="office-building" />
            <x-app-sidebar.nav-link label="Paramètre" href="{{ route('company.setting', $company->id) }}"  icon="cog" />

        </div>

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
{{--    @endunlessrole--}}

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
        <form method="POST" action="{{ route('logout')  }}">
            @csrf
            <a href="{{ route('logout')  }}" onclick="event.preventDefault();this.closest('form').submit()"  class=" block w-full text-left p-2 text-slate-700 hover:bg-blue-50">Déconnexion</a>
        </form>
    </div>

</div>


</div>
