<?php

namespace App\Actions\Delivery;


use App\Repositories\DeliveryRepository;

class EditDelivery
{
    public function __construct(
        private readonly DeliveryRepository $deliveryRepository,
    )
    {
    }

    public function execute($value)
    {

        $delivery = $this->deliveryRepository->findById($value);

        $this->name = $delivery->name;
        $this->amount = $delivery->amount;
        $this->delivery_time = $delivery->delivery_time;
        $this->description = $delivery->description;
        $this->delivery_id = $delivery->id;

    }
}
