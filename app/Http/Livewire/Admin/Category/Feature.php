<?php

namespace App\Http\Livewire\Admin\Category;

use App\Actions\Category\CreateCategoryFeature;
use App\Actions\Category\DeleteCategoryFeature;
use App\Actions\Category\EditCategoryFeature;
use App\Models\Category;
use App\Models\Features;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Feature extends Component
{
    public $title = '', $category_id, $feature_id;
    public $category, $features;
    protected $listeners = ['delete'];
    public $search = '';

    public function mount($id)
    {
        $this->category_id = $id;
        $this->category = Category::query()->where('id', $id)->firstOrFail();
    }


    public function saveFeature($formData, Features $features, CreateCategoryFeature $action)
    {
        $validator = Validator::make($formData, [
            'title' => 'required',
            'category_id' => 'exists:categories,id',
        ],
            [
                '*.required' => 'فیلد اجباری است.',
                'category_id.exists' => 'دسته والد نامعتبر است.'
            ]
        );
        $category_id = $this->category_id;
        $feature_id = $this->feature_id;

        $validator->validate();
        $this->resetValidation();
        $action->execute($formData, $feature_id, $category_id);
        $this->dispatchBrowserEvent('swal:alert-success');

        $this->title = '';
        $this->category_id = '';
        $this->feature_id = '';

        $this->redirect('/admin/category/feature/' . $category_id);
    }

    public function editFeature($value, EditCategoryFeature $editCategoryFeature)
    {
        $editCategoryFeature->execute($value);

        $this->title = $editCategoryFeature->title;
        $this->category_id = $editCategoryFeature->category_id;
        $this->feature_id = $editCategoryFeature->feature_id;
    }

    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'id' => $id,
        ]);
    }

    public function delete($value, DeleteCategoryFeature $deleteCategoryFeature)
    {
        $deleteCategoryFeature->execute($value);
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function render()
    {
        $features = $this->features = Features::query()->where('category_id', $this->category_id)->get();
        return view('livewire.admin.category.feature', ['features' => $features])->layout('layouts.app-admin');
    }
}
