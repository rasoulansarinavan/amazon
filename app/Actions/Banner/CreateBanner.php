<?php

namespace App\Actions\Banner;

use App\Repositories\BannerRepository;
use App\Repositories\FileRepository;
use Illuminate\Support\Facades\DB;

class CreateBanner
{
    public function __construct(
        private readonly BannerRepository $bannerRepository,
        private readonly FileRepository   $fileRepository,
    )
    {
    }

    public function execute($formData, $banner_id, $image): void
    {
        DB::transaction(function () use ($formData, $banner_id, $image) {
            $banner = $this->bannerRepository->saveBanner($formData, $banner_id);
            $this->fileRepository->saveBannerFile($banner->id, $image);
        });
    }
}
