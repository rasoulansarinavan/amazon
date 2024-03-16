<?php

declare(strict_types=1);

namespace App\Actions\Delivery;

use App\Repositories\DeliveryRepository;

class EditDelivery
{
    public function __construct(
        private readonly DeliveryRepository $deliveryRepository,
    ) {
    }

    public $name;
    public $amount;
    public $delivery_time;
    public $description;
    public $delivery_id;

    public function execute($value): void
    {

        $delivery = $this->deliveryRepository->findById($value);

        $this->name = $delivery->name;
        $this->amount = $delivery->amount;
        $this->delivery_time = $delivery->delivery_time;
        $this->description = $delivery->description;
        $this->delivery_id = $delivery->id;

    }
}
