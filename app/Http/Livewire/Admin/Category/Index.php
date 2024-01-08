<?php

namespace App\Http\Livewire\Admin\Category;

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

    public $title = '', $category_id = '', $icon = '', $user_level_id;
    public $cat_id, $description, $showMoreInputsParentCategory = false;
    protected $listeners = ['delete'];
    public $fileExtension, $extensions = ['jpeg', 'jpg', 'png', 'gif'], $oldPhoto = '', $file;
    public $search = '';

    public function getCategoryId($category_id)
    {
        $this->category_id = $category_id;
    }

    public function special($value)
    {
        $category = Category::query()->where('id', $value)->first();

        if ($category->special == 0) {
            Category::query()->where('id', $value)->update(['special' => 1]);
        } elseif ($category->special == 1) {
            Category::query()->where('id', $value)->update(['special' => 0]);
        }
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function comingSoon($value)
    {
        $category = Category::query()->where('id', $value)->first();

        if ($category->coming_soon == 0) {
            Category::query()->where('id', $value)->update(['coming_soon' => 1]);
        } elseif ($category->coming_soon == 1) {
            Category::query()->where('id', $value)->update(['coming_soon' => 0]);
        }
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function new($value)
    {
        $category = Category::query()->where('id', $value)->first();

        if ($category->new == 0) {
            Category::query()->where('id', $value)->update(['new' => 1]);
        } elseif ($category->new == 1) {
            Category::query()->where('id', $value)->update(['new' => 0]);
        }
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function show($value)
    {
        $category = Category::query()->where('id', $value)->first();

        if ($category->active == 0) {
            Category::query()->where('id', $value)->update(['active' => 1]);
        } elseif ($category->active == 1) {
            Category::query()->where('id', $value)->update(['active' => 0]);
        }
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'id' => $id,
        ]);
    }

    public function delete($category_id)
    {
        Category::query()->where('id', $category_id)->delete();
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
