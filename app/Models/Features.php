<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Features extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function saveFeature($formData, $feature_id, $category_id)
    {
   
        Features::query()->updateOrCreate(
            [
                'id' => $feature_id,
                'category_id' => $category_id,
            ],
            [
                'title' => $formData['title'],
            ]
        );
    }


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function featureValue()
    {
        return $this->belongsTo(Features::class, 'id', 'feature_id');
    }
}
