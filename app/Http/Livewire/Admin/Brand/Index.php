<?php

declare(strict_types=1);

namespace App\Http\Livewire\Admin\Brand;

use App\Actions\Brand\CreateBrand;
use App\Actions\Brand\DeleteBrand;
use App\Actions\Brand\EditBrand;
use App\Actions\Brand\ShowBrand;
use App\Models\Brand;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $persian_name = '';
    public $original_name = '';
    public $brand_id;
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

    public function saveBrand($formData, Brand $brands, CreateBrand $action)
    {
        $formData['file'] = $this->file;
        $validator = Validator::make(
            $formData,
            [
                'persian_name' => 'required',
                'original_name' => 'required',
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
        $action->execute($formData, $this->brand_id, $this->file);
        $this->dispatchBrowserEvent('swal:alert-success');
        $this->persian_name = '';
        $this->original_name = '';
        $this->file = '';
    }

    public function editBrand($value, EditBrand $editBrand)
    {
        $editBrand->execute($value);

        @$this->file = $editBrand->file;
        @$this->oldPhoto = $editBrand->file;

        $this->persian_name = $editBrand->persian_name;
        $this->original_name = $editBrand->original_name;
        $this->brand_id = $editBrand->brand_id;
    }

    public function show($value, ShowBrand $showBrand)
    {
        $showBrand->execute($value);
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'id' => $id,
        ]);
    }

    public function delete($value, DeleteBrand $deleteBrand)
    {
        $deleteBrand->execute($value);
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function render()
    {
        $brands = Brand::query()->get();
        $allBrands = Brand::query()->get();

//        if ($this->search) {
//            $allBrands = $allBrands
//                ->Where('title', 'like', '%' . $this->search . '%')
//                ->orWhere('id', 'like', '%' . $this->search . '%');
//        }
        return view('livewire.admin.brand.index', [
            'allBrands' => $allBrands,
            'brands' => $brands
        ])->layout('layouts.app-admin');
    }
}
