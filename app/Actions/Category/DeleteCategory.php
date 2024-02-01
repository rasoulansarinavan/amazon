<?php

namespace App\Actions\Category;

use App\Models\Brand;
use App\Repositories\BrandRepository;
use App\Repositories\CategoryRepository;

class DeleteCategory
{
    public function __construct(
        private readonly CategoryRepository $categoryRepository,
    )
    {
    }

    public function execute($value)
    {
        $this->categoryRepository->deleteById($value);
    }
}
