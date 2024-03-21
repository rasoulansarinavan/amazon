<?php

namespace App\Repositories;

use App\Models\Banner;
use App\Models\File;
use Illuminate\Support\Str;

class BannerRepository
{
    public function findById($id)
    {
        return Banner::query()->where('id', $id)->first();
    }

    public function findFileById(int $id)
    {
        return File::query()->where(['type' => 'banner', 'service_id' => $id])->first();
    }

    public function updateById($id, $data)
    {
        Banner::query()->where('id', $id)->update($data);
    }

    public function saveBanner($formData, $banner_id): Banner
    {
        $banner = Banner::query()->updateOrCreate(
            [
                'id' => $banner_id

            ],
            [
                'title' => $formData['title'],
                'slug' => Str::slug($formData['title'], '-', null),
            ]
        );
        return $banner;
    }

    public function deleteById(int $id)
    {
        \Illuminate\Support\Facades\File::deleteDirectory(public_path('images/banners/' . $id));
        Banner::query()->where('id', $id)->delete();
        File::query()->where(['type' => 'banner', 'service_id' => $id])->delete();
    }


}
