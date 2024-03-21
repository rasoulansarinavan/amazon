<?php

declare(strict_types=1);

namespace App\Actions\Banner;

use App\Repositories\BannerRepository;

class DeleteBanner
{
    public function __construct(
        private readonly BannerRepository $bannerRepository,
    )
    {
    }

    public function execute($value)
    {
        $this->bannerRepository->deleteById($value);
    }
}
