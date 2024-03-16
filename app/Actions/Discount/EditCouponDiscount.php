<?php

declare(strict_types=1);

namespace App\Actions\Discount;

use App\Repositories\DiscountRepository;

class EditCouponDiscount
{
    public function __construct(
        private readonly DiscountRepository $discountRepository
    ) {
    }

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

    public function execute($value)
    {
        $coupon = $this->discountRepository->findCouponById($value);
        $this->title = $coupon->title;
        $this->code = $coupon->code;
        $this->amount = $coupon->amount;
        $this->amount_type = $coupon->amount_type;
        $this->discount_ceiling = $coupon->discount_ceiling;
        $this->type = $coupon->type;
        $this->start_date = $coupon->start_date;
        $this->end_date = $coupon->end_date;
        $this->user_id = $coupon->user_id;
        $this->couponId = $coupon->id;
    }
}
