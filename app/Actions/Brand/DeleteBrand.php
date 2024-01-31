<?php

namespace App\Actions\Brand;

use App\Models\Brand;
use App\Repositories\BrandRepository;

class DeleteBrand
{
    public function __construct(
        private readonly BrandRepository $brandRepository,
    )
    {
    }

    public function execute($value)
    {
        $this->brandRepository->deleteById($value);
    }
}
