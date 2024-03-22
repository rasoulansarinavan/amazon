<?php

namespace App\Actions\Slider;

use App\Repositories\FileRepository;
use App\Repositories\SliderRepository;
use Illuminate\Support\Facades\DB;

class CreateSlider
{
    public function __construct(
        private readonly SliderRepository $sliderRepository,
        private readonly FileRepository   $fileRepository,

    )
    {
    }

    public function execute($formData, $slider_id, $image): void
    {
        DB::transaction(function () use ($formData, $slider_id, $image) {
            $slider = $this->sliderRepository->saveSlider($formData, $slider_id);
            $this->fileRepository->saveSliderFile($slider->id, $image);
        });
    }
}
