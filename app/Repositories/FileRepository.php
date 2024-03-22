<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File as IlluminateFile;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

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
            $this->insertImageToFileTable1($path, $brandId);
        }

        $adminFileName = File::query()->where([
            'service_id' => $brandId,
            'type' => 'brand',
        ])->first();

        if ($image != $adminFileName && $brandId != 0) {
            $extension = $image->extension();
            $image_name = 'image_brands_' . $brandId . '_' . '_brands_' . Str::random(10) . time() . '.' . $extension;
            $path = 'images/brands/' . $brandId . '/' . $image_name;
            Image::make($image)->save(public_path('images/brands/' . $brandId . '/' . $image_name), 40);
            $this->insertImageToFileTable1($path, $brandId);
        }
    }

    public function insertImageToFileTable1($path, $brandId)
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
        ])->first();

        if ($image != $adminFileName && $categoryId != 0) {
            $extension = $image->extension();
            $image_name = 'image_categories_' . $categoryId . '_' . '_categories_' . Str::random(10) . time() . '.' . $extension;
            $path = 'images/categories/' . $categoryId . '/' . $image_name;
            Image::make($image)->save(public_path('images/categories/' . $categoryId . '/' . $image_name), 40);
            $this->insertImageToFileTable2($path, $categoryId);
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
            $image_name = str_replace(' ', '_', 'product') . '_' . time() . '.' . $item->extension();

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

    public function saveAdminFile(int $adminId, UploadedFile $image): void
    {
        $path = public_path() . '/images/admins/' . $adminId;
        if (!IlluminateFile::exists($path)) {
            !IlluminateFile::makeDirectory($path);
        }
        if ($adminId == 0) {
            $extension = $image->extension();
            $image_name = 'image_admins_' . $adminId . '_' . '_admins_' . Str::random(10) . time() . '.' . $extension;
            $path = 'images/admins/' . $adminId . '/' . $image_name;
            Image::make($image)->save(public_path('images/admins/' . $adminId . '/' . $image_name), 40);
            $this->insertImageToFileTable3($path, $adminId);
        }
        $adminFileName = File::query()->where([
            'user_id' => $adminId,
            'type' => 'admin',
        ])->first();

        if ($image != $adminFileName && $adminId != 0) {
            //            unlink($adminFileName);
            $extension = $image->extension();
            $image_name = 'image_admins_' . $adminId . '_' . '_admins_' . Str::random(10) . time() . '.' . $extension;
            $path = 'images/admins/' . $adminId . '/' . $image_name;
            Image::make($image)->save(public_path('images/admins/' . $adminId . '/' . $image_name), 40);
            $this->insertImageToFileTable3($path, $adminId);
        }
    }

    public function insertImageToFileTable3($path, $adminId)
    {

        return File::query()->updateOrCreate(
            [
                'service_id' => $adminId,
                'type' => 'admin',
            ],
            [
                'file' => $path,
            ]
        );
    }


    public function saveBannerFile(int $bannerId, UploadedFile $image): void
    {
        $path = public_path() . '/images/banners/' . $bannerId;
        if (!IlluminateFile::exists($path)) {
            IlluminateFile::makeDirectory($path);
        }
        if ($bannerId == 0 && $image != null) {
            $extension = $image->extension();
            $image_name = 'image_banners_' . $bannerId . '_' . '_banners_' . Str::random(10) . time() . '.' . $extension;
            $path = 'images/banners/' . $bannerId . '/' . $image_name;
            Image::make($image)->save(public_path('images/banners/' . $bannerId . '/' . $image_name), 40);
            $this->insertImageToForbanner($path, $bannerId);
        }

        $adminFileName = File::query()->where([
            'service_id' => $bannerId,
            'type' => 'banner',
        ])->first();

        if ($image != $adminFileName && $bannerId != 0) {
            $extension = $image->extension();
            $image_name = 'image_banners_' . $bannerId . '_' . '_banners_' . Str::random(10) . time() . '.' . $extension;
            $path = 'images/banners/' . $bannerId . '/' . $image_name;
            Image::make($image)->save(public_path('images/banners/' . $bannerId . '/' . $image_name), 40);
            $this->insertImageToForBanner($path, $bannerId);
        }
    }

    public function insertImageToForBanner($path, $bannerId)
    {
        return File::query()->updateOrCreate(
            [
                'service_id' => $bannerId,
                'type' => 'banner',
            ],
            [
                'file' => $path,
            ]
        );
    }

    public function saveSliderFile(int $sliderId, UploadedFile $image): void
    {
        $path = public_path() . '/images/sliders/' . $sliderId;
        if (!IlluminateFile::exists($path)) {
            IlluminateFile::makeDirectory($path);
        }
        if ($sliderId == 0 && $image != null) {
            $extension = $image->extension();
            $image_name = 'image_sliders_' . $sliderId . '_' . '_sliders_' . Str::random(10) . time() . '.' . $extension;
            $path = 'images/sliders/' . $sliderId . '/' . $image_name;
            Image::make($image)->save(public_path('images/sliders/' . $sliderId . '/' . $image_name), 40);
            $this->insertImageToForSlider($path, $sliderId);
        }

        $adminFileName = File::query()->where([
            'service_id' => $sliderId,
            'type' => 'slider',
        ])->first();

        if ($image != $adminFileName && $sliderId != 0) {
            $extension = $image->extension();
            $image_name = 'image_sliders_' . $sliderId . '_' . '_sliders_' . Str::random(10) . time() . '.' . $extension;
            $path = 'images/sliders/' . $sliderId . '/' . $image_name;
            Image::make($image)->save(public_path('images/sliders/' . $sliderId . '/' . $image_name), 40);
            $this->insertImageToForSlider($path, $sliderId);
        }
    }

    public function insertImageToForSlider($path, $sliderId)
    {
        return File::query()->updateOrCreate(
            [
                'service_id' => $sliderId,
                'type' => 'slider',
            ],
            [
                'file' => $path,
            ]
        );
    }
}
