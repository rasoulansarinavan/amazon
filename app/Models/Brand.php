<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property-read int $id
 * @property string $persian_name
 * @property string $original_name
 * @property-read File $image
 */
class Brand extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $with = ['image'];

    /**
     * @return BelongsTo<File, Brand>
     */
    public function image(): BelongsTo
    {
        return $this->belongsTo(File::class, 'id', 'service_id')->where('type', '=', 'brand');
    }
}
