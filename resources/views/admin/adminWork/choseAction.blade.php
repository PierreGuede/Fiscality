<x-company-layout :company="$company"  >

    <div  class=" max-w-3xl w-full mx-auto p-4 h-screen">
            <section class=" mt-6 w-full p-4 h-full flex items-center justify-center  ">
                <div class="grid gap-4 grid-cols-3 grid-rows-2 my-auto">
{{--                    <div class="cursor-pointer text-center p-2 bg-slated-500 rounded-md hover:ring-4 hover:border-slated-500 hover:ring-slated-500/50 ring-offset-1 transition duration-200">--}}
{{--                        <a href="{{ route('work.accountResult',$company->id) }}" class="p-2 "> Faire mon Resultat comptable </a>--}}
{{--                    </div>--}}
{{--                    <div class="cursor-pointer text-center p-2 bg-slated-500 rounded-md hover:ring-4 hover:border-slated-500 hover:ring-slated-500/50 ring-offset-1 transition duration-200">--}}
{{--                        <a href="{{ route('work.impotcalcul',$company->id) }}" class="p-2 "> Calculer les impots </a>--}}
{{--                    </div>--}}
{{--                    <div class="cursor-pointer text-center p-2 bg-slated-500 rounded-md hover:ring-4 hover:border-slated-500 hover:ring-slated-500/50 ring-offset-1 transition duration-200">--}}
{{--                        <a href="{{ route('amortization', $company->id)  }}" class="p-2 "> Calculer mes amortissements </a>--}}
{{--                    </div>--}}

                    <a href="{{ route('work.accountResult',$company->id) }}" class="relative  p-8 flex flex-col items-center justify-center border-2 border-[#A68FFF] hover:shadow-[0px_8px_15px_-10px_#8FBCFF] hover:shadow-[#A68FFF] rounded-md">
                        <div class="absolute bg-[#A68FFF] w-3/5 -top-0.5 h-1.5 rounded-b-md"></div>

                        <h2 class="text-[#2B417B] text-center ">Résultat Comptable</h2>
                    </a>

                    <a href="{{ route('tax-result.reintegration.amortization', $company->id)  }}" class="relative p-8 flex flex-col items-center justify-center border-2 border-[#8FBCFF] hover:shadow-[0px_8px_15px_-10px_#8FBCFF] hover:shadow-[#8FBCFF] rounded-md">
                        <div class="absolute bg-[#8FBCFF] w-3/5 -top-0.5 h-1.5 rounded-b-md"></div>

                        <h2 class="text-[#2B417B]">Amortissements</h2>
                    </a>

                    <a href="{{ route('tax-result.reintegration.accured-charge',$company->id) }}" class="relative p-8 flex flex-col items-center justify-center border-2 border-[#6EDDDD] hover:shadow-[0px_8px_15px_-10px_#8FBCFF] hover:shadow-[#6EDDDD] rounded-md">
                        <div class="absolute bg-[#6EDDDD] w-3/5 -top-0.5 h-1.5 rounded-b-md"></div>

                        <h2 class="text-[#2B417B] text-center">Provisions et charges provisionnées</h2>
                    </a>

                    <a href=" {{ route('work.other-reintegration', $company->id)  }} " class="relative p-8 flex flex-col items-center justify-center border-2 border-[#FCC18A] hover:shadow-[0px_8px_15px_-10px_#8FBCFF] hover:shadow-[#FCC18A] rounded-md">
                        <div class="absolute bg-[#FCC18A] w-3/5 -top-0.5 h-1.5 rounded-b-md"></div>

                        <h2 class="text-[#2B417B]">Autre Réintégrations</h2>
                    </a>

                    <a class="relative p-8 flex flex-col items-center justify-center border-2 border-[#FF8FAA] hover:shadow-[0px_8px_15px_-10px_#8FBCFF] hover:shadow-[#FF8FAA] rounded-md">
                        <div class="absolute bg-[#FF8FAA] w-3/5 -top-0.5 h-1.5 rounded-b-md"></div>

                        <h2 class="text-[#2B417B]">Impôt</h2>
                    </a>

                </div>
            </section>
    </div>

</x-company-layout>
