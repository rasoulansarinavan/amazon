<?php

namespace App\Repositories;

use App\Models\File;
use App\Models\Slider;
use Illuminate\Support\Str;

class SliderRepository
{
    public function findById($id)
    {
        return Slider::query()->where('id', $id)->first();
    }

    public function findFileById(int $id)
    {
        return File::query()->where(['type' => 'slider', 'service_id' => $id])->first();
    }

    public function updateById($id, $data)
    {
        Slider::query()->where('id', $id)->update($data);
    }

    public function saveSlider($formData, $slider_id): Slider
    {
        $slider = Slider::query()->updateOrCreate(
            [
                'id' => $slider_id

            ],
            [
                'title' => $formData['title'],
                'slug' => Str::slug($formData['title'], '-', null),
            ]
        );
        return $slider;
    }

    public function deleteById(int $id)
    {
        \Illuminate\Support\Facades\File::deleteDirectory(public_path('images/sliders/' . $id));
        Slider::query()->where('id', $id)->delete();
        File::query()->where(['type' => 'slider', 'service_id' => $id])->delete();
    }
}
