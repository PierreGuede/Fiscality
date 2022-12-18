<x-guest-layout>
    <main class="flex w-full h-screen text-gray-700 bg-white">
        <div class="flex items-center justify-center w-3/5 h-full ">
            <div class="w-4/6 mx-auto space-y-6 ">
                <h2 class="text-4xl font-bold ">TECIT</h2>
                <h6 class="text-lg font-medium ">Mettez un text plus important à ce niveau</h6>
                <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure natus quibusdam quo
                    commodi tenetur, labore hic est accusantium in eligendi sit reiciendis laudantium iste culpa
                    laboriosam exercitationem? Consectetur, esse amet!</p>

                <small class="block font-semibold text-gray-400">Mettez un text de salutation ici</small>
                <button class="px-8 py-3 font-semibold text-blue-500 border-2 border-blue-500 rounded-md">
                    En savoir plus
                </button>
            </div>


        </div>
        <div class="flex items-center justify-center w-2/5 bg-blue-50/40 ">
            <div class=" w-[90%] lg:w-[75%] xl:w-2/3 w">
                <h6 class="mb-2 text-2xl font-semibold text-gray-700">Commencez</h6>
                <p class="mb-10 text-sm text-gray-500">L'inscription ne prend qu'une minute</p>

                <x-errors />

                <form method="POST" action="{{ route('register.user') }}" class="space-y-6">
                    @method('POST')
                    @csrf
                    <div class="grid grid-cols-2 gap-x-4 ">
                            <x-input label="Nom" type="text" id="name" name="name" class="block col-span-1"
                                value="{{ old('name') }}" required autofocus />
                            <x-input label="Prénom" type="text" id="firstname" name="firstname" class="block col-span-1"
                                value="{{ old('firstname') }}" required autofocus />
                    </div>
                    <div class="mt-4">
                        <x-input label="Email" name="email" type="email" class="block w-full"
                            value="{{ old('email') }}"  required />
                    </div>

                    <div class="mt-4">
                        <x-input label="Mot de passe" type="password" name="password" class="block w-full" required />
                    </div>

                    <div class="mt-4">
                        <x-input label="Confirmez votre mot de passe" type="password" id="password_confirmation"
                            name="password_confirmation" class="block w-full" required />
                    </div>


                    <div class="mt-4">
                        <x-button class="block w-full">
                            {{ __('Créer un compte') }}
                        </x-button>
                    </div>
                </form>

                <p class="text-sm text-center text-gray-500">
                    J'ai déjà un compte?
                    <a href="{{ route('login') }}"
                        class="inline-block mt-4 text-sm font-medium text-center text-blue-600 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Connectez-vous </a>
                </p>
            </div>
        </div>
    </main>
</x-guest-layout>
