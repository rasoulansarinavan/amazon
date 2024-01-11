<div class="content-wrapper-scroll">
    <div class="content-wrapper">
        <div class="row ">
            <div class="card">
                <div class="card-body">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                        <div class="card position-sticky" style="top: 0">
                            <div class="card-header">
                                <div class="card-title">افزودن دسته بندی</div>
                            </div>
                            <div class="card-body">
                                <div class="row gutters">
                                    <form
                                        wire:submit.prevent="saveCategory(Object.fromEntries(new FormData($event.target)))">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 ma-t">
                                                <div class="field-wrapper">
                                                    <input name="title" id="title" value="{{@$title}}"
                                                           wire:model.defer="title"
                                                           class="form-control @error('title') error-input-border @enderror"
                                                           type="text">
                                                    <div class="field-placeholder">عنوان <span
                                                            class="text-danger">*</span>
                                                    </div>
                                                    @foreach ($errors->get('title') as $message)
                                                        <div wire:loading.remove
                                                             class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                                    @endforeach
                                                </div>

                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 ma-t">
                                                <div class="field-wrapper">
                                                    <select wire:ignore.self
                                                            wire:change="changeCategory($event.target.value)"
                                                            class="js-states"
                                                            wire:model.defer="category_id"
                                                            name="category_id" id="category_id"
                                                            title="Select Product Category"
                                                            data-live-search="true"
                                                            class="form-select @error('category_id') error-input-border @enderror">
                                                        <option selected disabled>انتخاب</option>
                                                        <option value="0">دسته والد</option>
                                                        @foreach($allCategory->where('category_id',0) as $category)
                                                            <option
                                                                @if(isset($category->title))
                                                                    selected
                                                                @endif
                                                                value="{{ $category->id }}">{{ $category->title }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="field-placeholder">دسته والد <span
                                                            class="text-danger">*</span>
                                                    </div>
                                                    @foreach($errors->get('category_id') as $message)
                                                        <div wire:loading.remove
                                                             class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 ma-t">

                                                <div class="field-wrapper">
                                                       <textarea wire:model.defer="icon"
                                                                 name="icon" id="icon"
                                                                 class="form-control  @error('icon') error-input-border @enderror"
                                                                 rows="2">
                                                       </textarea>
                                                    <div class="field-placeholder">آیکون</div>
                                                    @foreach($errors->get('icon') as $message)
                                                        <div wire:loading.remove
                                                             class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                                    @endforeach
                                                </div>

                                            </div>

                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ma-t">
                                            <div class="field-wrapper" wire:ignore>
                                    <textarea name="description" id="description" wire:model.defer="description"
                                              class="summernote form-control @error('description') error-input-border @enderror"
                                              type="text">
                                       {{@$category->description}}
                                    </textarea>
                                                <div class="field-placeholder">توضیحات</div>
                                                @foreach ($errors->get('description') as $message)
                                                    <div wire:loading.remove
                                                         class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                                @endforeach
                                            </div>

                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ma-t">
                                            <div class="field-wrapper">
                                                <input wire:model="file" type="file" name="file" id="file"
                                                       class="form-select @error('file') error-input-border @enderror">
                                                <div class="field-placeholder">تصویر دسته بندی<span class="text-danger">*</span>
                                                </div>
                                                @foreach($errors->get('file') as $message)
                                                    <div wire:loading.remove
                                                         class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                                @endforeach
                                                @if($oldPhoto)
                                                    <img width="200" src="/{{$oldPhoto}}">
                                                @endif
                                                <div wire:loading wire:target="file" class="spinner-grow"
                                                     style="width: 3rem; height: 3rem;" role="status">
                                                    <span class="visually-hidden">Loading...</span>
                                                </div>
                                                @if ($file and in_array($fileExtension,$extensions) and !$oldPhoto)
                                                    <img width="200" src="{{$file->temporaryUrl()}}">
                                                @endif
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ma-ts position-relative">
                                            <button type="submit" class="btn  btn-primary add-success-noti-admin">
                                                ذحیره
                                            </button>
                                            <a href="{{route('admin.category')}}"
                                               class="btn  btn-warning position-absolute l-0 start-0">
                                                لغو
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @push('script')
            <script src="/backend/vendor/summernote/summernote-bs4.js"></script>
            <script>
                // Summernote
                $(document).ready(function () {
                    $('.summernote').summernote({
                        height: 500,
                        tabsize: 2,
                        focus: true,
                        toolbar: [
                            ['font', ['bold', 'underline', 'clear']],
                            ['para', ['ul', 'ol']],
                            ['insert', ['link', 'picture', 'video']],
                            ['view', ['fullscreen', 'codeview', 'help']],
                        ]
                    });
                });
            </script>
        @endpush
    </div>
</div>

