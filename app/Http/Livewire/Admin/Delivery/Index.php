<?php

namespace App\Http\Livewire\Admin\Delivery;

use App\Actions\Delivery\CreateDelivery;
use App\Actions\Delivery\DeleteDelivery;
use App\Actions\Delivery\EditDelivery;
use App\Actions\Delivery\ShowDelivery;
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

    public function saveDelivery($formData, delivery $deliveries, CreateDelivery $action)
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
        $action->execute($formData, $this->delivery_id);
        $this->dispatchBrowserEvent('swal:alert-success');
        $this->name = '';
        $this->amount = '';
        $this->delivery_time = '';
        $this->description = '';
    }


    public function editDelivery($value, EditDelivery $editDelivery)
    {
        $editDelivery->execute($value);

        $this->name = $editDelivery->name;
        $this->amount = $editDelivery->amount;
        $this->delivery_time = $editDelivery->delivery_time;
        $this->description = $editDelivery->description;
        $this->delivery_id = $editDelivery->delivery_id;
    }

    public function show($value, ShowDelivery $showDelivery)
    {
        $showDelivery->execute($value);
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'id' => $id,
        ]);
    }

    public function delete($value, DeleteDelivery $deleteDelivery)
    {
        $deleteDelivery->execute($value);
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
