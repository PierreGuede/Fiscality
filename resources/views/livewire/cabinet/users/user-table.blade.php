<table class="w-full mt-12" >
    <x-notifications position="top-right" />

    <thead class="bg-transparent uppercase py-2 text-gray-600" >
    <th class="text-left text-xs py-3.5 font-semibold" >#</th>
    <th class="text-left text-xs py-3.5 font-semibold" >Nom</th>
    <th class="text-left text-xs py-3.5 font-semibold" >Prénom</th>
    <th class="text-left text-xs py-3.5 font-semibold" >Email</th>
    <th class="text-left text-xs py-3.5 font-semibold" >Role</th>
    <th class="text-left text-xs py-3.5 font-semibold" >Actions</th>
    </thead>
    <tbody>



    @foreach($users as $key => $user)
        <tr class="w-full shadow-lg shadow-blue-200 border-b-4 border-blue-200 bg-white">
            <td class=" text-left text-xs font-medium py-4 px-4  my-10" >{{ $key +1  }}</td>
            <td class=" text-left text-xs font-medium py-4  my-10" > {{$user->name}} </td>
            <td class=" text-left text-xs font-medium py-4  my-10" > {{ $user->firstname  }} </td>
            <td class=" text-left text-xs font-medium py-4  my-10" >{{ $user->email  }}</td>
            <td class=" text-left text-xs font-medium py-4  my-10" >
                @foreach($user->roles as $role)
                    <x-badge flat gray label="{{ $role->name  }}" />
                @endforeach
            </td>
            <td class=" text-left text-xs font-semibold py-4  my-10" >
                <x-dropdown>
                    <x-dropdown.item @click="Livewire.emit('openModal', 'cabinet.users.detail-user', {{ json_encode([$user->id]) }})" >
                        <span class="font-medium" >Voir</span>
                    </x-dropdown.item>

                    <x-dropdown.item wire:click="resendConfirmationMail({{$user->id}})" >
                        <span class="font-medium" >Renvoyer le mail</span>
                    </x-dropdown.item>

                    <x-dropdown.item @click="Livewire.emit('openModal', 'cabinet.users.edit-user', {{ json_encode([$user->id]) }})" >
                        <span class="font-medium" > Modifier</span>
                    </x-dropdown.item>

                    <x-dropdown.item @click="Livewire.emit('openModal', 'cabinet.users.assign-company', {{ json_encode([$user->id]) }})" >
                        <span class="font-medium"> Affecter</span>
                    </x-dropdown.item>

                    <x-dropdown.item @click="Livewire.emit('openModal', 'cabinet.users.desassign-company', {{ json_encode([$user->id]) }})" >
                        <span class="font-medium"> désaffecter </span>
                    </x-dropdown.item>

                    <x-dropdown.item @click="Livewire.emit('openModal', 'cabinet.users.delete-user', {{ json_encode([$user->id]) }})" >
                        <span class="font-medium" > Supprimer</span>
                    </x-dropdown.item>

                </x-dropdown>
            </td>

        </tr>
    @endforeach
    </tbody>
</table>
