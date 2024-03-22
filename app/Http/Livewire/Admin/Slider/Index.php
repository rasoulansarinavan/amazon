<?php

namespace App\Http\Livewire\Admin\Slider;

use App\Actions\Slider\CreateSlider;
use App\Actions\Slider\DeleteSlider;
use App\Actions\Slider\EditSlider;
use App\Actions\Slider\ShowSlider;
use App\Models\Slider;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $title = '';
    public $slider_id;
    protected $listeners = ['delete'];
    public $fileExtension;
    public $extensions = ['jpeg', 'jpg', 'png', 'gif'];
    public $oldPhoto = '';
    public $file;
    public $search = '';

    public function updatedFile()
    {
        $this->oldPhoto = '';
        $this->fileExtension = $this->file->getClientOriginalExtension();
        $this->validate([
            'file' => 'required|image|mimes:jpeg,jpg,png,gif,webp|max:1024', // 1MB Max
        ], [
            'file.required' => 'فیلد ضروری',
            'file.max' => 'حداکثر حجم تصویر : 1MB',
            /* 'file.dimensions' => 'ایعاد تصاویر باید w:500 , h:500 px باشد',*/
            'file.image' => 'پسوندهای قابل قبول: webp ,jpeg ,jpg , png , gif',
        ]);
    }

    public function saveSlider($formData, Slider $sliders, CreateSlider $action)
    {
        $formData['file'] = $this->file;
        $validator = Validator::make(
            $formData,
            [
                'title' => 'required',
                'file' => 'required|image|mimes:jpeg,jpg,png,gif,webp|max:1024', // 1MB Max
            ],
            [
                '*.required' => 'فیلد ضروری',
                '*.integer' => 'فیلد بایذ عدد باشد',
                '*.exists' => 'فیلد موجود نیست',
                '*.string' => 'فیلد بایذ رشته باشد',
                'file.image' => 'پسوندهای قابل قبول: webp ,jpeg ,jpg , png , gif',
            ]
        );
        if ($this->oldPhoto) {
            $this->validate([
                'file' => 'nullable', // 1MB Max
            ], [
                'file.required' => 'فیلد ضروری',
            ]);
        }

        $validator->validate();
        $this->resetValidation();
        $action->execute($formData, $this->slider_id, $this->file);
        $this->dispatchBrowserEvent('swal:alert-success');
        $this->title = '';
        $this->file = '';
    }

    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'id' => $id,
        ]);
    }

    public function delete($value, DeleteSlider $deleteSlider)
    {
        $deleteSlider->execute($value);
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function editSlider($value, EditSlider $editSlider)
    {
        $editSlider->execute($value);

        @$this->file = $editSlider->file;
        @$this->oldPhoto = $editSlider->file;

        $this->title = $editSlider->title;
        $this->slider_id = $editSlider->slider_id;
    }

    public function show($value, ShowSlider $showSlider)
    {
        $showSlider->execute($value);
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function render()
    {
        $sliders = Slider::query()->get();
        return view('livewire.admin.slider.index', compact('sliders'))->layout('layouts.app-admin');
    }
}
