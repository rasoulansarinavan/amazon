<?php

namespace App\Actions\Discount;

use App\Repositories\DiscountRepository;

class DeleteCommonDiscount
{
    public function __construct(
        private readonly DiscountRepository $discountRepository
    )
    {
    }

    public function execute($value)
    {
        $this->discountRepository->deleteById($value);
    }
}
