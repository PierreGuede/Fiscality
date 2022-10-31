<x-guest-layout>
    <div class="bg-slate-800 w-10/12 mx-auto p-4">
        <p class="text-xl text-center">{{ $company->name }}</p>

        <form action="{{ route('work.access',$company->id) }}" method="post">
            @csrf
            <div class="step-one">
                <x-label for="name" class="text-center" :value="__('Repetez le nom de l\'entreprise pour continuer')"/>
                <p class="text-red-800 text-center p-2 text-xl">@error('name') {{ $message }} @enderror</p>
                <div>
                    <x-input type="text"
                        id="name"
                        name="name" {{-- name="name" --}}
                        class="block  w-1/2 mx-auto"
                        value=""
                        required
                        autofocus/>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="w-1/3 text-white rounded-md text-center p-2 bg-blue-700" > Continuer</button>
                </div>
                    </div>
        </form>
    </div>

</x-guest-layout>
