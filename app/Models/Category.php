<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;


class Category extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $with = ['image'];

    public function saveCategory($formData, $cat_id, $image)
    {
        DB::transaction(function () use ($formData, $cat_id, $image) {
            $service = Category::query()->updateOrCreate(
                [
                    'id' => $cat_id
                ],
                [
                    'title' => $formData['title'],
                    'category_id' => $formData['category_id'],
                    'icon' => $formData['icon'],
                    'description' => $formData['description'],
                ]
            );

            $service_id = $service->id;
            $path = public_path() . '/images/categories/' . $service_id;
            if (!\Illuminate\Support\Facades\File::exists($path)) {
                \Illuminate\Support\Facades\File::makeDirectory($path);
            }
            if ($cat_id == 0) {
                $extension = $image->extension();
                $image_name = 'image_categories_' . $service_id . '_' . '_categories_' . Str::random(10) . time() . '.' . $extension;
                $path = 'images/categories/' . $service_id . '/' . $image_name;
                Image::make($image)->save(public_path('images/categories/' . $service_id . '/' . $image_name), 40);
                $this->insertImageToFileTable1($path, $cat_id, $service_id);
            }

            $adminFileName = File::query()->where([
                'service_id' => $cat_id,
                'type' => 'category',
            ])->pluck('file')->first();

            if ($image != $adminFileName && $cat_id != 0) {
                if (isset($image)) {
                unlink($adminFileName);
                    $extension = $image->extension();
                    $image_name = 'image_categories_' . $service_id . '_' . '_categories_' . Str::random(10) . time() . '.' . $extension;
                    $path = 'images/categories/' . $service_id . '/' . $image_name;
                    Image::make($image)->save(public_path('images/categories/' . $service_id . '/' . $image_name), 40);
                    $this->insertImageToFileTable1($path, $cat_id, $service_id);
                }
            }
        });
    }

    public function insertImageToFileTable1($path, $cat_id, $service_id)
    {

        return \App\Models\File::query()->updateOrCreate(
            [
                'service_id' => $service_id,
                'type' => 'category',
            ],
            [
                'file' => $path,
            ]
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'id','category_id');
    }

    public function subCategories()
    {
        return $this->hasMany(Category::class, 'category_id');
    }

    public function image()
    {
        return $this->belongsTo(\App\Models\File::class, 'id', 'service_id')->where('type', '=', 'category');
    }
}