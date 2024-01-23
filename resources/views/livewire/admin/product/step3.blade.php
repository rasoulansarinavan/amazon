<div class="tab-pane fade {{$step3 ? 'active show' : '' }}" id="third" role="tabpanel">
    <div class="row gutters">
        <form
            wire:submit.prevent="step3(Object.fromEntries(new FormData($event.target)))">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                <div class="field-wrapper">
                    <input type="text" placeholder="" name="meta_name" value="{{@$product->seo->meta_name}}">
                    <div class="field-placeholder">نام متا<span
                            class="text-danger">*</span></div>
                </div>
                @foreach ($errors->get('meta_name') as $message)
                    <span wire:loading.remove
                          class=" alert alert-danger w-100 d-block mb-3">{{ $message}}</span>
                @endforeach
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="field-wrapper" wire:ignore>
                    <input type="text" placeholder="Enter Keywords"
                           value="{{@$product->seo->meta_keywords}}" data-role="tagsinput" name="meta_keywords">
                    <div class="field-placeholder">کلمات کلیدی متا<span
                            class="text-danger">*</span></div>
                </div>
                @foreach ($errors->get('meta_keywords') as $message)
                    <span wire:loading.remove
                          class=" alert alert-danger w-100 d-block mb-3">{{ $message}}</span>
                @endforeach
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="field-wrapper m-0" wire:ignore>
                    <div class="field-placeholder">توضحیات متا
                        <span
                            class="text-danger">*</span>
                    </div>
                    <textarea {{--class="summernote"--}} name="meta_description">{{@$product->seo->meta_description}}</textarea>
                </div>
                @foreach ($errors->get('meta_description') as $message)
                    <span wire:loading.remove
                          class=" alert alert-danger w-100 d-block mb-3">{{ $message}}</span>
                @endforeach

            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="form-actions-footer">
                    <div class="text-start">
                        <button type="button" class="btn btn-warning" wire:click="backToStep2">مرحله
                            قبل
                        </button>
                        <button class="btn btn-success me-3">ذخیره
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>
