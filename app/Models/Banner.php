<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Banner extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $with = ['image'];

    /**
     * @return BelongsTo<File, Brand>
     */
    public function image(): BelongsTo
    {
        return $this->belongsTo(File::class, 'id', 'service_id')->where('type', '=', 'banner');
    }
}
