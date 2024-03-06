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
                    <div class="card-title">افزودن تخفیف عمومی</div>
                </div>
                <div class="card-body">
                    <div class="row gutters">
                        <form
                            wire:submit.prevent="saveCommon(Object.fromEntries(new FormData($event.target)))">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="field-wrapper">
                                    <input name="title" id="title" value="{{@$title}}"
                                           class="form-control @error('title') error-input-border @enderror"
                                           type="text">
                                    <div class="field-placeholder">عنوان تخفیف<span
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
                                    <input name="percentage" id="percentage" value="{{@$percentage}}"
                                           class="form-control @error('percentage') error-input-border @enderror"
                                           type="number">
                                    <div class="field-placeholder">درصد تخفیف<span
                                            class="text-danger">*</span>
                                    </div>
                                    @foreach ($errors->get('percentage') as $message)
                                        <div wire:loading.remove
                                             class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ma-t">
                                <div class="field-wrapper">
                                    <input name="discount_ceiling" id="discount_ceiling" value="{{@$discount_ceiling}}"
                                           class="form-control @error('discount_ceiling') error-input-border @enderror"
                                           type="number">
                                    <div class="field-placeholder">حداکثر تخفیف<span
                                            class="text-danger">*</span>
                                    </div>
                                    @foreach ($errors->get('discount_ceiling') as $message)
                                        <div wire:loading.remove
                                             class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ma-t">
                                <div class="field-wrapper">
                                    <input name="minimal_order_amount" id="minimal_order_amount"
                                           value="{{@$minimal_order_amount}}"
                                           class="form-control @error('minimal_order_amount') error-input-border @enderror"
                                           type="number">
                                    <div class="field-placeholder">حداقل ملبغ خرید<span
                                            class="text-danger">*</span>
                                    </div>
                                    @foreach ($errors->get('minimal_order_amount') as $message)
                                        <div wire:loading.remove
                                             class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ma-t">
                                <div class="field-wrapper">
                                    <input name="start_date" id="start_date" value="{{@$start_date}}"
                                           class="form-control d-none @error('start_date') error-input-border @enderror"
                                           type="text">
                                    <input type="text" id="start_date_view" class="form-control form-control-sm">
                                    <div class="field-placeholder">تاریخ شروع<span
                                            class="text-danger">*</span>
                                    </div>
                                    @foreach ($errors->get('start_date') as $message)
                                        <div wire:loading.remove
                                             class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ma-t">
                                <div class="field-wrapper">
                                    <input name="end_date" id="end_date" value="{{@$end_date}}"
                                           class="form-control d-none @error('end_date') error-input-border @enderror"
                                           type="text">
                                    <input type="text" id="end_date_view" class="form-control form-control-sm">
                                    <div class="field-placeholder">تاریخ پایان<span
                                            class="text-danger">*</span>
                                    </div>
                                    @foreach ($errors->get('end_date') as $message)
                                        <div wire:loading.remove
                                             class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ma-ts">
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
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="field-wrapper">
                            <input style="background: #384d76" class="form-control" type="text"
                                   wire:model.debounce.500ms="search">
                            <div class="field-placeholder">جستجو <span class="text-danger">*</span></div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <div id="copy-print-csv_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <table id="" class="table v-middle dataTable no-footer" role="grid"
                                   aria-describedby="copy-print-csv_info">
                                <thead>
                                <tr role="row">
                                    <th>#</th>
                                    <th>عنوان تخفیف</th>
                                    <th>درصد تخفیف</th>
                                    <th>سقف تخفیف</th>
                                    <th>حداقل ملبغ خرید</th>
                                    <th>تاریخ شروع</th>
                                    <th>تاریخ پایان</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($commonDiscounts as $commonDiscount)
                                    <tr role="row" class="odd position-relative">
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$commonDiscount->title}}</td>
                                        <td>{{$commonDiscount->percentage}}</td>
                                        <td>{{$commonDiscount->discount_ceiling}}</td>
                                        <td>{{$commonDiscount->minimal_order_amount}}</td>
                                        <td>{{ jdate($commonDiscount->start_date) }}</td>
                                        <td>{{ jdate($commonDiscount->end_date) }}</td>
                                        <td>
                                            <div class="actions t1" wire:ignore>
                                                <a href="javascript:0"
                                                   wire:click="editCommon({{$commonDiscount->id}})"
                                                   data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                   data-bs-original-title="ویرایش">
                                                    <i class="icon-edit1 text-info ms-2"></i>
                                                </a>
                                                <a href="javascript:0"
                                                   wire:click="deleteConfirm({{$commonDiscount->id}})"
                                                   data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                   data-bs-original-title="حذف">
                                                    <i class="icon-x-circle text-danger ms-2"></i>
                                                </a>
                                                <div class="form-check d-inline-flex">
                                                    <input value="{{$commonDiscount->id}}"
                                                           @if($commonDiscount->status !=0) checked
                                                           @endif
                                                           data-bs-toggle="tooltip"
                                                           data-bs-original-title="وضعیت"
                                                           wire:change="status($event.target.value)" type="checkbox">
                                                </div>
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
        <script src="/admin-assets/jalalidatepicker/persian-date.min.js"></script>
        <script src="/admin-assets/jalalidatepicker/persian-datepicker.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#start_date_view').persianDatepicker({
                    format: 'YYYY/MM/DD',
                    altField: '#start_date',
                }),
                    $('#end_date_view').persianDatepicker({
                        format: 'YYYY/MM/DD',
                        altField: '#end_date',
                    })
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
