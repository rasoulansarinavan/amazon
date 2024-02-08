<?php

namespace App\Http\Livewire\Admin\Store;

use App\Models\Product;
use Livewire\Component;

class Update extends Component
{
    public $product_id;

    public function mount($id)
    {
        $this->product_id = $id;
        $this->product = Product::query()->where('id', $id)->firstOrFail();
    }
    public function render()
    {
        return view('livewire.admin.store.update')->layout('layouts.app-admin');
    }
}
