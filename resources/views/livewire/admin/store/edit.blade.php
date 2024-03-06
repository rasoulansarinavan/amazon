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
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="card position-sticky" style="top: 0">
                <div class="card-header">
                    <div class="card-title">اصلاح موجودی محصول <span class="text-success">{{$product->title}}</span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row gutters">
                        <form
                            wire:submit.prevent="edit(Object.fromEntries(new FormData($event.target)))">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                    <div class="field-wrapper">
                                        <input name="marketable_number" id="marketable_number"
                                               value="{{@$marketable_number}}"
                                               wire:model.defer="marketable_number"
                                               class="form-control @error('marketable_number') error-input-border @enderror"
                                               type="number">
                                        <div class="field-placeholder">قابل فروش<span
                                                class="text-danger">*</span>
                                        </div>
                                        @foreach ($errors->get('marketable_number') as $message)
                                            <div wire:loading.remove
                                                 class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                        @endforeach
                                    </div>

                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 ma-t">
                                    <div class="field-wrapper">
                                        <input name="frozen_number" id="frozen_number" value="{{@$frozen_number}}"
                                               wire:model.defer="frozen_number"
                                               class="form-control @error('frozen_number') error-input-border @enderror"
                                               type="number">
                                        <div class="field-placeholder">رزرو شده<span
                                                class="text-danger">*</span>
                                        </div>
                                        @foreach ($errors->get('frozen_number') as $message)
                                            <div wire:loading.remove
                                                 class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                        @endforeach
                                    </div>

                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 ma-t">
                                    <div class="field-wrapper">
                                        <input name="sold_number" id="sold_number" value="{{@$sold_number}}"
                                               wire:model.defer="sold_number"
                                               class="form-control @error('sold_number') error-input-border @enderror"
                                               type="number">
                                        <div class="field-placeholder">فروخته شده<span
                                                class="text-danger">*</span>
                                        </div>
                                        @foreach ($errors->get('sold_number') as $message)
                                            <div wire:loading.remove
                                                 class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 ma-ts">
                                    <button type="submit" class="btn  btn-primary add-success-noti-admin">
                                        ذخیره
                                    </button>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 ma-ts">
                                    <a href="{{route('admin.store')}}" style="float: left"
                                       class="btn btn-danger">
                                        بازگشت
                                    </a>
                                </div>
                            </div>
                        </form>
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
