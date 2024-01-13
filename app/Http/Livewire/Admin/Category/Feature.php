<?php

namespace App\Http\Livewire\Admin\Category;

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


    public function saveFeature($formData, Features $features)
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
        $features->saveFeature($formData, $feature_id, $category_id);
        $this->dispatchBrowserEvent('swal:alert-success');

        $this->title = '';
        $this->category_id = '';
        $this->feature_id = '';

        $this->redirect('/admin/category/feature/' . $category_id);
    }

    public function editFeature($feature_id)
    {
        $feature = Features::query()->where('id', $feature_id)->first();

        $this->title = $feature->title;
        $this->category_id = $feature->category_id;
        $this->feature_id = $feature->id;
    }

    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'id' => $id,
        ]);
    }

    public function delete($feature_id)
    {
        Features::query()->where('id', $feature_id)->delete();
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function render()
    {
        $features = $this->features = Features::query()->where('category_id', $this->category_id)->get();
        return view('livewire.admin.category.feature', ['features' => $features])->layout('layouts.app-admin');
    }
}
