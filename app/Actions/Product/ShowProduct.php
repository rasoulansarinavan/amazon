<?php

namespace App\Actions\Product;

use App\Repositories\ProductRepository;

class ShowProduct
{
    public function __construct(
        private readonly ProductRepository $productRepository,
    )
    {
    }

    public function execute($value): void
    {
        $product = $this->productRepository->findById($value);

        if ($product->show == 0) {
            $this->productRepository->updateById($value, ['show' => 1]);
        } elseif ($product->show == 1) {
            $this->productRepository->updateById($value, ['show' => 0]);
        }
    }
}
