<?php

namespace App\Repositories;


use App\Models\delivery;

class DeliveryRepository
{
    public function findById(int $id)
    {
        return delivery::query()->where('id', $id)->first();
    }

    public function updateById(int $id, array $data)
    {
        delivery::query()->where('id', $id)->update($data);
    }

    public function deleteById(int $id)
    {
        delivery::query()->where('id', $id)->delete();
    }

    public function saveDelivery($formData, $delivery_id)
    {
        $delivery = delivery::query()->updateOrCreate(
            [
                'id' => $delivery_id
            ],
            [
                'name' => $formData['name'],
                'amount' => $formData['amount'],
                'delivery_time' => $formData['delivery_time'],
                'description' => $formData['description'],
            ]
        );
        return $delivery;
    }
}
