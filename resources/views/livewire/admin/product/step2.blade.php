<div class="tab-pane fade {{$step2 ? 'active show' : '' }}" id="second" role="tabpanel">
    <form wire:submit.prevent="step2">
        <div class="field-wrapper">
            <div class="input-group" style="direction: ltr">
                <input accept="image/png, image/gif, image/jpeg , image/webp" type="file" multiple wire:model="photos"
                       name="photos"
                       class="form-control" id="inputGroupFile01">
            </div>
            @error('photos.*') <span class="alert alert-danger mt-2 d-block">{{ $message }}</span> @enderror
            <div class="field-wrapper">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="alert alert-success">
                        <ul style="list-style: inherit" class="p-2">
                            <li>حداکثر حجم تصویر : 1MB</li>
                            <li>ایعاد تصاویر باید w:573 , h:322 px باشد</li>
                            <li>پسوندهای قابل قبول: png</li>
                        </ul>
                    </div>
                    @if($images)
                        @forelse($images as $image)
                            <img width="400" src="/images/products/large/{{$product_id}}/{{$image}}">
                        @empty
                        @endforelse
                    @endif
                    @if ($photos)
                        <div wire:loading wire:target="photos" class="spinner-grow"
                             style="width: 3rem; height: 3rem;" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        @forelse($photos as $photo)
                            <img width="400"
                                {{--                                 src="{{$photo->temporaryUrl()}}"--}}
                            >
                        @empty
                        @endforelse
                    @endif

                </div>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="form-actions-footer">
                <div class="text-start">
                    <button class="btn btn-warning" wire:click="backToStep1">مرحله قبل
                    </button>
                    <button type="submit" class="btn btn-primary me-3">مرحله بعد
                    </button>
                </div>
            </div>
        </div>
    </form>

</div>
