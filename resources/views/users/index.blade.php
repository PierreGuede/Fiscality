<x-app-layout>
    <div class="p-6">
        <div class=" w-full flex justify-between">
            <h5 class="text-2xl font-semibold text-blue-900">Utilisateurs</h5>

            @hasanyrole('enterprise|cabinet')
            <x-form.button type="button"  onclick="Livewire.emit('openModal', 'cabinet.create-user')"  primary outline right-icon="plus-circle"
                           label="Ajouter"/>
            @endrole
        </div>

{{--            <div class="px-4 py-2 -mx-3">--}}
{{--                <button type="button" class="bg-green-500 border border-gray-500 text-white font-bold py-2 px-4 rounded-md" @click="showModal = true">Creer un Utilisateur</button>--}}
{{--            </div>--}}
        @livewire('user-table')

        <div class="mt-6" >

        </div>




    </div>
</x-app-layout>
