<x-app-layout>
    <div class="p-6">
        <div class=" w-full flex justify-between">
            <h5 class="text-2xl font-semibold text-blue-900">Espace entreprise</h5>

            @hasrole('cabinet')
            <x-form.button href="{{ route('company.enterprise') }}" primary outline right-icon="plus-circle"
                           label="Ajouter"/>
            @endhasrole
        </div>

        <div class="mt-8 grid grid-cols-3 gap-4">
            @hasanyrole('cabinet')
                @foreach ($company as $company)
                    @livewire('company.company-card', ['company' => $company])
                @endforeach
            @endrole
{{--                    @dump(auth()->user()->createdBy->company)--}}

            @if(!empty(auth()->user()->getWorkspaceCompany))
                @foreach(auth()->user()->getWorkspaceCompany as $workspaceCmpany)
                    @livewire('company.company-card', ['company' => $workspaceCmpany])
                @endforeach
            @endif
        </div>
    </div>
</x-app-layout>
