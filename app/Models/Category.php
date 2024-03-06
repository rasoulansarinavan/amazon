<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property-read int $id
 * @property int $category_id
 * @property string $title
 * @property string $icon
 * @property string $description
 * @property-read Category $category
 * @property-read File $image
 */

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $with = ['image'];

    /**
     * @return BelongsTo<Category, Category>
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    /**
     * @return HasMany<Category>
     */
    public function subCategories(): HasMany
    {
        return $this->hasMany(Category::class, 'category_id');
    }

    /**
     * @return BelongsTo<File, Category>
     */
    public function image(): BelongsTo
    {
        return $this->belongsTo(File::class, 'id', 'service_id')->where('type', '=', 'category');
    }
}
