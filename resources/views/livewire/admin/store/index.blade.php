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
                            <input style="background: #384d76" class="form-control" type="text"
                                   wire:model.debounce.500ms="search">
                            <div class="field-placeholder">جستجو <span class="text-danger">*</span></div>
                        </div>
                        <div class="d-flex">
                            {{--                            {{ $allStores->links('layouts.pagination-admin') }}--}}
                        </div>
                    </div>

                    <div class="table-responsive">
                        <div id="copy-print-csv_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <table id="" class="table v-middle dataTable no-footer" role="grid"
                                   aria-describedby="copy-print-csv_info">
                                <thead>
                                <tr role="row">
                                    <th>#</th>
                                    <th>نام کالا</th>
                                    <th>تصویر</th>
                                    <th>قابل فروش</th>
                                    <th>رزرو شده</th>
                                    <th>فروخته شده</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    @forelse($product->images as $key =>$value)
                                    @empty
                                    @endforelse
                                        <tr role="row" class="odd position-relative">
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{ $product->title }}</td>
                                            <td class="sorting_1">
                                                <div class="media-box  align-items-center row">
                                                    <img src="/images/products/thumbnails/{{$product->id}}/{{@$value->file}}"
                                                         style="width: 100px;border-radius: 5%"
                                                         class=" ms-2 media-avatar"
                                                         alt="Product">
                                                </div>
                                            </td>
                                            <td>{{ $product->marketable_number }}</td>
                                            <td>{{ $product->frozen_number }}</td>
                                            <td>{{ $product->sold_number }}</td>
                                            <td>
                                                <div class="actions t1">
                                                    <a href="{{route('admin.store.edit',$product->id)}}"
                                                       data-bs-toggle="tooltip" data-bs-placement="top"
                                                       data-bs-original-title="اصلاح موجودی">
                                                        <i class="icon-edit1 text-info ms-2"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{--                    {{ $allStores->links('layouts.pagination-admin') }}--}}
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
