<?php

namespace App\Actions\Product;

use App\Repositories\FileRepository;
use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\DB;

class CreateProduct
{
    public function __construct(
        private readonly ProductRepository $productRepository,
        private readonly FileRepository    $fileRepository,
    )
    {
    }

    public function execute($allData, $features, $product_id, $photos): void
    {
        DB::transaction(function () use ($allData, $features, $product_id, $photos) {
            $product = $this->productRepository->submitInfo($allData, $features, $product_id, $photos);
            $this->fileRepository->imageResizing($photos, $product->id);
        });
    }
}
