<?php

namespace App\Livewire\Customer;

use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{
    #[Title('Customer')]

    public function render()
    {
        return view('livewire.customer.index');
    }
}
