<?php

namespace App\Actions\Delivery;

use App\Repositories\DeliveryRepository;

class CreateDelivery
{
    public function __construct(
        private readonly DeliveryRepository $deliveryRepository,
    )
    {
    }

    public function execute($formData, $delivery_id): void
    {
        $this->deliveryRepository->saveDelivery($formData, $delivery_id);
    }
}
