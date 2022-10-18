<div class="inline-flex overflow-hidden mb-4 w-full bg-white rounded-lg shadow-md">
    <div class="flex justify-center items-center w-12 bg-blue-500">
        <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"></path>
        </svg>
    </div>

    <div class="px-4 py-2 -mx-3">
        <button type="button" class="bg-green-500 border border-gray-500 text-white font-bold py-2 px-4 rounded-md" @click="showModal = true">Creer un Utilisateur</button>

    </div>
</div>
<div class="overflow-hidden mb-8 w-full rounded-lg border shadow-xs">
    <div class="overflow-x-auto w-full">
        <table class="w-full whitespace-no-wrap">
            <thead>
            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase bg-gray-50 border-b">
                <th class="px-4 py-3">Name</th>
                <th class="px-4 py-3">Email</th>
                <th class="px-4 py-3">Role</th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y">
            @foreach($users as $user)
                <tr class="text-gray-700">
                    <td class="px-4 py-3 text-sm">
                        {{ $user->name }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $user->email }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{-- @dump($user->roles) --}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase bg-gray-50 border-t sm:grid-cols-9">
        {{ $users->links() }}
    </div>
</div>
<section class="flex flex-wrap p-4 h-full items-center">


    <!--Overlay-->
    <div class="overflow-auto" style="background-color: rgba(0,0,0,0.5)" x-show="showModal" :class="{ 'absolute inset-0 z-10 flex items-center justify-center': showModal }">
        <!--Dialog-->
        <div class="bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg py-4 text-left px-6" x-show="showModal" @click.away="showModal = false" >

            <x-auth-validation-errors :errors="$errors"/>

            <form method="POST" action="{{ route('users.store') }}">
                @csrf
                <div class="mt-4">
                    <x-label for="name" :value="__('Name')"/>
                    <x-input type="text"
                             id="name"
                             name="name"
                             class="block w-full"
                             value="{{ old('name') }}"
                             required
                             autofocus/>
                </div>

                <div class="mt-4">
                    <x-label for="email" :value="__('Email')"/>
                    <x-input name="email"
                             type="email"
                             class="block w-full"
                             value="{{ old('email') }}"/>
                </div>

                <div class="mt-4">
                    <x-label for="password" :value="__('Password')"/>
                    <x-input type="password"
                             name="password"
                             class="block w-full"
                             required/>
                </div>

                <div class="mt-4">
                    <x-label id="password_confirmation" :value="__('Confirm Password')"/>
                    <x-input type="password"
                             name="password_confirmation"
                             class="block w-full"
                             required/>
                </div>
                 <div class="mt-4">
                    <x-label for="name" :value="__('Type de personnel')"/>
                    <select name="role" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600">
                        @foreach ($role as $role)
                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="mt-4">
                    <x-label for="company_id" :value="__('Entreprise de fonction')"/>
                    <select class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600" name="company_id" >
                        <option value="" selected></option>
                        @foreach ($company as $company)
                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mt-4">
                    <x-label for="name" :value="__('Droits')"/>
                    <select class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600" name="permission[]" multiple="">
                        @foreach ($permission as $permission)
                            <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mt-4">
                    <x-button class="block w-full">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </form>

        </div>
        <!--/Dialog -->
    </div><!-- /Overlay -->

</section>
