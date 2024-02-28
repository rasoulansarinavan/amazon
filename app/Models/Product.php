<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
