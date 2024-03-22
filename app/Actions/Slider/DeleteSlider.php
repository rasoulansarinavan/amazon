<?php

namespace App\Actions\Slider;

use App\Repositories\SliderRepository;

class DeleteSlider
{
    public function __construct(
        private readonly SliderRepository $sliderRepository,
    )
    {
    }

    public function execute($value)
    {
        $this->sliderRepository->deleteById($value);
    }
}
