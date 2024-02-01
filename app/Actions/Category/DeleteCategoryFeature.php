<?php

namespace App\Actions\Category;

use App\Repositories\CategoryRepository;

class DeleteCategoryFeature
{
    public function __construct(
        private readonly CategoryRepository $categoryRepository,
    )
    {
    }

    public function execute($value)
    {
        $this->categoryRepository->deleteFeatureById($value);
    }
}
