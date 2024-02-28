<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property-read int $id
 * @property int $category_id
 * @property string $title
 * @property string $icon
 * @property string $description
 * @property-read File $image
 */

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $with = ['image'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
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
