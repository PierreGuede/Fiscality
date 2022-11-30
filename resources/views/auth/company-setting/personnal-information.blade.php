

<x-user-setting.content-wrapper>
{{--    En cas d'upload d'imeage de profile--}}
{{--    <div class="flex items-center justify-center gap-x-2 mb-4" >--}}
{{--        <div class=" inline-block p-4 rounded-full bg-slate-200  " >--}}
{{--            <x-icon class=" w-6 h-6 stroke-slate-700 "  name="user"/>--}}
{{--        </div>--}}
{{--    </div>--}}

    <form id="form" method="POST" action="{{ route('user.setting.personnal-information')  }}">
        @csrf
        <div class="py-4" >
            <div class="flex items-center gap-x-2" >
                <p class="text-sm font-semibold text-slate-800 w-32 " >Nom</p>
                <x-input name="name" label="" placeholder="name" id="name" value="{{ old('name', auth()->user()->name)  }}" />
            </div>
        </div>

        <div class="py-4" >
            <div class="flex items-center gap-x-2" >
                <p class="text-sm font-semibold text-slate-800 w-32 " >Prénom</p>
                <x-input name="firstname" label="" placeholder="Prénom" id="firstname" value="{{ old('firstname', auth()->user()->firstname)  }}" />
            </div>
        </div>

        <div class="py-4" >
            <div class="flex items-center gap-x-2" >
                <p class="text-sm font-semibold text-slate-800 w-32 " >Email</p>
                <x-input name="email" label="" placeholder="Prénom" id="email" value="{{ old('email', auth()->user()->email)  }}" />
            </div>
        </div>

        <x-slot:footer >
            <div class="flex justify-start" >
                <x-button type="submit" form="form" >Enregistrer</x-button>
            </div>
        </x-slot:footer >
    </form>

</x-user-setting.content-wrapper>
