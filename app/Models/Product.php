<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function submitInfo($formData, $features, $product_id, $file)
    {
        DB::transaction(function () use ($formData, $features, $product_id, $file) {
            //create product
            $product = Product::query()->updateOrCreate(
                [
                    'id' => $product_id
                ],
                [
                    'title' => $formData['title'],
                    'category_id' => $formData['category_id'],
                    'brand_id' => $formData['brand_id'],
                    'long_description' => $formData['long_description'],
                    'slug' => Str::slug($formData['title']),
                    'price' => $formData['price'],
                    'discount' => $formData['discount'],
                ]
            );

            ProductSeoItem::query()->updateOrCreate(
                [
                    'id' => $product_id
                ],
                [
                    'meta_name' => $formData['meta_name'],
                    'meta_keywords' => $formData['meta_keywords'],
                    'meta_description' => $formData['meta_description'],
                    'product_id' => $product->id
                ]
            );

            foreach ($features as $key => $value) {
                $featureId = explode('_', $key)[1];
                $featureValue = explode('_', $key)[0];
                $feature = FeatureValues::query()->updateOrCreate(
                    [
                        'feature_id' => $featureId,
                        'product_id' => $product->id,
                    ],
                    [
                        'category_id' => $formData['category_id'],
                        'value' => $value,
                    ]
                );
            }
            //insert images to server and database
            $this->imageResizing($file, $product);
        });
    }


    public function imageResizing($file, $product)
    {

        $path_thumbnail = public_path('/images/products/thumbnails/' . $product->id);
        $path_large = public_path('/images/products/large/' . $product->id);

        if (!File::exists($path_thumbnail)) {
            mkdir($path_thumbnail, 0755);
            mkdir($path_large, 0755);
        }

        foreach ($file as $item) {
            $image_name = str_replace(' ', '_', $product->title) . '_' . time() + rand(0, 12312) . '.' . $item->extension();

            Image::make($item)->save($path_thumbnail . '/' . $image_name, 95);
            Image::make($item)->save($path_large . '/' . $image_name, 75);

            \App\Models\File::query()->create(
                [
                    'service_id' => $product->id,
                    'file' => $image_name,
                    'type' => 'product',
                ]
            );
        }

    }

    public function images()
    {
        return $this->hasMany(\App\Models\File::class, 'service_id')->where('type', '=', 'product');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function seo()
    {
        return $this->belongsTo(ProductSeoItem::class, 'id', 'product_id');
    }

    public function featureValue()
    {
        return $this->hasMany(Features::class, 'category_id');
    }

}
