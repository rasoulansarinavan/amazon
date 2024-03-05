<?php

declare(strict_types=1);

namespace App\Actions\Brand;

use App\Repositories\BrandRepository;

class EditBrand
{
    public function __construct(
        private readonly BrandRepository $brandRepository,
    )
    {
    }

    public $file, $oldPhoto, $persian_name, $original_name, $brand_id;

    public function execute($value): void
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
