<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

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


    public function image()
    {
        return $this->belongsTo(File::class, 'id', 'service_id')->where('type', '=', 'brand');
    }
}
