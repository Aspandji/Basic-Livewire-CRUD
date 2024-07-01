<div>

    <x-select wire:model.live="paginate" class="text-sm shadow-sm mt-8">
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="25">25</option>
        <option value="50">50</option>
        <option value="100">100</option>
    </x-select>

    <table class="w-full m-2">
        <thead>
            <tr>
                <th class="p-2 whitespace-nowrap border border-spacing-1">#</th>
                <th class="p-2 whitespace-nowrap border border-spacing-1">Action</th>
                <th x-on:click="$wire.sortField('id')"
                    class="p-2 whitespace-nowrap border border-spacing-1 cursor-pointer">
                    <x-sort :$sortDirection :$sortBy :field="'id'" /> ID
                </th>
                <th x-on:click="$wire.sortField('name')"
                    class="p-2 whitespace-nowrap border border-spacing-1 cursor-pointer">
                    <x-sort :$sortDirection :$sortBy :field="'name'" /> Name
                </th>
                <th x-on:click="$wire.sortField('email')"
                    class="p-2 whitespace-nowrap border border-spacing-1 cursor-pointer">
                    <x-sort :$sortDirection :$sortBy :field="'email'" /> Email
                </th>
                <th x-on:click="$wire.sortField('address')"
                    class="p-2 whitespace-nowrap border border-spacing-1 cursor-pointer">
                    <x-sort :$sortDirection :$sortBy :field="'address'" /> Address
                </th>
            </tr>
            <tr>
                <td class="p-2 text-center border border-spacing-1"></td>
                <td class="p-2 text-center border border-spacing-1"></td>
                <td class="p-2 text-center border border-spacing-1"><x-input wire:model.live="form.id" type="search"
                        class="w-full text-sm shadow-sm" />
                </td>
                <td class="p-2 text-center border border-spacing-1"><x-input wire:model.live="form.name" type="search"
                        class="w-full text-sm shadow-sm" /></td>
                <td class="p-2 text-center border border-spacing-1"><x-input wire:model.live="form.email" type="search"
                        class="w-full text-sm shadow-sm" /></td>
                <td class="p-2 text-center border border-spacing-1"><x-input wire:model.live="form.address"
                        type="search" class="w-full text-sm shadow-sm" />
                </td>
            </tr>
        </thead>
        <tbody>
            @isset($data)
                @foreach ($data as $item)
                    <tr>
                        <td class="p-2 text-center border border-spacing-1">{{ $loop->iteration }}</td>
                        <td class="p-2 border border-spacing-1">
                            <x-button type="button"
                                x-on:click="$dispatch('dispatch-customer-table-edit', {id: '{{ $item->id }}' })">Edit</x-button>
                            <x-danger-button
                                x-on:click="$dispatch('dispatch-customer-table-delete', {id: '{{ $item->id }}', name: '{{ $item->name }}' })">Delete</x-danger-button>
                        </td>
                        <td class="p-2 text-center border border-spacing-1">{{ $item->id }}</td>
                        <td class="p-2 border border-spacing-1">{{ $item->name }}</td>
                        <td class="p-2 border border-spacing-1">{{ $item->email }}</td>
                        <td class="p-2 border border-spacing-1">{{ $item->address }}</td>
                    </tr>
                @endforeach
            @endisset
        </tbody>
    </table>

    <div class="mt-3">{{ $data->onEachSide(1)->links() }}</div>
</div>
