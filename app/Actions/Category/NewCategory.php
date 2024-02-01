<?php

namespace App\Actions\Category;

use App\Repositories\CategoryRepository;

class NewCategory
{
    public function __construct(
        private readonly CategoryRepository $categoryRepository,
    )
    {
    }

    public function execute($value)
    {

        $category = $this->categoryRepository->findById($value);

        if ($category->new == 0) {
            $this->categoryRepository->updateById($value, ['new' => 1]);
        } elseif ($category->new == 1) {
            $this->categoryRepository->updateById($value, ['new' => 0]);
        }
    }
}
