<?php

namespace App\Actions\Discount;

use App\Repositories\DiscountRepository;

class DeleteCouponDiscount
{
    public function __construct(
        private readonly DiscountRepository $discountRepository
    )
    {
    }
    public function execute($value)
    {
        $this->discountRepository->deleteCouponById($value);
    }
}
