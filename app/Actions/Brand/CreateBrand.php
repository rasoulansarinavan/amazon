<?php

namespace App\Actions\Brand;

use App\Repositories\BrandRepository;
use App\Repositories\FileRepository;
use Illuminate\Support\Facades\DB;

class CreateBrand
{
    public function __construct(
        private readonly BrandRepository $brandRepository,
        private readonly FileRepository $fileRepository,
    ) {}

    public function execute($formData, $brand_id, $image): void
    {
        DB::transaction(function () use ($formData, $brand_id, $image) {
            $brand = $this->brandRepository->saveBrand($formData, $brand_id);

            $this->fileRepository->saveFile($brand->id, $image);
        });
    }
}
