<?php

declare(strict_types=1);

namespace App\Actions\Discount;

use App\Repositories\DiscountRepository;

class StatusCommonDiscount
{
    public function __construct(
        private readonly DiscountRepository $discountRepository
    ) {
    }

    public function execute($value)
    {
        $common = $this->discountRepository->findById($value);
        if ($common->status == 0) {
            $this->discountRepository->updateById($value, ['status' => 1]);
        } elseif ($common->status == 1) {
            $this->discountRepository->updateById($value, ['status' => 0]);
        }

    }
}
