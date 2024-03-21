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
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
            <div class="card position-sticky" style="top: 0">
                <div class="card-header">
                    <div class="card-title">کوپن تخفیف</div>
                </div>
                <div class="card-body">
                    <div class="row gutters">
                        <form wire:submit.prevent="saveCoupon(Object.fromEntries(new FormData($event.target)))">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="field-wrapper">
                                    <input name="title" id="title" value="{{@$title}}"
                                           class="form-control @error('title') error-input-border @enderror"
                                           type="text">
                                    <div class="field-placeholder">عنوان کوپن<span
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
                                    <input name="code" id="code" value="{{@$code}}"
                                           class="form-control @error('code') error-input-border @enderror"
                                           type="text">
                                    <div class="field-placeholder">کد تخفیف<span
                                            class="text-danger">*</span>
                                    </div>
                                    @foreach ($errors->get('code') as $message)
                                        <div wire:loading.remove
                                             class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                    @endforeach
                                </div>
                            </div>


                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ma-t">
                                <div class="field-wrapper" >
                                    <select wire:change="changeType($event.target.value)"
                                            class="js-states" name="type"
                                            title="Select Product Category"
                                            data-live-search="true">
                                        <option selected disabled>انتخاب</option>
                                        <option value="0">عمومی</option>
                                        <option value="1">خصوصی</option>
                                    </select>
                                    <div class="field-placeholder">انتخاب نوع کوپن
                                        <span class="text-danger">*</span>
                                    </div>
                                    @foreach ($errors->get('type') as $message)
                                        <div wire:loading.remove
                                             class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                    @endforeach
                                </div>
                            </div>

                            @if(@$users)
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ma-t">
                                    <div class="field-wrapper" >
                                        <select class="js-states" name="user_id"
                                                title="Select user"
                                                data-live-search="true">
                                            <option selected disabled>انتخاب</option>
                                            @forelse($users as $user)
                                                <option
                                                    value="{{$user->id}}">{{$user->first_name}} {{$user->last_name}}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                        <div class="field-placeholder">انتخاب کاربر
                                            <span class="text-danger">*</span>
                                        </div>
                                        @foreach ($errors->get('user_id') as $message)
                                            <div wire:loading.remove
                                                 class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                        @endforeach
                                    </div>
                                </div>
                            @elseif(@$users == null)
                                <span></span>
                            @endif
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ma-t">
                                <div class="field-wrapper" >
                                    <select class="js-states" name="amount_type"
                                            title="Select coupon type"
                                            data-live-search="true">
                                        <option selected disabled>انتخاب</option>
                                        <option value="0">درصدی</option>
                                        <option value="1">عددی</option>
                                    </select>
                                    <div class="field-placeholder"> نوع تخفیف
                                        <span class="text-danger">*</span>
                                    </div>
                                    @foreach ($errors->get('amount_type') as $message)
                                        <div wire:loading.remove
                                             class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ma-t">
                                <div class="field-wrapper" >
                                    <input name="amount" id="amount" value="{{@$amount}}"
                                           class="form-control @error('amount') error-input-border @enderror"
                                           type="text">
                                    <div class="field-placeholder">میزان تخفیف<span
                                            class="text-danger">*</span>
                                    </div>
                                    @foreach ($errors->get('amount') as $message)
                                        <div wire:loading.remove
                                             class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ma-t">
                                <div class="field-wrapper" wire:ignore>
                                    <input name="discount_ceiling" id="discount_ceiling" value="{{@$discount_ceiling}}"
                                           class="form-control @error('discount_ceiling') error-input-border @enderror"
                                           type="text">
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
                                <div class="field-wrapper" >
                                    <input name="start_date" id="start_date" value="{{@$start_date}}"
                                           class="form-control d-none @error('start_date') error-input-border @enderror"
                                           type="text">
                                    <input type="text" id="start_date_view" class="form-control form-control-sm" autocomplete="off">
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
                                <div class="field-wrapper" >
                                    <input name="end_date" id="end_date" value="{{@$end_date}}"
                                           class="form-control d-none @error('end_date') error-input-border @enderror"
                                           type="text">
                                    <input type="text" id="end_date_view" class="form-control form-control-sm" autocomplete="off">
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
        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 ">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="field-wrapper">
                            <input style="background: #384d76" class="form-control" type="text"
                                   wire:model.debounce.500ms="search">
                            <div class="field-placeholder">جستجو <span class="text-danger">*</span></div>
                        </div>
                        <div class="d-flex">
                        </div>
                    </div>

                    <div class="table-responsive">
                        <div id="copy-print-csv_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <table id="" class="table v-middle dataTable no-footer" role="grid"
                                   aria-describedby="copy-print-csv_info">
                                <thead>
                                <tr role="row">
                                    <th>#</th>
                                    <th>نوع کوپن</th>
                                    <th>عنوان کوپن</th>
                                    <th>کد کوپن</th>
                                    <th>کاربری</th>
                                    <th>درصد تخفیف</th>
                                    <th>سقف تخفیف</th>
                                    <th>تاریخ شروع</th>
                                    <th>تاریخ پایان</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($coupons as $coupon)
                                    <tr role="row" class="odd position-relative">
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$coupon->amount_type==0 ?'درصدی':'عددی'}}</td>
                                        <td>{{$coupon->title}}</td>
                                        <td>{{$coupon->code}}</td>
                                        <td>{{$coupon->user_id !=null ? $coupon->user_id:'عمومی'}}</td>
                                        <td>{{$coupon->amount}}</td>
                                        <td>{{ number_format($coupon->discount_ceiling) }}</td>
                                        <td>{{ jdate($coupon->start_date)}}</td>
                                        <td>{{ jdate($coupon->end_date) }}</td>
                                        <td>
                                            <div class="actions t1" wire:ignore>
                                                <a href="javascript:0"
                                                   wire:click="editCoupon({{$coupon->id}})"
                                                   data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                   data-bs-original-title="ویرایش">
                                                    <i class="icon-edit1 text-info ms-2"></i>
                                                </a>
                                                <a href="javascript:0" wire:click="deleteConfirm({{$coupon->id}})"
                                                   data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                   data-bs-original-title="حذف">
                                                    <i class="icon-x-circle text-danger ms-2"></i>
                                                </a>
                                                <div class="form-check d-inline-flex">
                                                    <input value="{{$coupon->id}}" @if($coupon->status !=0) checked
                                                           @endif
                                                           data-bs-toggle="tooltip"
                                                           data-bs-original-title="نمایش"
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
