<x-guest-layout>
    <div class="selection:bg-blue-500 selection:text-white">
        <div class="min-h-screen bg-blue-50 flex justify-center items-center">
          <div class="p-8 flex-1">
            <div class="w-96 bg-white rounded-3xl mx-auto overflow-hidden shadow-xl">
              <div class="relative h-48 bg-blue-500 rounded-bl-4xl">
                <svg class="absolute bottom-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                  <path fill="#ffffff" fill-opacity="1" d="M0,64L48,80C96,96,192,128,288,128C384,128,480,96,576,85.3C672,75,768,85,864,122.7C960,160,1056,224,1152,245.3C1248,267,1344,245,1392,234.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                </svg>
                <h2 class="text-center text-2xl font-semibold pt-10 text-blue-50"> TECIT</h2>
              </div>
              <div class="px-10 pt-4 pb-8 bg-white rounded-tr-4xl">
                <h1 class="text-xl font-semibold text-gray-700">Bienvenue à nouveau !</h1>
                <p class="text-sm text-gray-500" >Veuillez vous identifier pour continuer</p>
                <form class="mt-12 space-y-6" action="" method="POST">
                   <div class="relative">
                    <input id="username" name="username" type="text" class="peer h-12 px-3 w-full border border-gray-300 rounded-sm focus:ring-blue-500/40 focus:ring-4 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600" placeholder="john@doe.com" />
                    <label for="username" class="absolute left-3 px-2 -top-3.5 text-gray-600 text-sm bg-white transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Identifiant</label>
                  </div>
                  <div class="relative">
                    <input id="email" name="email" type="email" class="peer h-12 px-3 w-full border border-gray-300 rounded-sm focus:ring-blue-500/40 focus:ring-4 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600" placeholder="john@doe.com" />
                    <label for="email" class="absolute left-3 px-2 -top-3.5 text-gray-600 text-sm bg-white transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Email</label>
                  </div>

                  <div class="relative">
                    <input id="password" name="password" type="password" class="peer h-12 px-3 w-full border border-gray-300 rounded-sm focus:ring-blue-500/40 focus:ring-4 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600" placeholder="john@doe.com" />
                    <label for="password" class="absolute left-3 px-2 -top-3.5 text-gray-600 text-sm bg-white transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Mot de passe</label>
                  </div>



                    <button class="mt-20 px-4 py-3 rounded bg-blue-500 hover:bg-blue-400 text-white font-semibold text-center block w-full focus:outline-none focus:ring focus:ring-offset-2 focus:ring-blue-500 focus:ring-opacity-80 cursor-pointer" >Connectez-vous</button>
                </form>
                <p class="text-sm text-gray-500">
                  Je n'ai pas de compte?
                <a href="#" class="mt-4 inline-block text-sm text-center font-medium text-blue-600 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500"> Créer un compte </a>
                </p>
                <a href="#" class="mt-1 block text-sm text-center font-medium text-blue-600 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500"> Mot de passe oublié? </a>

              </div>
            </div>
          </div>
        </div>
      </div>

</x-guest-layout>
