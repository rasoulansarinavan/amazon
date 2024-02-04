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
