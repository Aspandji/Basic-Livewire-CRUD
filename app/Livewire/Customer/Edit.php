<?php

namespace App\Livewire\Customer;

use App\Livewire\Forms\CustomerForm;
use App\Models\Customer;
use Livewire\Attributes\On;
use Livewire\Component;

class Edit extends Component
{

    public CustomerForm $form;

    public $modalCustomerEdit = false;

    #[On('dispatch-customer-table-edit')]
    public function set_customer(Customer $id)
    {
        $this->form->setCustomer($id);

        $this->modalCustomerEdit = true;
    }

    public function edit()
    {
        $this->validate();

        $update = $this->form->update();

        is_null($update) ? $this->dispatch('notify', title: 'success', message: 'Updated Data Success') : $this->dispatch('notify', title: 'failed', message: 'Updated Data Failed');

        $this->modalCustomerEdit = false;

        $this->dispatch('dispatch-customer-create-edit')->to(ListCustomer::class);
    }

    public function render()
    {
        return view('livewire.customer.edit');
    }
}
