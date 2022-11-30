<div class=" w-60 space-y-1 " >
    <x-user-setting.link href="{{ route('user.setting.personnal-information')  }}" name="Information personnelle" :active="request()->routeIs('user.setting.personnal-information')"  />

    <x-user-setting.link href="{{ route('user.setting.change-password')  }}" name="Mot de passe" :active="request()->routeIs('user.setting.change-password')"  />

    <x-user-setting.link href="{{ route('user.setting.notification')  }}"   name="Notification"  :active="request()->routeIs('user.setting.notification')" />

</div>
