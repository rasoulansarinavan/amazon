<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryFeature extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function saveFeature($formData, $category_id, $feature_id)
    {
        CategoryFeature::query()->updateOrCreate(
            [
                'id' => $feature_id
            ],
            [
                'title' => $formData['title'],
                'description' => $formData['description'],
                'category_id' => $category_id,
                'type' => 'category',
            ]
        );
    }


}
