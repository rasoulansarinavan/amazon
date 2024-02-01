<?php

namespace App\Actions\Category;

use App\Repositories\CategoryRepository;

class SpecialCategory
{
    public function __construct(
        private readonly CategoryRepository $categoryRepository,
    )
    {
    }

    public function execute($value)
    {

        $category = $this->categoryRepository->findById($value);

        if ($category->special == 0) {
            $this->categoryRepository->updateById($value, ['special' => 1]);
        } elseif ($category->special == 1) {
            $this->categoryRepository->updateById($value, ['special' => 0]);
        }
    }
}
