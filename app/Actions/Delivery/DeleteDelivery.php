<?php

namespace App\Actions\Delivery;

use App\Repositories\DeliveryRepository;

class DeleteDelivery
{
    public function __construct(
        private readonly DeliveryRepository $deliveryRepository,
    )
    {
    }

    public function execute($value)
    {
        $this->deliveryRepository->deleteById($value);
    }
}
