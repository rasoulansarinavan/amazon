<?php

namespace App\Http\Livewire\Admin\Category;

use App\Actions\Category\ComingSoonCategory;
use App\Actions\Category\CreateCategory;
use App\Actions\Category\DeleteCategory;
use App\Actions\Category\EditCategory;
use App\Actions\Category\NewCategory;
use App\Actions\Category\ShowCategory;
use App\Actions\Category\SpecialCategory;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $title = '', $category_id = '', $icon = '', $user_level_id;
    public $cat_id, $description = '', $showMoreInputsParentCategory = false;
    protected $listeners = ['delete'];
    public $fileExtension, $extensions = ['jpeg', 'jpg', 'png', 'gif'], $oldPhoto = '', $file;
    public $search = '';

    public function getCategoryId($category_id)
    {
        $this->category_id = $category_id;
    }

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

    public function changeCategory($value)
    {
        if ($value == 0) {
            $this->showMoreInputsParentCategory = true;
        } else {
            $this->showMoreInputsParentCategory = false;
        }
    }

    public function saveCategory($formData, Category $categories, CreateCategory $action)
    {
        $formData['file'] = $this->file;
        $validator = Validator::make($formData, [
            'title' => 'required',
            'category_id' => 'required',
            'icon' => 'string',
            'description' => 'string',
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
        $action->execute($formData, $this->cat_id, $this->file);
        $this->dispatchBrowserEvent('swal:alert-success');
        $this->title = '';
        $this->category_id = '';
        $this->icon = '';
        $this->description = '';
        $this->file = '';
    }

    public function editCategory($value, EditCategory $editCategory, $category_id)
    {
        if ($category_id == 0) {
            $this->showMoreInputsParentCategory = true;
        }

        $editCategory->execute($value);
        @$this->file = $editCategory->file;
        @$this->oldPhoto = $editCategory->file;

        $this->title = $editCategory->title;
        $this->category_id = $editCategory->category_id;
        $this->icon = $editCategory->icon;
        $this->description = $editCategory->description;
        $this->user_level_id = $editCategory->user_level_id;
        $this->cat_id = $editCategory->cat_id;
    }

    public function special($value, SpecialCategory $specialCategory)
    {
        $specialCategory->execute($value);
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function comingSoon($value, ComingSoonCategory $comingSoonCategory)
    {
        $comingSoonCategory->execute($value);
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function new($value, NewCategory $newCategory)
    {
        $newCategory->execute($value);
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function show($value, ShowCategory $showCategory)
    {
        $showCategory->execute($value);
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'id' => $id,
        ]);
    }

    public function delete($value, DeleteCategory $deleteCategory)
    {
        $deleteCategory->execute($value);
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    function render()
    {
        $categories = Category::query()->where('category_id', '=', 0)->get();
        $allCategory = Category::query()->with('category', 'image')->orderBy('category_id');

        if ($this->search) {
            $allCategory = $allCategory
                ->Where('title', 'like', '%' . $this->search . '%')
                ->orWhere('id', 'like', '%' . $this->search . '%');
        }

        return view('livewire.admin.category.index', [
            'allCategory' => $allCategory->paginate(10),
            'categories' => $categories
        ])->layout('layouts.app-admin');
    }

}
