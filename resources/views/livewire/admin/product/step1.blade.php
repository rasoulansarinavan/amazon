<div class="tab-pane fade {{$step1 ? 'active show' : '' }}" id="first" role="tabpanel" disabled>
    <form wire:submit.prevent="step1(Object.fromEntries(new FormData($event.target)))">
        <div class="row gutters">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                    <div class="field-wrapper" wire:ignore>
                        <input
                            class="form-control "
                            type="text" name="title" value="{{@$product->title}}">
                        <div class="field-placeholder">نام محصول<span
                                class="text-danger">*</span>
                        </div>
                    </div>
                    @foreach ($errors->get('title') as $message)
                        <span wire:loading.remove
                              class=" alert alert-danger w-100 d-block mb-1">{{ $message}}</span>
                    @endforeach
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                    <div class="field-wrapper" wire:ignore>
                        <select wire:change="changeCategory($event.target.value)"
                                class="js-states" name="category_id"
                                title="Select Product Category"
                                data-live-search="true">
                            <option selected disabled>انتخاب</option>
                            @forelse($categories as $category)

                                <option
                                    {{@$category->id==@$product->category_id?'selected':''}}
                                    value="{{$category->id}}">{{$category->title}}</option>
                            @empty
                            @endforelse

                        </select>
                        <div class="field-placeholder">انتخاب دسته بندی
                            <span class="text-danger">*</span>
                        </div>
                    </div>
                    @foreach ($errors->get('category_id') as $message)
                        <span wire:loading.remove
                              class=" alert alert-danger w-100 d-block mb-1">{{ $message}}</span>
                    @endforeach
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                    <div class="field-wrapper" wire:ignore>
                        <div class="input-group">
                            <input class="form-control" value="{{@$product->price}}" type="number" name="price">
                            <span class="input-group-text">
                            <i style="font-style: initial" class="">تومان</i>
                        </span>
                        </div>
                        <div class="field-placeholder">قیمت
                            <span class="text-danger">*</span>
                        </div>
                    </div>
                    @foreach ($errors->get('price') as $message)
                        <span wire:loading.remove
                              class=" alert alert-danger w-100 d-block mb-1">{{ $message}}</span>
                    @endforeach
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                    <div class="field-wrapper" wire:ignore>
                        <div class="input-group">
                            <input name="discount" id="discount" value="{{@$product->discount}}"
                                   class="form-control @error('discount') error-input-border @enderror"
                                   type="number">
                            <span class="input-group-text">
                            <i style="font-style: initial" class="">%</i>
                        </span>
                        </div>
                        <div class="field-placeholder">تخفیف<span
                                class="text-danger">*</span>
                        </div>
                        @foreach ($errors->get('discount') as $message)
                            <div wire:loading.remove
                                 class="text-white d-flex invalid-tooltip">{{$message}}</div>
                        @endforeach
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                    <div class="field-wrapper" wire:ignore>
                        <select class="js-states" name="brand_id"
                                title="Select Product Category"
                                data-live-search="true">
                            <option selected disabled>انتخاب</option>
                            @forelse($brands as $brand)
                                <option
                                    {{@$brand->id==@$product->brand_id?'selected':''}}
                                    value="{{$brand->id}}">{{$brand->original_name}}</option>
                            @empty
                            @endforelse

                        </select>
                        <div class="field-placeholder">انتخاب برند
                            <span class="text-danger">*</span>
                        </div>
                    </div>
                    @foreach ($errors->get('brand_id') as $message)
                        <span wire:loading.remove
                              class=" alert alert-danger w-100 d-block mb-1">{{ $message}}</span>
                    @endforeach
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="field-wrapper" wire:ignore>
                    <textarea name="long_description" id="long_description"
                              class="summernote form-control @error('long_description') error-input-border @enderror"
                              type="text">{{@$product->long_description}}</textarea>
                    <div class="field-placeholder">توضیحات</div>
                    @foreach ($errors->get('long_description') as $message)
                        <div wire:loading.remove
                             class="text-white d-flex invalid-tooltip">{{$message}}</div>
                    @endforeach
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="form-actions-footer">
                    <div class="text-start">
                        <button class="btn btn-primary ms-1">مرحله
                            بعد
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
