<?php

namespace App\Actions\Category;

use App\Repositories\CategoryRepository;

class ComingSoonCategory
{
    public function __construct(
        private readonly CategoryRepository $categoryRepository,
    )
    {
    }

    public function execute($value)
    {
        $category = $this->categoryRepository->findById($value);
        if ($category->coming_soon == 0) {
            $this->categoryRepository->updateById($value, ['coming_soon' => 1]);
        } elseif ($category->coming_soon == 1) {
            $this->categoryRepository->updateById($value, ['coming_soon' => 0]);
        }
    }
}
