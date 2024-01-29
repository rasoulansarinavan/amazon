<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Features;
use App\Models\FeatureValues;
use App\Models\File;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $step1 = true, $step2 = false, $step3 = false, $step4 = false;
    public $title = '', $price = '', $discount = '', $long_description = '', $brand_id;
    public $categories = [];
    public $featureValue = [];
    public $features = [];
    public $brands = [];
    public $photos = [], $fileExtension, $extensions = ['jpeg', 'jpg', 'png', 'gif'], $oldPhotos = [];
    public $value;
    public $images = [];
    public $product;
    public $product_id = 0;
    public $data = [];


    public function mount()
    {
        if ($_GET and $_GET['product']) {
            $product_id = $_GET['product'];
            $product = $this->product = Product::query()->where('id', $product_id)->firstOrFail();
            $this->product_id = $product->id;
            $this->features = FeatureValues::query()->where('product_id', $product_id)->get();
            $this->featureValue = $product->featureValue;
            $this->images = File::query()->where(['service_id' => $product_id, 'type' => 'product'])->get();
//            foreach ($this->images as $key => $value) {
//                $this->images[] = $this->photos[] = $this->oldPhotos = $value->path;
//            }
        }
        $this->categories = Category::all();
        $this->brands = Brand::all();
    }

    public function updatedPhotos()
    {
        $this->oldPhotos = [];
        foreach ($this->photos as $photo) {
            $this->fileExtension = $photo->getClientOriginalExtension();
            $this->validate([
                'photos' => 'required|image|mimes:jpeg,jpg,png,gif,webp|max:1024|dimensions:min_width=1200,min_height=800,max_width=1200,max_height=800', // 1MB Max
            ], [
                'photos.required' => 'فیلد ضروری',
                'photos.max' => 'حداکثر حجم تصویر : 1MB',
                'photos.dimensions' => 'ایعاد تصاویر باید w:1200 , h:800 px باشد',
                'photos.image' => 'پسوندهای قابل قبول: jpeg ,jpg , png , gif , webp',
            ]);
        }

    }

    public function step1($formData)
    {
//        dd($formData);
        //Laravel | Unique validation where clause
        //https://stackoverflow.com/questions/49211988/laravel-unique-validation-where-clause
        $validator = Validator::make($formData, [
            'price' => 'required|integer',
            'discount' => 'integer',
            'title' => 'required|unique:products,title,' . $this->product_id . '| string | max: 50 ',
            'category_id' => 'required | integer | exists:categories,id',
            'brand_id' => 'required | integer | exists:brands,id',
            'long_description' => 'required | string',
        ], [
            '*.required' => 'فیلد ضروری',
            '*.unique' => 'این فیلد باید منحصر به فرد باشد',
            '*.integer' => 'این فیلد باید بصورت عددی باشد',
        ]);
        $validator->validate();
        $this->resetValidation();
        Session::put('step1', $formData);

        $this->step1 = false;
        $this->step2 = true;
    }

    public function changeCategory($value)
    {
        $this->features = Features::query()->where('category_id', $value)->get();
    }

    public function step2()
    {
        if (!$this->oldPhotos) {
            $this->validate([
                'photos' => 'required|image|mimes:jpeg,jpg,png,gif,webp|max:1024', // 1MB Max
            ], [
                'photos.required' => 'فیلد ضروری',
                'photos.max' => 'حداکثر حجم تصویر : 1MB',
                'photos.dimensions' => 'ایعاد تصاویر باید w:1200 , h:800 px باشد',
                'photos.image' => 'پسوندهای قابل قبول: png',
            ]);
        }
        $this->step2 = false;
        $this->step3 = true;
    }

    public function step3($formData, Product $product)
    {

        $validator = Validator::make($formData, [
            'meta_name' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required',


        ], [
            '*.required' => 'فیلد ضروری'
        ]);
        $validator->validate();
        $this->resetValidation();

        Session::put('step3', $formData);
        $formData = array_merge(Session::get('step1'), Session::get('step3'));
//        $product->submitInfo($formData, $this->feature_id, $this->value, $this->product_id, $this->photos);

        $this->step3 = false;
        $this->step4 = true;
        // $this->redirect('/admin/product/index');
    }

    public function step4($formData, Product $product)
    {

        $featureIds = [];
        $featureTitle = [];
        foreach ($formData as $key => $value) {
            $form = explode('_', $key);
            $this->value = $value;
            $this->feature_id = $form[1];
            $featureIds[] = $form[1];
            $featureTitle[] = $form[0];
        }

        $rules = [];
        foreach ($featureTitle as $feature) {
            $rules[$feature] = '';
        }
        $validator = Validator::make($formData, $rules);
        $validator->validate();
        $this->resetValidation();


        Session::put('step4', $formData);
        $allData = array_merge(Session::get('step1'), Session::get('step3'), Session::get('step4'));
        $features = $formData;

        $product->submitInfo($allData, $features, $this->product_id, $this->photos);
        $this->redirect('/admin/product');
    }

    public function backToStep1()
    {
        $this->step2 = false;
        $this->step1 = true;
    }

    public function backToStep2()
    {
        $this->step3 = false;
        $this->step2 = true;
    }

    public function backToStep3()
    {
        $this->step4 = false;
        $this->step3 = true;
    }

    public function render()
    {
        return view('livewire.admin.product.create')->layout('layouts.app-admin');
    }
}
