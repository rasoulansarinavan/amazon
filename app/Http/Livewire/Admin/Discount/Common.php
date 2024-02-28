<?php

declare(strict_types=1);

namespace App\Http\Livewire\Admin\Discount;

use App\Actions\Discount\CreateCommonDiscount;
use App\Actions\Discount\DeleteCommonDiscount;
use App\Actions\Discount\EditCommonDiscount;
use App\Actions\Discount\StatusCommonDiscount;
use App\Models\Common as Commons;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Common extends Component
{
    public $title;
    public $percentage;
    public $discount_ceiling;
    public $minimal_order_amount;
    public $start_date;
    public $end_date;
    public $commonId;
    protected $listeners = ['delete'];

    public function saveCommon($formData, Commons $commons, CreateCommonDiscount $action)
    {
        $validator = Validator::make(
            $formData,
            [
                'title' => 'required|string',
                'percentage' => 'required|integer',
                'discount_ceiling' => 'required|integer',
                'minimal_order_amount' => 'required|integer',
                'start_date' => 'required',
                'end_date' => 'required',
            ],
            [
                '*.required' => 'فیلد ضروری',
                '*.integer' => 'فیلد بایذ عدد باشد',
                '*.string' => 'فیلد بایذ رشته باشد',
            ]
        );
        $validator->validate();
        $this->resetValidation();
        $action->execute($formData, $this->commonId);
        $this->dispatchBrowserEvent('swal:alert-success');
        $this->title = '';
        $this->percentage = '';
        $this->discount_ceiling = '';
        $this->minimal_order_amount = '';
        $this->start_date = '';
        $this->end_date = '';
    }

    public function editCommon($value, EditCommonDiscount $editCommonDiscount)
    {
        $editCommonDiscount->execute($value);
        $this->title = $editCommonDiscount->title;
        $this->percentage = $editCommonDiscount->percentage;
        $this->discount_ceiling = $editCommonDiscount->discount_ceiling;
        $this->minimal_order_amount = $editCommonDiscount->minimal_order_amount;
        $this->start_date = $editCommonDiscount->start_date;
        $this->end_date = $editCommonDiscount->end_date;
        $this->commonId = $editCommonDiscount->commonId;
    }

    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'id' => $id,
        ]);
    }

    public function delete($value, DeleteCommonDiscount $deleteCommonDiscount)
    {
        $deleteCommonDiscount->execute($value);
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function status($value, StatusCommonDiscount $statusCommonDiscount)
    {
        $statusCommonDiscount->execute($value);
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function render()
    {
        $commonDiscounts = Commons::query()->get();
        return view('livewire.admin.discount.common', compact('commonDiscounts'))->layout('layouts.app-admin');
    }
}
