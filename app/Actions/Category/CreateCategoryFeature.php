<?php

declare(strict_types=1);

namespace App\Actions\Category;

use App\Repositories\CategoryRepository;

class CreateCategoryFeature
{
    public function __construct(
        private readonly CategoryRepository $categoryRepository,
    ) {
    }

    public function execute($formData, $feature_id, $category_id): void
    {
        $this->categoryRepository->saveFeature($formData, $feature_id, $category_id);
    }
}
