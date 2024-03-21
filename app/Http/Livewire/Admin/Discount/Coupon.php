<?php

declare(strict_types=1);

namespace App\Http\Livewire\Admin\Discount;

use App\Actions\Discount\CreateCouponDiscount;
use App\Actions\Discount\DeleteCouponDiscount;
use App\Actions\Discount\EditCouponDiscount;
use App\Actions\Discount\StatusCouponDiscount;
use App\Models\Coupon as Coupons;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Coupon extends Component
{
    public $title;
    public $code;
    public $amount;
    public $amount_type;
    public $discount_ceiling;
    public $type;
    public $start_date;
    public $end_date;
    public $user_id;
    public $couponId;
    public $users;
    protected $listeners = ['delete'];

    public function changeType($value)
    {
        if ($value == 1) {
            $this->users = User::query()->get();
        } elseif ($value == 0) {
            $this->users = null;
        }
    }

    public function saveCoupon($formData, Coupons $coupons, CreateCouponDiscount $action)
    {
        $realTimestampStart = substr($formData['start_date'], 0, 10);
        $formData['start_date'] = date('Y-m-d H:i:s', (int)$realTimestampStart);

        $realTimestampStart = substr($formData['end_date'], 0, 10);
        $formData['end_date'] = date('Y-m-d H:i:s', (int)$realTimestampStart);

        $validator = Validator::make(
            $formData,
            [
                'title' => 'required|string',
                'code' => 'required',
                'amount' => 'required|string',
                'amount_type' => 'required|integer',
                'discount_ceiling' => 'integer',
                'type' => 'required|integer',
                'start_date' => 'required|date|after:today',
                'end_date' => 'required|date|after:start_date',
                'user_id' => 'nullable|integer',
            ],
            [
                '*.required' => 'فیلد ضروری',
                '*.integer' => 'فیلد بایذ عدد باشد',
                '*.string' => 'فیلد بایذ رشته باشد',
                '*.date' => 'فیلد بایذ تاریخ باشد',
                '*.after' => 'تاریخ باید از امروز به بعد باشد',

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
