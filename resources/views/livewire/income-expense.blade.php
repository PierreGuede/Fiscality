<div class="w-full ">
    @if (session()->has('message'))
        <div class="w-full py-3 pl-2 bg-green-500 rounded-md text-green-50">
            {{ session('message') }}
        </div>
    @endif

    {{-- <table class="table-auto">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>account</th>
        </tr>
        @foreach ($income_expense as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->account }}</td>
                <td>{{ $value->name }}</td>
            </tr>
        @endforeach
    </table> --}}

    <form class="w-full">
        <div class=" add-input">
            <div class="grid grid-cols-12">
                <div class="col-span-5 ">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Name" wire:model="name.0">
                        @error('name.0')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-span-5">
                    <div class="form-group">
                        <input type="account" class="form-control" wire:model="account.0" placeholder="Enter account">
                        @error('account.0')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-span-2">
                    <button class="px-4 py-2 bg-blue-500 text-blue-50"
                        wire:click.prevent="add({{ $i }})">Add</button>
                </div>
            </div>
        </div>

        @foreach ($inputs as $key => $value)
            <div class="border add-input">
                <div class="flex">
                    <div class="col-span-5">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Name"
                                wire:model="name.{{ $value }}">
                            @error('name.' . $value)
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-span-5 ">
                        <div class="form-group">
                            <input type="text" class="form-control" wire:model="account.{{ $value }}"
                                placeholder="Enter account">
                            @error('account.' . $value)
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-span-2">
                        <button class="px-4 py-2 bg-red-500 text-red-50"
                            wire:click.prevent="remove({{ $key }})">Remove</button>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="row">
            <div class="">
                <button type="button" wire:click.prevent="store()"
                    class="px-4 py-2 bg-green-500 text-green-50">Submit</button>
            </div>
        </div>

    </form>
</div>
