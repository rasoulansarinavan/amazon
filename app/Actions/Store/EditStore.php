<?php

declare(strict_types=1);

namespace App\Actions\Store;

use App\Repositories\StoreRepository;

class EditStore
{
    public function __construct(
        private readonly StoreRepository $storeRepository,
    ) {
    }

    public function execute($formData, $product_id): void
    {
        $this->storeRepository->edit($formData, $product_id);
    }
}
