<div x-data="{ openSidebar: true, openDropdown: false }" :class=" openSidebar ? 'w-60' : 'w-20'  "
     class=" relative flex transition-all h-full flex-col items-center p-4   bg-cyan-600 text-blue-100">
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
            <p class="text-sm">Admin TEC-SARL</p>
        </div>
    </a>
        <ul class="mt-6 w-full px-2 pb-2">
            <x-app-sidebar.admin-nav-link :active="request()->routeIs('company.*')"  href="{{ route('company.index') }}" label="Les entreprises"   icon="office-building" />
            <x-app-sidebar.admin-nav-link :active="request()->routeIs('domain.*')" href="{{ route('domain.index') }}" label="Domaines" icon="cog" />
            <x-app-sidebar.admin-nav-link :active="request()->routeIs('pack.*')"  href="{{ route('pack.index') }}" label="Les packs"   icon="collection" />
            <x-app-sidebar.admin-nav-link :active="request()->routeIs('typeAct.*')"  href="{{ route('typeAct.index') }}" label="Activités principale"   icon="clipboard-list"  />
            <x-app-sidebar.admin-nav-link :active="request()->routeIs('category.*')"  href="{{ route('category.index') }}" label="Catégories"   icon="color-swatch" />
            <x-app-sidebar.admin-nav-link :active="request()->routeIs('taxCenter.*')" href="{{ route('taxCenter.index') }}" label="Centre d'impot" icon="map" />
            <x-app-sidebar.admin-nav-link :active="request()->routeIs('accounting-product.*')"  href="{{ route('accounting-product.index') }}" label="Produits et charges "   icon="newspaper" />
            <x-app-sidebar.admin-nav-link :active="request()->routeIs('base.*')"  href="{{ route('base.index') }}" label="Les Bases"   icon="table"  />
            <x-app-sidebar.admin-nav-link :active="request()->routeIs('type.*')"  href="{{ route('type.index') }}" label="Type d'entreprises"   icon="template" />
            <x-app-sidebar.admin-nav-link :active="request()->routeIs('typeImpot.*')" href="{{ route('typeImpot.index') }}" label="Type d'impôt" icon="cube-transparent" />
            <x-app-sidebar.admin-nav-link :active="request()->routeIs('subCategory.*')" href="{{ route('subCategory.index') }}" label="Type Detail" icon="cog" />
        </ul>

</div>
