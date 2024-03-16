<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property-read int $id
 * @property string $title
 * @property-read int $category_id
 * @property-read Features $featureValue
 */
class Features extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * @return BelongsTo<Category, Features>
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * @return BelongsTo<Features, Features>
     */
    public function featureValue(): BelongsTo
    {
        return $this->belongsTo(Features::class, 'id', 'feature_id');
    }
}
