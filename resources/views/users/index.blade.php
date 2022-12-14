<x-admin-space-layout>
    <div class="p-6">
        <div class="w-full  min-h-screen" >
            <div class="max-w-5xl w-full mx-auto">
                <div class=" w-full flex justify-between">
                <h5 class="text-2xl font-semibold text-gray-700 " >Utilisateurs</h5>

                    @hasanyrole('enterprise|cabinet')
                    <x-form.button type="button"  onclick="Livewire.emit('openModal', 'cabinet.users.create-user')"  primary outline right-icon="plus-circle"
                                   label="Ajouter"/>
                    @endrole
                </div>

                @livewire('cabinet.users.user-table')

            </div>
        </div>




    </div>
</x-admin-space-layout>
