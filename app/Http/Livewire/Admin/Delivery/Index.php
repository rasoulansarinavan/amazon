<?php

namespace App\Http\Livewire\Admin\Delivery;

use App\Models\delivery;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $listeners = ['delete'];
    public $name = '', $amount = '', $delivery_time = '', $description = '';
    public $delivery_id;
    public $search = '';
    public $delivery;

    public function saveDelivery($formData, delivery $deliveries)
    {
        $validator = Validator::make($formData, [
            'name' => 'required |string',
            'amount' => 'required |integer',
            'delivery_time' => 'required | integer',
            'description' => 'string',
        ],
            [
                '*.required' => 'فیلد ضروری',
                '*.integer' => 'فیلد بایذ عدد باشد',
                '*.string' => 'فیلد بایذ رشته باشد',
            ]
        );

        $validator->validate();
        $this->resetValidation();
        $deliveries->saveDelivery($formData, $this->delivery_id);
        $this->dispatchBrowserEvent('swal:alert-success');
        $this->name = '';
        $this->amount = '';
        $this->delivery_time = '';
        $this->description = '';
    }


    public function editDelivery($delivery_id)
    {
        $delivery = delivery::query()->where('id', $delivery_id)->first();

        $this->name = $delivery->name;
        $this->amount = $delivery->amount;
        $this->delivery_time = $delivery->delivery_time;
        $this->description = $delivery->description;
        $this->delivery_id = $delivery->id;
    }

    public function show($value)
    {
        $delivery = delivery::query()->where('id', $value)->first();

        if ($delivery->active == 0) {
            delivery::query()->where('id', $value)->update(['active' => 1]);
        } elseif ($delivery->active == 1) {
            delivery::query()->where('id', $value)->update(['active' => 0]);
        }
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'id' => $id,
        ]);
    }

    public function delete($delivery_id)
    {
        delivery::query()->where('id', $delivery_id)->delete();
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function render()
    {
        $allDelivery = delivery::query()->orderBy('id');

        if ($this->search) {
            $allDelivery = $allDelivery
                ->Where('title', 'like', '%' . $this->search . '%')
                ->orWhere('id', 'like', '%' . $this->search . '%');
        }

        return view('livewire.admin.delivery.index', [
            'allDelivery' => $allDelivery->paginate(10)
        ])->layout('layouts.app-admin');
    }
}
