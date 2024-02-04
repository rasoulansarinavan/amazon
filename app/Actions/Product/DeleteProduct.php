<?php

namespace App\Actions\Product;

use App\Repositories\ProductRepository;

class DeleteProduct
{
    public function __construct(
        private readonly ProductRepository $productRepository,
    )
    {
    }

    public function execute($value)
    {
        $this->productRepository->deleteById($value);
    }
}
