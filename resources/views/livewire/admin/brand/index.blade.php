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
                    <div class="card-title">افزودن برند</div>
                </div>
                <div class="card-body">
                    <div class="row gutters">
                        <form
                            wire:submit.prevent="saveBrand(Object.fromEntries(new FormData($event.target)))">
                            <div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="field-wrapper">
                                        <input name="persian_name" id="persian_name" value="{{@$persian_name}}"
                                               wire:model.defer="persian_name"
                                               class="form-control @error('persian_name') error-input-border @enderror"
                                               type="text">
                                        <div class="field-placeholder">عنوان فارسی<span
                                                class="text-danger">*</span>
                                        </div>
                                        @foreach ($errors->get('persian_name') as $message)
                                            <div wire:loading.remove
                                                 class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="field-wrapper">
                                        <input name="original_name" id="original_name" value="{{@$original_name}}"
                                               wire:model.defer="original_name"
                                               class="form-control @error('original_name') error-input-border @enderror"
                                               type="text">
                                        <div class="field-placeholder">عنوان اصلی<span
                                                class="text-danger">*</span>
                                        </div>
                                        @foreach ($errors->get('original_name') as $message)
                                            <div wire:loading.remove
                                                 class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                        @endforeach
                                    </div>
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
                            {{ $allBrands->links('layouts.pagination-admin') }}
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
                                    <th>عنوان فارسی</th>
                                    <th>عنوان اصلی</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($brands as $brand)
                                    <tr role="row" class="odd position-relative">
                                        <td>{{$loop->index+1}}</td>
                                        <td class="sorting_1">
                                            <div class="media-box  align-items-center row">
                                                <img src="/{{@$brand->image->file}}"
                                                     style="width: 100px;border-radius: 5%"
                                                     class=" ms-2 media-avatar"
                                                     alt="Product">
                                            </div>
                                        </td>
                                        <td>{{ $brand->persian_name }}</td>
                                        <td>{{ $brand->original_name }}</td>
                                        <td>
                                            <div class="actions t1">
                                                <a href="javascript:0"
                                                   wire:click="editBrand({{$brand->id}})"
                                                   data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                   data-bs-original-title="ویرایش">
                                                    <i class="icon-edit1 text-info ms-2"></i>
                                                </a>
                                                <a href="javascript:0" wire:click="deleteConfirm({{$brand->id}})"
                                                   data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                   data-bs-original-title="حذف">
                                                    <i class="icon-x-circle text-danger ms-2"></i>
                                                </a>
                                                <div class="form-check d-inline-flex">
                                                    <input
                                                        value="{{$brand->id}}" @if($brand->status !=0) checked
                                                        @endif
                                                        data-bs-toggle="tooltip"
                                                        data-bs-original-title="نمایش"
                                                        wire:change="show($event.target.value)" type="checkbox">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{ $allBrands->links('layouts.pagination-admin') }}
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
