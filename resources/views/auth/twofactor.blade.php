<x-guest-layout>
    <main x-data="{
                 maskEmail(email) {
                  return email.slice(0,3)+ '***-***@' + email.split('@')[1];
                }
    }"
          class="flex min-h-screen items-center justify-center bg-blue-50">

    <form method="POST" action="{{ route('verify.store')  }}" class="w-full max-w-lg rounded-md bg-white p-8 ">
        @csrf
        <div class="w-full grid place-content-center my-4" >
            <div class="inline-block aspect-square h-16 rounded-full font-semibold text-green-50">
                <img src="{{ asset('images/authentication.png')  }}" alt="image d'authentication" loading="lazy" >
            </div>
        </div>
        <div class="text-center" >
            <p class="text-lg py-2 font-semibold uppercase text-blue-900">Authentifier votre compte</p>
            <p class="text-sm text-gray-700 font-medium" >La protection de vos informations est notre priorité absolue. Veuillez confirmer votre compte en saisissant le code d'autorisation envoyé à <span x-text="maskEmail('{{ auth()->user()->email  }}')"></span>.</p>
        </div>
        <div class="grid place-content-center my-6 text-center">
            <input name="two_factor_code" id="two_factor_code" class=" w-32 px-2 py-1.5 rounded-sm border text-center focus-within:outline-none focus:ring-2 focus:ring-blue-blue-200 focus-within:border-blue-500" type="text" />
        </div>
        <div class=" w-full flex items-end gap-x-4 justify-between" >
            <div>
                <p class="text-xs" >La réception de votre code peut prendre une minute. <br /> Vous ne l'avez pas reçu ? <a  href="{{ route('verify.resend')  }}" class="text-blue-900 text-semibold cursor-pointer hover:text-blue-700 hover:underline-offset-1 hover:underline" >Renvoyez un nouveau code</a> </p>
            </div>
            <button class="inline-flex px-4 py-2.5 rounded-sm bg-blue-700 text-blue-50 font-semibold focus:outline-none focus:ring-4 focus:ring-offset-2 focus:ring-blue-200" >Validez</button>
        </div>
    </form>
        </main>

</x-guest-layout>
