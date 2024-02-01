<?php

namespace App\Repositories;

use App\Models\Brand;
use App\Models\File;
use Illuminate\Support\Str;

class BrandRepository
{
    public function findById(int $id)
    {
        return Brand::query()->where('id', $id)->first();
    }

    public function findFileById(int $id)
    {
        return File::query()->where(['type' => 'brand', 'service_id' => $id])->first();
    }

    public function updateById(int $id, array $data)
    {
        Brand::query()->where('id', $id)->update($data);
    }

    public function deleteById(int $id)
    {
        \Illuminate\Support\Facades\File::deleteDirectory(public_path('images/brands/' . $id));
        Brand::query()->where('id', $id)->delete();
        File::query()->where(['type' => 'brand', 'service_id' => $id])->delete();
    }

    public function saveBrand($formData, $brand_id): Brand
    {
        $brand = Brand::query()->updateOrCreate(
            [
                'id' => $brand_id
            ],
            [
                'persian_name' => $formData['persian_name'],
                'original_name' => $formData['original_name'],
                'slug' => Str::slug($formData['persian_name'], '-', null),
            ]
        );

        return $brand;
    }
}
