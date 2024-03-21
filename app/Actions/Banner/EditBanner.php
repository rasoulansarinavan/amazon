<?php


declare(strict_types=1);

namespace App\Actions\Banner;

use App\Repositories\BannerRepository;

class EditBanner
{
    public function __construct(
        private readonly BannerRepository $bannerRepository,
    )
    {
    }

    public $file;
    public $oldPhoto;
    public $title;
    public $banner_id;

    public function execute($value): void
    {
        $banner = $this->bannerRepository->findById($value);
        $image = $this->bannerRepository->findFileById($value);

        @$this->file = $image->file;
        @$this->oldPhoto = $image->file;

        $this->title = $banner->title;
        $this->banner_id = $banner->id;

    }
}
