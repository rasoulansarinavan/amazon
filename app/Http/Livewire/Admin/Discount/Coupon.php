<?php

namespace App\Http\Livewire\Admin\Discount;

use App\Actions\Discount\CreateCouponDiscount;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Livewire\Component;
use \App\Models\Coupon as Coupons;

class Coupon extends Component
{
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
    }

    public function render()
    {
        return view('livewire.admin.discount.coupon')->layout('layouts.app-admin');
    }
}
