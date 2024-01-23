<?php

namespace App\Http\Livewire\Admin\Order;

use App\Models\Order;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $orders = Order::query()->get();
        return view('livewire.admin.order.index', ['orders' => $orders])->layout('layouts.app-admin');
    }
}
