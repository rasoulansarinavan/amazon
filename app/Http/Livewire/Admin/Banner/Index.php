<?php

namespace App\Http\Livewire\Admin\Banner;

use App\Actions\Banner\CreateBanner;
use App\Actions\Banner\DeleteBanner;
use App\Actions\Banner\EditBanner;
use App\Actions\Banner\ShowBanner;
use App\Models\Banner;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $title = '';
    public $banner_id;
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

    public function saveBanner($formData, Banner $banners, CreateBanner $action)
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
        $action->execute($formData, $this->banner_id, $this->file);
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

    public function delete($value, DeleteBanner $deleteBanner)
    {
        $deleteBanner->execute($value);
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function editBanner($value, EditBanner $editBanner)
    {
        $editBanner->execute($value);

        @$this->file = $editBanner->file;
        @$this->oldPhoto = $editBanner->file;

        $this->title = $editBanner->title;
        $this->banner_id = $editBanner->banner_id;
    }

    public function show($value, ShowBanner $showBanner)
    {
        $showBanner->execute($value);
        $this->dispatchBrowserEvent('swal:alert-success');
    }
    public function render()
    {
        $banners = Banner::query()->get();
        return view('livewire.admin.banner.index', compact('banners'))->layout('layouts.app-admin');
    }
}
