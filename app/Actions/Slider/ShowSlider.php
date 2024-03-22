<?php

namespace App\Actions\Slider;


use App\Repositories\SliderRepository;

class ShowSlider
{
    public function __construct(
        private readonly SliderRepository $sliderRepository,
    )
    {
    }
    public function execute($value)
    {
        $slider = $this->sliderRepository->findById($value);

        if ($slider->status == 0) {
            $this->sliderRepository->updateById($value, ['status' => 1]);
        } elseif ($slider->status == 1) {
            $this->sliderRepository->updateById($value, ['status' => 0]);
        }
    }
}
