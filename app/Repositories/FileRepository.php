<?php

namespace App\Repositories;

use App\Models\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File as IlluminateFile;

class FileRepository
{
    public function saveFile(int $brandId, UploadedFile $image): void
    {
        $path = public_path() . '/images/brands/' . $brandId;
        if (!IlluminateFile::exists($path)) {
            IlluminateFile::makeDirectory($path);
        }
        if ($brandId == 0 && $image != null) {
            $extension = $image->extension();
            $image_name = 'image_brands_' . $brandId . '_' . '_brands_' . Str::random(10) . time() . '.' . $extension;
            $path = 'images/brands/' . $brandId . '/' . $image_name;
            Image::make($image)->save(public_path('images/brands/' . $brandId . '/' . $image_name), 40);
            $this->insertImageToFileTable1($path, $brandId, $brandId);
        }

        $adminFileName = File::query()->where([
            'service_id' => $brandId,
            'type' => 'brand',
        ])->pluck('file')->first();

        if ($image != $adminFileName && $brandId != 0) {
            $extension = $image->extension();
            $image_name = 'image_brands_' . $brandId . '_' . '_brands_' . Str::random(10) . time() . '.' . $extension;
            $path = 'images/brands/' . $brandId . '/' . $image_name;
            Image::make($image)->save(public_path('images/brands/' . $brandId . '/' . $image_name), 40);
            $this->insertImageToFileTable1($path, $brandId, $brandId);
        }
    }

    public function insertImageToFileTable1($path, $brandId, $brand_id)
    {

        return File::query()->updateOrCreate(
            [
                'service_id' => $brandId,
                'type' => 'brand',
            ],
            [
                'file' => $path,
            ]
        );
    }

    public function saveCategoryFile(int $categoryId, UploadedFile $image): void
    {
        $path = public_path() . '/images/categories/' . $categoryId;
        if (!IlluminateFile::exists($path)) {
            IlluminateFile::makeDirectory($path);
        }
        if ($categoryId == 0 && $image != null) {
            $extension = $image->extension();
            $image_name = 'image_categories_' . $categoryId . '_' . '_categories_' . Str::random(10) . time() . '.' . $extension;
            $path = 'images/categories/' . $categoryId . '/' . $image_name;
            Image::make($image)->save(public_path('images/categories/' . $categoryId . '/' . $image_name), 40);
            $this->insertImageToFileTable2($path, $categoryId);
        }

        $adminFileName = File::query()->where([
            'service_id' => $categoryId,
            'type' => 'category',
        ])->pluck('file')->first();

        if ($image != $adminFileName && $categoryId != 0) {
            $extension = $image->extension();
            $image_name = 'image_categories_' . $categoryId . '_' . '_categories_' . Str::random(10) . time() . '.' . $extension;
            $path = 'images/categories/' . $categoryId . '/' . $image_name;
            Image::make($image)->save(public_path('images/categories/' . $categoryId . '/' . $image_name), 40);
            $this->insertImageToFileTable2($path, $categoryId, $categoryId);
        }
    }

    public function insertImageToFileTable2($path, $categoryId)
    {

        return File::query()->updateOrCreate(
            [
                'service_id' => $categoryId,
                'type' => 'category',
            ],
            [
                'file' => $path,
            ]
        );
    }

    public function imageResizing($photos, $product_id)
    {
        $path_thumbnail = public_path('/images/products/thumbnails/' . $product_id);
        $path_large = public_path('/images/products/large/' . $product_id);

        if (!IlluminateFile::exists($path_thumbnail)) {
            mkdir($path_thumbnail, 0755);
            mkdir($path_large, 0755);
        }

        foreach ($photos as $item) {
            $image_name = str_replace(' ', '_', 'product') . '_' . time() + rand(0, 12312) . '.' . $item->extension();

            Image::make($item)->save($path_thumbnail . '/' . $image_name, 95);
            Image::make($item)->save($path_large . '/' . $image_name, 75);

            \App\Models\File::query()->create(
                [
                    'service_id' => $product_id,
                    'file' => $image_name,
                    'type' => 'product',
                ]
            );
        }

    }
}
