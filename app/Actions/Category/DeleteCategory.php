<?php

declare(strict_types=1);

namespace App\Actions\Category;

use App\Repositories\CategoryRepository;

class DeleteCategory
{
    public function __construct(
        private readonly CategoryRepository $categoryRepository,
    ) {
    }

    public function execute($value)
    {
        $this->categoryRepository->deleteById($value);
    }
}
