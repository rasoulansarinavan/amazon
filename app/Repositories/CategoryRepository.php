<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Category;
use App\Models\Features;
use App\Models\File;
use Illuminate\Support\Str;

class CategoryRepository
{
    public function findById(int $id)
    {
        return Category::query()->where('id', $id)->first();
    }

    public function findFeatureById(int $id)
    {
        return Features::query()->where('id', $id)->first();
    }

    public function findFileById(int $id)
    {
        return File::query()->where(['type' => 'category', 'service_id' => $id])->first();
    }

    public function updateById(int $id, array $data)
    {
        Category::query()->where('id', $id)->update($data);
    }

    public function deleteById(int $id)
    {
        \Illuminate\Support\Facades\File::deleteDirectory(public_path('images/categories/' . $id));
        Category::query()->where('id', $id)->delete();
        File::query()->where(['type' => 'category', 'service_id' => $id])->delete();
    }

    public function deleteFeatureById($value)
    {
        Features::query()->where('id', $value)->delete();
    }

    public function saveCategory($formData, $cat_id): Category
    {
        $category = Category::query()->updateOrCreate(
            [
                'id' => $cat_id
            ],
            [
                'title' => $formData['title'],
                'category_id' => $formData['category_id'],
                'icon' => $formData['icon'],
                'description' => $formData['description'],
                'slug' => Str::slug($formData['title'], '-', null),
            ]
        );

        return $category;
    }

    public function saveFeature($formData, $feature_id, $category_id)
    {

        Features::query()->updateOrCreate(
            [
                'id' => $feature_id,
                'category_id' => $category_id,
            ],
            [
                'title' => $formData['title'],
            ]
        );
    }
}
