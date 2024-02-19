<?php

namespace App\Http\Livewire\Admin\Discount;

use Livewire\Component;

class Common extends Component
{
    public function render()
    {
        return view('livewire.admin.discount.common')->layout('layouts.app-admin');
    }
}
