<?php

namespace App\Actions\Discount;

use App\Repositories\DiscountRepository;

class StatusCouponDiscount
{
    public function __construct(
        private readonly DiscountRepository $discountRepository
    )
    {
    }

    public function execute($value)
    {
        $coupon = $this->discountRepository->findCouponById($value);

        if ($coupon->status == 0) {
            $this->discountRepository->updateCouponById($value, ['status' => 1]);
        } elseif ($coupon->status == 1) {
            $this->discountRepository->updateCouponById($value, ['status' => 0]);
        }
    }
}
