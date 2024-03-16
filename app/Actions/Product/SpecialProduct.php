<?php

declare(strict_types=1);

namespace App\Actions\Product;

use App\Repositories\ProductRepository;

class SpecialProduct
{
    public function __construct(
        private readonly ProductRepository $productRepository,
    ) {
    }

    public function execute($value)
    {
        $product = $this->productRepository->findById($value);

        if ($product->special == 0) {
            $this->productRepository->updateById($value, ['special' => 1]);
        } elseif ($product->special == 1) {
            $this->productRepository->updateById($value, ['special' => 0]);
        }
    }
}
