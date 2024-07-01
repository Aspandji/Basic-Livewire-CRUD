<div>

    <x-dialog-modal wire:model.live="modalCustomerDelete">
        <x-slot name="title">
            Form Delete Customer
        </x-slot>

        <x-slot name="content">

            <p>Apakah Anda Yakin Menghapus data dengan ID: {{ $id }} dan Name: {{ $name }}</p>

        </x-slot>

        <x-slot name="footer">
            <x-secondary-button x-on:click="$wire.set('modalCustomerDelete', false)" wire:loading.attr="disabled">
                Cancel
            </x-secondary-button>

            <x-danger-button x-on:click="$wire.delete()" class="ms-3" wire:loading.attr="disabled">
                Delete
            </x-danger-button>
        </x-slot>
    </x-dialog-modal>
</div>
