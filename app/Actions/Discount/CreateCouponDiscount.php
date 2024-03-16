<?php

declare(strict_types=1);

namespace App\Actions\Discount;

use App\Repositories\DiscountRepository;

class CreateCouponDiscount
{
    public function __construct(
        private readonly DiscountRepository $discountRepository
    ) {
    }

    public function execute($formData, $couponId): void
    {
        $this->discountRepository->saveCoupon($formData, $couponId);
    }
}
