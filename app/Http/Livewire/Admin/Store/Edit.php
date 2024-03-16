<?php

declare(strict_types=1);

namespace App\Http\Livewire\Admin\Store;

use App\Actions\Store\EditStore;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Edit extends Component
{
    public $product_id;
    public $product;
    public $sold_number;
    public $frozen_number;
    public $marketable_number;

    public function mount($id)
    {
        $this->product_id = $id;
        $product = $this->product = Product::query()->where('id', $id)->firstOrFail();
        $this->sold_number = $product->sold_number;
        $this->frozen_number = $product->frozen_number;
        $this->marketable_number = $product->marketable_number;
    }

    public function edit($formData, Product $product, EditStore $action)
    {
        $validator = Validator::make(
            $formData,
            [
                'sold_number' => 'required|integer',
                'frozen_number' => 'required|integer',
                'marketable_number' => 'required|integer',
            ],
            [
                '*.required' => 'فیلد ضروری',
                '*.integer' => 'فیلد بایذ عدد باشد',
            ]
        );
        $validator->validate();
        $this->resetValidation();
        $action->execute($formData, $this->product_id);
        $this->dispatchBrowserEvent('swal:alert-success');
        $this->redirect('/admin/store');
    }

    public function render()
    {
        return view('livewire.admin.store.edit')->layout('layouts.app-admin');
    }
}
