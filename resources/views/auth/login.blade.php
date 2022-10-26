<x-guest-layout>
    <div class="">
        <div class="flex items-center justify-center min-h-screen bg-blue-50">
            <div class="flex-1 p-8">
                <div class="mx-auto overflow-hidden bg-white shadow-xl w-96 rounded-3xl">
                    <div class="relative bg-blue-500 h-44 rounded-bl-4xl">
                        <svg class="absolute bottom-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                            <path fill="#ffffff" fill-opacity="1"
                                d="M0,64L48,80C96,96,192,128,288,128C384,128,480,96,576,85.3C672,75,768,85,864,122.7C960,160,1056,224,1152,245.3C1248,267,1344,245,1392,234.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                            </path>
                        </svg>
                        <h2 class="pt-10 text-3xl font-bold text-center text-blue-50"> TECIT</h2>
                    </div>
                    <div class="px-10 pb-8 bg-white rounded-tr-4xl">
                        <h1 class="text-xl font-semibold text-gray-700">Bienvenue à nouveau !</h1>
                        <p class="text-sm text-gray-500">Veuillez vous identifier pour continuer</p>

                        <x-auth-validation-errors :errors="$errors" />

                        <form method="POST" action="{{ route('login') }}" class="mt-6 space-y-6">
                            @csrf

                            <div class="mt-4">
                                <x-input type="text" label="Username" id="username" name="username"
                                    value="{{ old('username') }}" class="block w-full" required autofocus />
                            </div>

                            <!-- Input[ype="email"] -->
                            <div class="mt-4">
                                <x-input type="email" label="Email" id="email" name="email"
                                    value="{{ old('email') }}" class="block w-full" required autofocus />
                            </div>

                            <!-- Input[ype="password"] -->
                            <div class="mt-4">
                                <x-input type="password" label="Mot de passe" id="password" name="password"
                                    class="block w-full" />
                            </div>

                            {{-- <div class="flex text-sm">
                                <label class="flex items-center dark:text-gray-400">
                                    <input type="checkbox" name="remember"
                                        class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple">
                                    <span class="ml-2">{{ __('Remember me') }}</span>
                                </label>
                            </div> --}}

                            <div class="">
                                <x-button class="block w-full">
                                    {{ __('Connectez-vous') }}
                                </x-button>
                            </div>
                        </form>

                        <p class="text-sm text-gray-500">
                            Je n'ai pas de compte?
                            <a href="{{ route('register') }}"
                                class="inline-block mt-4 text-sm font-medium text-center text-blue-600 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500">
                                Créer un compte </a>
                        </p>
                        @if (Route::has('password.request'))
                            <p class="mt-4">
                                <a href="{{ route('password.request') }}"
                                    class="block mt-1 text-sm font-medium text-center text-blue-600 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Mot de passe oublié? </a>
                            </p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
