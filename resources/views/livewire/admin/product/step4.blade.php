<div class="tab-pane fade {{$step4 ? 'active show' : '' }}" id="fourth" role="tabpanel">
    <div class="row gutters">
        <form
            wire:submit.prevent="step4(Object.fromEntries(new FormData($event.target)))">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                @forelse(@$features as $feature)
                    <div class="field-wrapper">
                        <input type="text" placeholder=" ویژگی {{$feature->title}} را وارد کنید"
                               name="{{$feature->title}}_{{$feature->id}}"
                               value="{{@$feature->title}}">
                        <div class="field-placeholder">{{$feature->title}}
                            <span class="text-danger">*</span></div>
                    </div>
                    @foreach($errors->get($feature->{'title'}) as $message)
                        <span wire:loading.remove
                              class=" alert alert-danger w-100 d-block mb-3">{{ $message}}</span>
                    @endforeach
                @empty
                @endforelse
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="form-actions-footer">
                    <div class="text-start">
                        <button type="button" class="btn btn-warning" wire:click="backToStep3">مرحله
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
