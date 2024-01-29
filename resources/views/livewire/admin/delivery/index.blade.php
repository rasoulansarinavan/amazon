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
                    <div class="card-title">افزودن نحوه ارسال</div>
                </div>
                <div class="card-body">
                    <div class="row gutters">
                        <form
                            wire:submit.prevent="saveDelivery(Object.fromEntries(new FormData($event.target)))">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="field-wrapper">
                                    <input name="name" id="name" value="{{@$name}}"
                                           wire:model.defer="name"
                                           class="form-control @error('name') error-input-border @enderror"
                                           type="text">
                                    <div class="field-placeholder">عنوان روش ارسال<span
                                            class="text-danger">*</span>
                                    </div>
                                    @foreach ($errors->get('name') as $message)
                                        <div wire:loading.remove
                                             class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="field-wrapper">
                                    <input name="amount" id="amount" value="{{@$amount}}"
                                           wire:model.defer="amount"
                                           class="form-control @error('amount') error-input-border @enderror"
                                           type="text">
                                    <div class="field-placeholder">هزینه ارسال<span
                                            class="text-danger">*</span>
                                    </div>
                                    @foreach ($errors->get('amount') as $message)
                                        <div wire:loading.remove
                                             class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="field-wrapper">
                                    <input name="delivery_time" id="delivery_time" value="{{@$delivery_time}}"
                                           wire:model.defer="delivery_time"
                                           class="form-control @error('delivery_time') error-input-border @enderror"
                                           type="text">
                                    <div class="field-placeholder">مدت زمان ارسال<span
                                            class="text-danger">*</span>
                                    </div>
                                    @foreach ($errors->get('delivery_time') as $message)
                                        <div wire:loading.remove
                                             class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="field-wrapper" wire:ignore>
                                    <textarea name="description" id="description" wire:model.defer="description"
                                              class="form-control @error('description') error-input-border @enderror"
                                              type="text">
                                       {{@$delivery->description}}
                                    </textarea>
                                    <div class="field-placeholder">توضیحات</div>
                                    @foreach ($errors->get('description') as $message)
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
                            {{ $allDelivery->links('layouts.pagination-admin') }}
                        </div>
                    </div>

                    <div class="table-responsive">
                        <div id="copy-print-csv_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <table id="" class="table v-middle dataTable no-footer" role="grid"
                                   aria-describedby="copy-print-csv_info">
                                <thead>
                                <tr role="row">
                                    <th>#</th>
                                    <th>عنوان ارسال</th>
                                    <th>زمان ارسال</th>
                                    <th>وضعیت</th>
                                    <th>هزینه ارسال</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($allDelivery as $delivery)
                                    <tr role="row" class="odd position-relative">
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{ $delivery->name }}</td>
                                        @if($delivery->active == 0)
                                            <td class="text-danger">غیر فعال</td>
                                        @elseif($delivery->active == 1)
                                            <td class="text-success">فعال</td>
                                        @endif
                                        <td>{{ $delivery->delivery_time }}</td>
                                        <td>{{ $delivery->amount }}</td>
                                        <td>
                                            <div class="actions t1">
                                                <a href="javascript:0"
                                                   wire:click="editDelivery({{$delivery->id}})"
                                                   data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                   data-bs-original-title="ویرایش">
                                                    <i class="icon-edit1 text-info ms-2"></i>
                                                </a>
                                                <a href="javascript:0" wire:click="deleteConfirm({{$delivery->id}})"
                                                   data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                   data-bs-original-title="حذف">
                                                    <i class="icon-x-circle text-danger ms-2"></i>
                                                </a>
                                                <div class="form-check d-inline-flex">
                                                    <input
                                                        value="{{$delivery->id}}" @if($delivery->active !=0) checked
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
                    {{ $allDelivery->links('layouts.pagination-admin') }}
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
