<?php

namespace App\Http\Livewire\Admin\Discount;

use Livewire\Component;

class Coupon extends Component
{
    public function render()
    {
        return view('livewire.admin.discount.copan')->layout('layouts.app-admin');
    }
}
