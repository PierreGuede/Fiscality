<x-guest-layout>

{{--    <div class="bg-slate-50 w-full mx-auto p-4">--}}
{{--        <livewire:register-process>--}}
{{--            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="hover:text-green-400 ">Se déconnecter</a>--}}
{{--            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--            @csrf--}}
{{--            </form>--}}
{{--    </div>--}}

    @livewire('setup-account.index-setup-account')
</x-guest-layout>
