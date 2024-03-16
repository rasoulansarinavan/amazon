<?php

declare(strict_types=1);

namespace App\Actions\Discount;

use App\Repositories\DiscountRepository;

class EditCommonDiscount
{
    public function __construct(
        private readonly DiscountRepository $discountRepository
    ) {
    }

    public $title;
    public $percentage;
    public $discount_ceiling;
    public $minimal_order_amount;
    public $start_date;
    public $end_date;
    public $commonId;

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
