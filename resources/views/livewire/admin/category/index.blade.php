<div class="content-wrapper">
    <style>
        .actions i {
            font-size: 18px;
        }

        .ma-t {
            margin-top: 40px;
        }

        .ma-ts {
            margin-top: 30px;
        }

        .t1 {
            align-items: center;
            display: flex;
        }

        input[type=checkbox] {
            cursor: pointer;
            width: 15px;
            padding-bottom: 2px;
        }

        .form-check {
            padding-bottom: 4px;
            padding-left: 0;
        }

    </style>
    <div class="row gutters">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
            <div class="card position-sticky" style="top: 0">
                <div class="card-header">
                    <div class="card-title">افزودن دسته بندی</div>
                </div>
                <div class="card-body">
                    <div class="row gutters">
                        <form
                            wire:submit.prevent="saveCategory(Object.fromEntries(new FormData($event.target)))">
                            <div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
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
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ma-t">
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
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ma-t">

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
                                              class="form-control @error('description') error-input-border @enderror"
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
                                        <img class="ma-t" width="200" src="/{{$oldPhoto}}">
                                    @endif
                                    <div wire:loading wire:target="file" class="spinner-grow"
                                         style="width: 3rem; height: 3rem;" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    @if ($file and in_array($fileExtension,$extensions) and !$oldPhoto)
                                        <img class="ma-t" width="200" src="{{$file->temporaryUrl()}}">
                                    @endif
                                </div>
                            </div>
                            <div
                                class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ma-ts">
                                <button type="submit" class="btn  btn-primary add-success-noti-admin">
                                    ذخیره
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 ">
            <div class="card">
                <div class="card-body">
                    @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="field-wrapper">
                            <input style="background: #384d76" class="form-control" type="text"
                                   wire:model.debounce.500ms="search">
                            <div class="field-placeholder">جستجو <span class="text-danger">*</span></div>
                        </div>
                        <div class="d-flex">
{{--                            {{ $allCategory->links('layouts.pagination-admin') }}--}}
                        </div>
                    </div>

                    <div class="table-responsive">
                        <div id="copy-print-csv_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <table id="" class="table v-middle dataTable no-footer" role="grid"
                                   aria-describedby="copy-print-csv_info">
                                <thead>
                                <tr role="row">
                                    <th>#</th>
                                    <th>تصویر</th>
                                    <th>عنوان</th>
                                    <th>دسته بندی</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($allCategory as $category)
                                    <tr role="row" class="odd position-relative">
                                        <td>{{$loop->index+1}}</td>
                                        <td class="sorting_1">
                                            <div class="media-box  align-items-center row">
                                                <img src="/{{@$category->image->file}}"
                                                     style="width: 100px;border-radius: 5%"
                                                     class=" ms-2 media-avatar"
                                                     alt="Product">
                                            </div>
                                        </td>
                                        <td>{{ $category->title }}</td>
                                        @if($category->category_id == 0)
                                            <td>دسته والد</td>
                                        @elseif($category->category_id)
                                            <td>{{@$category->category->title}}</td>
                                        @endif
                                        <td>
                                            <div class="actions t1" wire:ignore>
                                                <a href="{{route('admin.category.feature',$category->id)}}"
                                                   data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                   data-bs-original-title="ویژگی">
                                                    <i class="icon-layers2 text-warning ms-2"></i>
                                                </a>
                                                <a href="javascript:0"
                                                   wire:click="editCategory({{$category->id}},{{$category->category_id}})"
                                                   data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                   data-bs-original-title="ویرایش">
                                                    <i class="icon-edit1 text-info ms-2"></i>
                                                </a>
                                                <a href="javascript:0" wire:click="deleteConfirm({{$category->id}})"
                                                   data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                   data-bs-original-title="حذف">
                                                    <i class="icon-x-circle text-danger ms-2"></i>
                                                </a>
                                                <div class="form-check d-inline-flex">
                                                    <input
                                                        value="{{$category->id}}"
                                                        @if($category->coming_soon !=0) checked @endif
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-original-title="بزودی"
                                                        wire:change="comingSoon($event.target.value)"
                                                        type="checkbox">
                                                </div>
                                                <div class="form-check d-inline-flex">
                                                    <input
                                                        value="{{$category->id}}" @if($category->new !=0) checked
                                                        @endif
                                                        data-bs-toggle="tooltip"
                                                        data-bs-original-title="جدید"
                                                        wire:change="new($event.target.value)" type="checkbox">
                                                </div>
                                                <div class="form-check d-inline-flex">
                                                    <input
                                                        value="{{$category->id}}" @if($category->show !=0) checked
                                                        @endif
                                                        data-bs-toggle="tooltip"
                                                        data-bs-original-title="نمایش"
                                                        wire:change="show($event.target.value)" type="checkbox">
                                                </div>
                                                <div class="form-check d-inline-flex">
                                                    <input
                                                        value="{{$category->id}}" @if($category->special !=0) checked
                                                        @endif
                                                        data-bs-toggle="tooltip"
                                                        data-bs-original-title="ویژه"
                                                        wire:change="special($event.target.value)" type="checkbox">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
{{--                    {{ $allCategory->links('layouts.pagination-admin') }}--}}
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
                    height: 120,
                    tabsize: 2,
                    focus: true,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'italic', 'underline', 'clear']],
                        ['fontname', ['fontname']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'hr']],
                        ['view', ['fullscreen', 'codeview']],
                        ['help', ['help']]
                    ],
                });
            });
        </script>
        <script>
            window.addEventListener('swal:confirm', event => {
                Swal.fire({
                    title: ' مطمئن هستی ؟',
                    text: "پس از حذف امکان بازگشت نخواهد بود!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'بله , مشکلی نیست !',
                    cancelButtonText: 'لغو',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.livewire.emit('delete', event.detail.id)
                        // window.location.reload()
                    }
                });
            });
        </script>
        <script>
            window.addEventListener('swal:alert-success', event => {
                Swal.fire({
                    position: 'content',
                    icon: 'success',
                    title: 'عملیات با موفقیت انجام شد!',
                    showConfirmButton: false,
                    timer: 1500
                })
            })
        </script>
    @endpush
</div>
