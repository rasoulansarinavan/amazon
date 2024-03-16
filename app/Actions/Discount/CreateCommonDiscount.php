<?php

declare(strict_types=1);

namespace App\Actions\Discount;

use App\Repositories\DiscountRepository;

class CreateCommonDiscount
{
    public function __construct(
        private readonly DiscountRepository $discountRepository,
    ) {
    }

    public function execute($formData, $commonId): void
    {
        $this->discountRepository->saveCommon($formData, $commonId);
    }
}
