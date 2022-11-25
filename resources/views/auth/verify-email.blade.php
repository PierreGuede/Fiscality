<x-guest-layout>
    <main class="flex w-full h-screen text-gray-700 bg-white">
        <div class="flex items-center justify-center w-3/5 h-full ">
            <div class="w-4/6 mx-auto space-y-6 ">
                <h2 class="text-4xl font-bold ">TECIT</h2>
                <h6 class="text-lg font-medium ">Vérification de votre e-mail</h6>
            </div>
        </div>
        <div class="flex items-center justify-center w-2/5 bg-blue-50/40 ">
            <div class=" w-[90%] lg:w-[75%] xl:w-2/3 w">
                <div class="w-full">
                    <h1 class="mb-4 font-semibold text-gray-700">
                        {{ __('Merci de vous être inscrit à TECIT! Avant de commencer, pourriez-vous vérifier votre adresse e-mail en cliquant sur le lien que nous venons de vous envoyer par e-mail ? Si vous n\'avez pas reçu l\'e-mail, nous nous ferons un plaisir de vous en envoyer un autre.') }}
                    </h1>
                    @if (session('status') == 'verification-link-sent')
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ __('Un nouveau lien de vérification a été envoyé à l\'adresse électronique que vous avez fournie lors de votre inscription.') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                        <x-button class="mt-4 w-full">
                            {{ __('Renvoyer l\'Email de vérification') }}
                        </x-button>
                    </form>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-button type="submit" class="mt-4 w-full">
                            {{ __('Se déconnecter') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
</x-guest-layout>
