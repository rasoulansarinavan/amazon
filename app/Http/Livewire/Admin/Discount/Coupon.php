<?php

namespace App\Http\Livewire\Admin\Discount;

use App\Actions\Discount\CreateCouponDiscount;
use App\Actions\Discount\DeleteCouponDiscount;
use App\Actions\Discount\EditCouponDiscount;
use App\Actions\Discount\StatusCouponDiscount;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Livewire\Component;
use \App\Models\Coupon as Coupons;

class Coupon extends Component
{
    public $title, $code, $amount, $amount_type, $discount_ceiling, $type, $start_date, $end_date, $user_id;
    public $couponId;
    protected $listeners = ['delete'];

    public function changeType($value)
    {
        if ($value == 1) {
            $this->users = User::query()->get();
        }
    }

    public function saveCoupon($formData, Coupons $coupons, CreateCouponDiscount $action)
    {
        $validator = Validator::make($formData, [
            'title' => 'required|string',
            'code' => 'required',
            'amount' => 'required|string',
            'amount_type' => 'required|integer',
            'discount_ceiling' => 'integer',
            'type' => 'required|integer',
            'start_date' => 'required|integer',
            'end_date' => 'required|integer',
            'user_id' => 'nullable|integer',
        ],
            [
                '*.required' => 'فیلد ضروری',
                '*.integer' => 'فیلد بایذ عدد باشد',
                '*.string' => 'فیلد بایذ رشته باشد',

            ]
        );
        $validator->validate();
        $this->resetValidation();
        $action->execute($formData, $this->couponId);
        $this->dispatchBrowserEvent('swal:alert-success');
        $this->title = '';
        $this->code = '';
        $this->amount = '';
        $this->amount_type = '';
        $this->discount_ceiling = '';
        $this->type = '';
        $this->start_date = '';
        $this->end_date = '';
        $this->user_id = '';
        $this->couponId = '';
    }

    public function editCoupon($value, EditCouponDiscount $editCouponDiscount)
    {
        $editCouponDiscount->execute($value);
        $this->title = $editCouponDiscount->title;
        $this->code = $editCouponDiscount->code;
        $this->amount = $editCouponDiscount->amount;
        $this->amount_type = $editCouponDiscount->amount_type;
        $this->discount_ceiling = $editCouponDiscount->discount_ceiling;
        $this->type = $editCouponDiscount->type;
        $this->start_date = $editCouponDiscount->start_date;
        $this->end_date = $editCouponDiscount->end_date;
        $this->user_id = $editCouponDiscount->user_id;
        $this->couponId = $editCouponDiscount->couponId;

    }

    public function status($value, StatusCouponDiscount $statusCouponDiscount)
    {
        $statusCouponDiscount->execute($value);
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'id' => $id,
        ]);
    }

    public function delete($value, DeleteCouponDiscount $deleteCouponDiscount)
    {
        $deleteCouponDiscount->execute($value);
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function render()
    {
        $coupons = Coupons::query()->get();
        return view('livewire.admin.discount.coupon', compact('coupons'))->layout('layouts.app-admin');
    }
}
