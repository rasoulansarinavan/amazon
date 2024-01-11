<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use App\Models\CategoryFeature;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Feature extends Component
{
    public $title = '', $description = '', $category_id = '', $feature_id;
    public $category, $features;
    protected $listeners = ['delete'];
    public $search = '';

    public function mount($category_id)
    {
        $this->category_id = $category_id;
        $this->category = Category::query()->where('id', $category_id)->firstOrFail();
//        $this->features = CategoryFeature::query()->where('category_id', $category_id)->get();
    }


    public function saveFeature($formData, CategoryFeature $features)
    {
        $validator = Validator::make($formData, [
            'title' => 'required',
            'description' => 'string',
            'category_id' => 'required',
        ],
            [
                '*.required' => 'فیلد ضروری',
                '*.integer' => 'فیلد بایذ عدد باشد',
                '*.exists' => 'فیلد موجود نیست',
                '*.string' => 'فیلد بایذ رشته باشد',
            ]
        );

//        $validator->validate();
//        $this->resetValidation();
        $features->saveFeature($formData, $this->category_id, $this->feature_id);
        $this->dispatchBrowserEvent('swal:alert-success');
//        $this->title = '';
//        $this->category_id = '';
//        $this->description = '';
    }

    public function render()
    {
        $features = $this->features = CategoryFeature::query()->where('category_id', $this->category_id)->get();
        return view('livewire.admin.category.feature', ['features' => $features])->layout('layouts.app-admin');
    }
}
