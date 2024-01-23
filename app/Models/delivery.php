<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class delivery extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function saveDelivery($formData, $delivery_id)
    {
        delivery::query()->updateOrCreate(
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
    }
}
