<?php

namespace App\Livewire\Customer;

use App\Livewire\Forms\CustomerForm;
use Livewire\Attributes\On;
use App\Models\Customer;
use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class ListCustomer extends Component
{
    use WithPagination, WithoutUrlPagination;
    use WithSorting;

    public CustomerForm $form;

    public $paginate = 5, $sortBy = 'customers.id', $sortDirection = 'desc';

    #[On('dispatch-customer-create-save')]
    #[On('dispatch-customer-create-edit')]
    #[On('dispatch-customer-delete')]
    public function render()
    {
        return view('livewire.customer.list-customer', [
            'data' => Customer::where('id', 'like', '%' . $this->form->id . '%')
                ->where('name', 'like', '%' . $this->form->name . '%')
                ->where('email', 'like', '%' . $this->form->email . '%')
                ->where('address', 'like', '%' . $this->form->address . '%')
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->paginate)
        ]);
    }
}
