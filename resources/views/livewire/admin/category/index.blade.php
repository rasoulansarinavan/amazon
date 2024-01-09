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
    <div class=" gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
            <div class="card">
                <div class="card-body">
                    @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="field-wrapper">
                            <input style="background: #ffffff" class="form-control" type="text"
                                   wire:model.debounce.500ms="search">
                            <div class="field-placeholder">جستجو <span class="text-danger">*</span></div>
                        </div>
                        <div class="d-flex">
                            <a href="{{route('admin.category.create')}}" class="btn btn-success mb-3"
                               style="margin-left: 20px">افزودن دسته بندی جدید <span
                                    class="me-1 icon-plus-circle"></span>
                            </a>
                            {{ $allCategory->links('layouts.pagination-admin') }}
                        </div>
                    </div>

                    <div class="table-responsive">
                        <div id="copy-print-csv_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <table id="" class="table v-middle dataTable no-footer" role="grid"
                                   aria-describedby="copy-print-csv_info">
                                <thead>
                                <tr role="row">
                                    <th>ID</th>
                                    <th>تصویر</th>
                                    <th>عنوان</th>
                                    <th>دسته بندی</th>
                                    <th>سطح دسترسی</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($allCategory as $category)
                                    <tr role="row" class="odd position-relative">
                                        <td>{{ $category->id }}</td>
                                        <td class="sorting_1">
                                            <div class="media-box  align-items-center row">
                                                <img src="/{{@$category->image->file}}"
                                                     style="width: 307px;border-radius: 5%"
                                                     class=" ms-2 media-avatar"
                                                     alt="Product">
                                            </div>
                                        <td>
                                            <div class="actions t1">
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
                                                        value="{{$category->id}}" @if($category->special !=0) checked
                                                        @endif
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-original-title="ویژه"
                                                        wire:change="special($event.target.value)" type="checkbox">
                                                </div>
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
                                                        value="{{$category->id}}" @if($category->active !=0) checked
                                                        @endif
                                                        data-bs-toggle="tooltip"
                                                        data-bs-original-title="نمایش"
                                                        wire:change="show($event.target.value)" type="checkbox">
                                                </div>
                                                @if(@$category->video->id)
                                                    <div class="form-check d-inline-flex">
                                                        <input
                                                            value="{{@$category->video->id}}"
                                                            @if(@$category->video->active !=0) checked
                                                            @endif
                                                            data-bs-toggle="tooltip"
                                                            data-bs-original-title="نمایش ویدیو"
                                                            wire:change="VideoActive($event.target.value)"
                                                            type="checkbox">
                                                    </div>
                                                @endif
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                    {{ $allCategory->links('layouts.pagination-admin') }}
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
        <script>

            @endpush
            </div>
        </script>
</div>
