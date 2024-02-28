<?php

declare(strict_types=1);

namespace App\Actions\Delivery;

use App\Repositories\DeliveryRepository;

class ShowDelivery
{
    public function __construct(
        private readonly DeliveryRepository $deliveryRepository,
    ) {
    }

    public function execute($value)
    {

        $delivery = $this->deliveryRepository->findById($value);

        if ($delivery->active == 0) {
            $this->deliveryRepository->updateById($value, ['active' => 1]);
        } elseif ($delivery->active == 1) {
            $this->deliveryRepository->updateById($value, ['active' => 0]);
        }
    }
}
