<div>

    <x-dialog-modal wire:model.live="modalCustomerEdit" submit="edit">
        <x-slot name="title">
            Form Edit Customer
        </x-slot>

        <x-slot name="content">

            <div class="my-2">
                <x-label for="form.name" value="Name" />

                <x-input wire:model="form.name" id="form.name" type="text"
                    class="w-full p-4 pe-12 text-sm shadow-sm mt-1" placeholder="Enter Name" require
                    autocomplete="form.name" />
            </div>

            <div class="my-2">
                <x-label for="form.email" value="Email" />

                <x-input wire:model="form.email" id="form.email" type="text"
                    class="w-full p-4 pe-12 text-sm shadow-sm mt-1" placeholder="Enter Email" require
                    autocomplete="form.email" />
            </div>

            <div class="my-2">
                <x-label for="form.address" value="Address" />

                <x-input wire:model="form.address" id="form.address" type="text"
                    class="w-full p-4 pe-12 text-sm shadow-sm mt-1" placeholder="Enter Address" require
                    autocomplete="form.address" />
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-secondary-button x-on:click="$wire.set('modalCustomerEdit', false)" wire:loading.attr="disabled">
                Cancel
            </x-secondary-button>

            <x-button class="ms-3" wire:loading.attr="disabled">
                Update
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
