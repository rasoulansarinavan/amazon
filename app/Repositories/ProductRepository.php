<?php

namespace App\Repositories;


use App\Models\Features;
use App\Models\FeatureValues;
use App\Models\File;
use App\Models\Product;
use App\Models\ProductSeoItem;
use Illuminate\Support\Str;

class ProductRepository
{
    public function findById(int $id)
    {
        return Product::query()->where('id', $id)->first();
    }

    public function findCategoryById(int $id)
    {
        return Features::query()->where('category_id', $id)->get();
    }

    public function deleteById(int $id)
    {
        \Illuminate\Support\Facades\File::deleteDirectory(public_path('images/products/large' . $id));
        \Illuminate\Support\Facades\File::deleteDirectory(public_path('images/products/thumbnails' . $id));
        Product::query()->where('id', $id)->delete();
        File::query()->where(['type' => 'product', 'service_id' => $id])->delete();
    }

    public function updateById(int $id, array $data)
    {
        Product::query()->where('id', $id)->update($data);
    }

    public function submitInfo($formData, $features, $product_id)
    {
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
//        $this->imageResizing($file, $product);
        return $product;
    }
}
