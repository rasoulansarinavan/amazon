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
}
