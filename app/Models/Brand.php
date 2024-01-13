<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class Brand extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $with = ['image'];

    public function saveBrand($formData, $brand_id, $image)
    {
        DB::transaction(function () use ($formData, $brand_id, $image) {
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

            $brandId = $brand->id;
            $path = public_path() . '/images/brands/' . $brandId;
            if (!\Illuminate\Support\Facades\File::exists($path)) {
                \Illuminate\Support\Facades\File::makeDirectory($path);
            }
            if ($brand_id == 0) {
                $extension = $image->extension();
                $image_name = 'image_brands_' . $brandId . '_' . '_brands_' . Str::random(10) . time() . '.' . $extension;
                $path = 'images/brands/' . $brandId . '/' . $image_name;
                Image::make($image)->save(public_path('images/brands/' . $brandId . '/' . $image_name), 40);
                $this->insertImageToFileTable1($path, $brandId, $brand_id);
            }

            $adminFileName = File::query()->where([
                'service_id' => $brand_id,
                'type' => 'brand',
            ])->pluck('file')->first();

            if ($image != $adminFileName && $brand_id != 0) {
                if (isset($image)) {
                    unlink($adminFileName);
                    $extension = $image->extension();
                    $image_name = 'image_brands_' . $brandId . '_' . '_brands_' . Str::random(10) . time() . '.' . $extension;
                    $path = 'images/brands/' . $brandId . '/' . $image_name;
                    Image::make($image)->save(public_path('images/brands/' . $brandId . '/' . $image_name), 40);
                    $this->insertImageToFileTable1($path, $brandId, $brand_id);
                }
            }
        });
    }

    public function insertImageToFileTable1($path, $brandId, $brand_id)
    {

        return \App\Models\File::query()->updateOrCreate(
            [
                'service_id' => $brandId,
                'type' => 'brand',
            ],
            [
                'file' => $path,
            ]
        );
    }
    public function image()
    {
        return $this->belongsTo(\App\Models\File::class, 'id', 'service_id')->where('type', '=', 'brand');
    }
}
