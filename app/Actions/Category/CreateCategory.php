<?php

declare(strict_types=1);

namespace App\Actions\Category;

use App\Repositories\CategoryRepository;
use App\Repositories\FileRepository;
use Illuminate\Support\Facades\DB;

class CreateCategory
{
    public function __construct(
        private readonly CategoryRepository $categoryRepository,
        private readonly FileRepository     $fileRepository,
    ) {
    }

    public function execute($formData, $cat_id, $image): void
    {
        DB::transaction(function () use ($formData, $cat_id, $image) {
            $category = $this->categoryRepository->saveCategory($formData, $cat_id);
            $this->fileRepository->saveCategoryFile($category->id, $image);
        });
    }
}
