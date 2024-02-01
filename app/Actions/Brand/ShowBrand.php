<?php

namespace App\Actions\Brand;
use App\Repositories\BrandRepository;

class ShowBrand
{
    public function __construct(
        private readonly BrandRepository $brandRepository,
    ) {
    }

    public function execute($value) {

        $brand = $this->brandRepository->findById($value);

        if ($brand->status == 0) {
            $this->brandRepository->updateById($value, ['status' => 1]);
        } elseif ($brand->status == 1) {
            $this->brandRepository->updateById($value, ['status' => 0]);
        }
    }
}
