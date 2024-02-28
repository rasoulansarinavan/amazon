<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Product;

class StoreRepository
{
    public function edit($formData, $product_id): Product
    {
        return Product::query()->updateOrCreate(
            [
                'id' => $product_id
            ],
            [
                'sold_number' => $formData['sold_number'],
                'frozen_number' => $formData['frozen_number'],
                'marketable_number' => $formData['marketable_number'],

            ]
        );
    }
}
