<?php

namespace App\Actions\Brand;

use App\Models\Brand;
use App\Repositories\BrandRepository;

class EditBrand
{
    public function __construct(
        private readonly BrandRepository $brandRepository,
    )
    {
    }

    public function execute($value)
    {

        $brand = $this->brandRepository->findById($value);
        $image = $this->brandRepository->findFileById($value);

        @$this->file = $image->file;
        @$this->oldPhoto = $image->file;

        $this->persian_name = $brand->persian_name;
        $this->original_name = $brand->original_name;
        $this->brand_id = $brand->id;

    }
}
