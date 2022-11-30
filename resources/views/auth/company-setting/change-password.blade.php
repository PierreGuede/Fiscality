

<x-user-setting.content-wrapper>
    <form id="form"method="post" action="{{ route('user.setting.change-password')  }}">
        @csrf
        <div class="py-4" >
            <div class="flex items-center gap-x-2" >
                <p class="text-sm font-semibold text-slate-800 w-60 " >Mot de passe actuel</p>
                <x-input type="password" name="old_password" label="" placeholder="old_password" id="old_password" value="{{ old('old_password')  }}" />
            </div>
        </div>

        <div class="py-4" >
            <div class="flex items-center gap-x-2" >
                <p class="text-sm font-semibold text-slate-800 w-60 " >Nouveau mot de passe</p>
                <x-input type="password" name="new_password" label="" placeholder="Nouveau mot de passe" id="new_password" value="{{ old('new_password')  }}" />
            </div>
        </div>

        <div class="py-4" >
            <div class="flex items-center gap-x-2" >
                <p class="text-sm font-semibold text-slate-800 w-60 " >Confirmez le mot de passe</p>
                <x-input type="password" name="confirm_password" label="" placeholder="Confirmez le mot de passe" id="confirm_password" value="{{ old('confirm_password')  }}" />
            </div>
        </div>

        <x-slot:footer>
            <div class="flex justify-start" >
                <x-button type="submit" form="form" >Enregistrer</x-button>
            </div>
        </x-slot:footer >
    </form>

</x-user-setting.content-wrapper>
