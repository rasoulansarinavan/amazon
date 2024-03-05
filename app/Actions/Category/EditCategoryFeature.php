<?php

declare(strict_types=1);

namespace App\Actions\Category;

use App\Repositories\CategoryRepository;

class EditCategoryFeature
{
    public function __construct(
        private readonly CategoryRepository $categoryRepository,
    ) {
    }

    public $title;
    public $category_id;
    public $feature_id;

    public function execute($value): void
    {

        $feature = $this->categoryRepository->findFeatureById($value);

        $this->title = $feature->title;
        $this->category_id = $feature->category_id;
        $this->feature_id = $feature->id;

    }
}
