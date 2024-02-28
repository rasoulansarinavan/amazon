<?php

declare(strict_types=1);

namespace App\Http\Livewire\Admin\Product;

use App\Actions\Product\DeleteProduct;
use App\Actions\Product\ShowProduct;
use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = ['delete'];

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

    public function show($value, ShowProduct $showProduct)
    {
        $showProduct->execute($value);
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'id' => $id,
        ]);
    }

    public function delete($value, DeleteProduct $deleteProduct)
    {
        $deleteProduct->execute($value);
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function render()
    {
        $products = Product::query()->get();
        return view('livewire.admin.product.index', ['products' => $products])->layout('layouts.app-admin');
    }
}
