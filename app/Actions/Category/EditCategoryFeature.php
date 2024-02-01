<?php

namespace App\Actions\Category;


use App\Repositories\CategoryRepository;

class EditCategoryFeature
{
    public function __construct(
        private readonly CategoryRepository $categoryRepository,
    )
    {
    }

    public function execute($value)
    {

        $feature = $this->categoryRepository->findFeatureById($value);

        $this->title = $feature->title;
        $this->category_id = $feature->category_id;
        $this->feature_id = $feature->id;

    }
}
