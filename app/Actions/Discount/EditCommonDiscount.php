<?php

declare(strict_types=1);

namespace App\Actions\Discount;

use App\Repositories\DiscountRepository;

class EditCommonDiscount
{
    public function __construct(
        private readonly DiscountRepository $discountRepository
    )
    {
    }

    public $title, $percentage, $discount_ceiling, $minimal_order_amount, $start_date, $end_date, $commonId;

    public function execute($value): void
    {
        $common = $this->discountRepository->findById($value);
        $this->title = $common->title;
        $this->percentage = $common->percentage;
        $this->discount_ceiling = $common->discount_ceiling;
        $this->minimal_order_amount = $common->minimal_order_amount;
        $this->start_date = $common->start_date;
        $this->end_date = $common->end_date;
        $this->commonId = $common->id;
    }
}
