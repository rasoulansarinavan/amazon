<?php

declare(strict_types=1);

namespace App\Actions\Category;

use App\Repositories\CategoryRepository;

class ShowCategory
{
    public function __construct(
        private readonly CategoryRepository $categoryRepository,
    ) {
    }

    public function execute($value)
    {

        $category = $this->categoryRepository->findById($value);

        if ($category->show == 0) {
            $this->categoryRepository->updateById($value, ['show' => 1]);
        } elseif ($category->show == 1) {
            $this->categoryRepository->updateById($value, ['show' => 0]);
        }
    }
}
