<?php

namespace App\Livewire\Customer;

use App\Livewire\Forms\CustomerForm;
use App\Livewire\Customer\ListCustomer;
use Livewire\Component;

class Create extends Component
{

    public CustomerForm $form;

    public $modalCustomerCreate = false;

    public function save()
    {
        $this->validate();

        $simpan = $this->form->store();

        is_null($simpan) ? $this->dispatch('notify', title: 'success', message: 'Added Data Success') : $this->dispatch('notify', title: 'failed', message: 'Added Data Failed');

        // $this->modalCustomerCreate = false;

        $this->dispatch('dispatch-customer-create-save')->to(ListCustomer::class);
    }

    public function render()
    {
        return view('livewire.customer.create');
    }
}
