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
                        <h1 class="text-xl font-semibold text-gray-700"> Mot de passe oublié</h1>

                        <x-auth-validation-errors :errors="$errors" />


                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="mt-4">
                                <x-input label="Email" type="email" class="block w-full" name="email"
                                    id="email" required />
                            </div>

                            <x-button class="block w-full mt-4">
                                {{ __("M'envoyer les instructions") }}
                            </x-button>
                        </form>


                        <a href="{{ route('login') }} "
                            class="inline-block mt-4 text-sm font-medium text-center text-blue-600 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Revenir en arrière </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
