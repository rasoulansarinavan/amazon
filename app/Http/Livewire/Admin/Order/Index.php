<?php

namespace App\Http\Livewire\Admin\Order;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.order.index')->layout('layouts.app-admin');
    }
}
