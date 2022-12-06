<x-guest-layout>


    <div class="h-screen w-full grid place-items-center" >
        <div class="max-w-sm w-full space-y-2" >
            <h5>Vérifiez votre email pour le code de vérification</h5>
            <form method="POST" action="{{ route('verify.store')  }}">
                @csrf
                <x-input name="two_factor_code" id="two_factor_code" label="Code de vérification"
                         placeholder="Code de vérification"/>
                <a class="block text-blue-900 hover:underline-offset-1 hover:underline"  href="{{ route('verify.resend')  }}"> Renvoyez le code </a>
                <x-button class="mt-4"  type="submit">Vérifiez</x-button>
            </form>
        </div>
    </div>
</x-guest-layout>
