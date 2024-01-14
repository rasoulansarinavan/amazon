<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\File;
use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public function special($value)
    {
        $product = Product::query()->where('id', $value)->first();

        if ($product->special == 0) {
            Product::query()->where('id', $value)->update(['special' => 1]);
        } elseif ($product->special == 1) {
            Product::query()->where('id', $value)->update(['special' => 0]);
        }
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function show($value)
    {
        $product = Product::query()->where('id', $value)->first();

        if ($product->active == 0) {
            Product::query()->where('id', $value)->update(['active' => 1]);
        } elseif ($product->active == 1) {
            Product::query()->where('id', $value)->update(['active' => 0]);
        }
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'id' => $id,
        ]);
    }

    public function delete($product_id)
    {
        Product::query()->where('id', $product_id)->delete();
        File::query()->where('service_id', $product_id)->delete();
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function render()
    {
        $products = Product::query()->get();
        return view('livewire.admin.product.index', ['products' => $products])->layout('layouts.app-admin');
    }
}
