<?php

declare(strict_types=1);

namespace App\Actions\Category;

use App\Repositories\CategoryRepository;

class EditCategory
{
    public function __construct(
        private readonly CategoryRepository $categoryRepository,
    ) {
    }

    public $file;
    public $oldPhoto;
    public $title;
    public $category_id;
    public $icon;
    public $description;
    public $user_level_id;
    public $cat_id;

    public function execute($value): void
    {

        $category = $this->categoryRepository->findById($value);
        $image = $this->categoryRepository->findFileById($value);

        @$this->file = $image->file;
        @$this->oldPhoto = $image->file;

        $this->title = $category->title;
        $this->category_id = $category->category_id;
        $this->icon = $category->icon;
        $this->description = $category->description;
        $this->user_level_id = $category->user_level_id;
        $this->cat_id = $category->id;

    }
}
