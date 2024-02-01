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

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id','id');
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
