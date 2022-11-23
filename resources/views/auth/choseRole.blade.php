<x-app-layout>
    <div class="w-full mx-auto p-4">

        {{-- <x-auth-validation-errors :errors="$errors"/> --}}
        @livewire('multi-step-form')
{{--            @livewire('create-company-wizard')--}}

        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="hover:text-green-400 ">Se déconnecter</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>

    </div>
</x-app-layout>
