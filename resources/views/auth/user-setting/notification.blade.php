<x-user-setting.content-wrapper>

    <form id="form" method="POST" action="{{ route('user.setting.notification')  }}">
        @csrf
        <div class="py-4">
            <div class="flex items-center gap-x-2">
                <x-toggle name="email_notification" value="email" checked="{{ auth()->user()->userSetting?->email_notification == 1  }}"  />
                <p class="text-sm font-medium text-slate-900">Envoyez les rapports par emails</p>
            </div>
            <small class="block text-xs text-slate-500 mt-2.5">Envoyez les rapports à chaque entreprise après avoirs
                calculés le résultat fiscal </small>
        </div>

        <div class="py-4">
            <div class="flex items-center gap-x-2">
                <x-toggle  name="sms_notification" value="sms" checked="{{ auth()->user()->userSetting?->sms_notification == 1  }}" />
                <p class="text-sm font-medium text-slate-900">Notifiez les entreprises par SMS</p>
            </div>
            <small class="block text-xs text-slate-500 mt-2.5">Envoyez un sms à toutes les entreprises lorsque leurs
                résultats sont calculés </small>
        </div>

        <div class="py-4">
            <div class="flex items-center gap-x-2">
                <x-toggle  name="whatsapp_notification" value="whatsapp"  />
                <p class="text-sm font-medium text-slate-900">Notifiez les entreprises par Whatsapp</p>
            </div>
            <small class="block text-xs text-slate-500 mt-2.5">Envoyez des messages à toutes les entreprises lorsque
                leurs résultats sont calculés </small>
        </div>
    </form>

    <x-slot:footer>
        <div class="flex justify-start">
            <x-button type="submit" form="form">Enregistrer</x-button>
        </div>
    </x-slot:footer>
</x-user-setting.content-wrapper>
