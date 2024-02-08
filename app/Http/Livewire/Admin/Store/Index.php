<?php

namespace App\Http\Livewire\Admin\Store;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.admin.store.index', ['products' => $products])->layout('layouts.app-admin');
    }
}
