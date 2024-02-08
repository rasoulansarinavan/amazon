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
                    <div class="card-title">افزایش موجودی محصول <span class="text-success">{{$product->title}}</span></div>
                </div>
                <div class="card-body">
                    <div class="row gutters">
                        <form
                            wire:submit.prevent="saveFeature(Object.fromEntries(new FormData($event.target)))">
                            <div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="field-wrapper">
                                        <input name="title" id="title" value="{{@$title}}"
                                               wire:model.defer="title"
                                               class="form-control @error('title') error-input-border @enderror"
                                               type="text">
                                        <div class="field-placeholder">عنوان<span
                                                class="text-danger">*</span>
                                        </div>
                                        @foreach ($errors->get('title') as $message)
                                            <div wire:loading.remove
                                                 class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                        @endforeach
                                    </div>

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
                            <input style="background: #ffffff" class="form-control" type="text"
                                   wire:model.debounce.500ms="search">
                            <div class="field-placeholder">جستجو <span class="text-danger">*</span></div>
                        </div>
                        <div class="d-flex">
                            {{--                            {{ $allFeature->links('layouts.pagination-admin') }}--}}
                        </div>
                    </div>

                    <div class="table-responsive">
                        <div id="copy-print-csv_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <table id="" class="table v-middle dataTable no-footer" role="grid"
                                   aria-describedby="copy-print-csv_info">
                                <thead>
                                <tr role="row">
                                    <th>#</th>
                                    <th>عنوان ویژگی</th>
                                    <th>دسته بندی</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($features as $feature)
                                    <tr role="row" class="odd position-relative">
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{ $feature->title }}</td>
                                        <td>{{ $category->title }}</td>
                                        <td>
                                            <div class="actions t1">
                                                <a href="javascript:0"
                                                   wire:click="editFeature({{$feature->id}})"
                                                   data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                   data-bs-original-title="ویرایش">
                                                    <i class="icon-edit1 text-info ms-2"></i>
                                                </a>
                                                <a href="javascript:0" wire:click="deleteConfirm({{$feature->id}})"
                                                   data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                   data-bs-original-title="حذف">
                                                    <i class="icon-x-circle text-danger ms-2"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
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
