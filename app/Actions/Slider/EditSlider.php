<?php

namespace App\Actions\Slider;

use App\Repositories\SliderRepository;

class EditSlider
{
    public function __construct(
        private readonly SliderRepository $sliderRepository,
    )
    {
    }

    public $file;
    public $oldPhoto;
    public $title;
    public $slider_id;

    public function execute($value): void
    {
        $slider = $this->sliderRepository->findById($value);
        $image = $this->sliderRepository->findFileById($value);

        @$this->file = $image->file;
        @$this->oldPhoto = $image->file;

        $this->title = $slider->title;
        $this->slider_id = $slider->id;

    }
}
