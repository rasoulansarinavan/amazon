<?php

namespace App\Http\Livewire\Admin\Brand;

use App\Models\Brand;
use App\Models\Category;
use App\Models\File;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $persian_name = '', $original_name = '';
    public $brand_id;
    protected $listeners = ['delete'];
    public $fileExtension, $extensions = ['jpeg', 'jpg', 'png', 'gif'], $oldPhoto = '', $file;
    public $search = '';

    public function updatedFile()
    {
        $this->oldPhoto = '';
        $this->fileExtension = $this->file->getClientOriginalExtension();
        $this->validate([
            'file' => 'nullable|image|mimes:jpeg,jpg,png,gif,webp|max:1024', // 1MB Max
        ], [
            'file.required' => 'فیلد ضروری',
            'file.max' => 'حداکثر حجم تصویر : 1MB',
            /* 'file.dimensions' => 'ایعاد تصاویر باید w:500 , h:500 px باشد',*/
            'file.image' => 'پسوندهای قابل قبول: webp ,jpeg ,jpg , png , gif',
        ]);
    }

    public function saveBrand($formData, Brand $brands)
    {
        $formData['file'] = $this->file;
        $validator = Validator::make($formData, [
            'persian_name' => 'required',
            'original_name' => 'required',
            'file' => 'nullable|image|mimes:jpeg,jpg,png,gif,webp|max:1024', // 1MB Max
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
        $brands->saveBrand($formData, $this->brand_id, $this->file);
        $this->dispatchBrowserEvent('swal:alert-success');
        $this->persian_name = '';
        $this->original_name = '';
        $this->file = [];
    }

    public function editBrand($brand_id)
    {
        $brand = Brand::query()->where('id', $brand_id)->first();
        $image = File::query()->where(['type' => 'brand', 'service_id' => $brand_id])->first();

        @$this->file = $image->file;
        @$this->oldPhoto = $image->file;

        $this->persian_name = $brand->persian_name;
        $this->original_name = $brand->original_name;
        $this->brand_id = $brand->id;
    }

    public function show($value)
    {
        $brand = Brand::query()->where('id', $value)->first();

        if ($brand->status == 0) {
            Brand::query()->where('id', $value)->update(['status' => 1]);
        } elseif ($brand->status == 1) {
            Brand::query()->where('id', $value)->update(['status' => 0]);
        }
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'id' => $id,
        ]);
    }

    public function delete($brand_id)
    {
        Brand::query()->where('id', $brand_id)->delete();
        File::query()->where(['type' => 'brand', 'service_id' => $brand_id])->delete();
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function render()
    {
        $brands = Brand::query()->get();
        $allBrands = Brand::query()->with('image')->orderBy('id');

        if ($this->search) {
            $allBrands = $allBrands
                ->Where('title', 'like', '%' . $this->search . '%')
                ->orWhere('id', 'like', '%' . $this->search . '%');
        }
        return view('livewire.admin.brand.index', [
            'allBrands' => $allBrands->paginate(10),
            'brands' => $brands
        ])->layout('layouts.app-admin');
    }
}
