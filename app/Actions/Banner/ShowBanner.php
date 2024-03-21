<?php
declare(strict_types=1);

namespace App\Actions\Banner;

use App\Repositories\BannerRepository;

class ShowBanner
{
    public function __construct(
        private readonly BannerRepository $bannerRepository,
    )
    {
    }
    public function execute($value)
    {
        $banner = $this->bannerRepository->findById($value);

        if ($banner->status == 0) {
            $this->bannerRepository->updateById($value, ['status' => 1]);
        } elseif ($banner->status == 1) {
            $this->bannerRepository->updateById($value, ['status' => 0]);
        }
    }
}
