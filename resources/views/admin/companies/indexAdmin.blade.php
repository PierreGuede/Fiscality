<x-app-layout>
    <x-slot name="header">

        {{ __('L\'Entreprise') }}

    </x-slot>
    <div class="p-4 rounded-lg shadow-xs">        <div class="flex p-2">
            <div class="w-4/5">
                Liste
            </div>

        </div>

        <table class="p-2 w-full text-sm text-left text-gray-500    ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200      ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nom
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Type de gestion
                    </th>
                    <th scope="col" class="px-6 py-3">
                        action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($company as $company)
                    <tr class="bg-white border-b      ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900    whitespace-nowrap">
                            <a href="{{ route('company.edit', $company->id) }}">{{ $company->name }}</a>
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900    whitespace-nowrap">
                            @if ($company->company_id != null)
                                {{ $company->company->name }}
                            @else
                                @foreach ($company->user->roles as $role)
                                    {{ $role->name }}
                                @endforeach
                            @endif
                        </th>
                        <th scope="row"
                            class="flex space-x-4 px-6 py-4 font-medium text-gray-900    whitespace-nowrap">
                            <a href="{{ route('company.edit', $company->id) }}" class="text-blue-800">info sur
                                l'entreprise</a>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
