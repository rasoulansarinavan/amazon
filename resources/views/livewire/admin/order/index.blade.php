<div class="content-wrapper">
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="field-wrapper">
                                <input style="background: #ffffff" class="form-control" type="text"
                                       wire:model.debounce.500ms="search">
                                <div class="field-placeholder">جستجو بر اساس نام<span class="text-danger">*</span></div>
                            </div>
{{--                             {{ $orders->links('layouts.pagination-admin') }}--}}
                        </div>
                        <table id="" class="table v-middle">
                            <thead>
                            <tr role="row">
                                <th>#</th>
                                <th>کد سفارش</th>
                                <th>نام محصول</th>
                                <th>مبلغ سفارش</th>
                                <th>مبلغ تخفیف</th>
                                <th>مبلغ نهایی</th>
                                <th>وضعیت پرداخت</th>
                                <th>شیوه پرداخت</th>
                                <th>بانک</th>
                                <th>وضعیت ارسال</th>
                                <th>شیوه ارسال</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr role="row" class="odd">
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->product->title}}</td>
                                    <td>{{$order->product->price}}</td>
                                    <td>{{$order->product->discount}}</td>
                                    <td>*****</td>
                                    <td>*****</td>
                                    <td>*****</td>
                                    <td>*****</td>
                                    <td>*****</td>
                                    <td>{{$order->delivery->name}}</td>
                                    <td>
                                        <div class="actions" style="font-size: 20px">
                                            <a>
                                                <i class="icon-edit1 text-info ms-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
{{--                      {{ $orders->links('layouts.pagination-admin') }}--}}
                </div>
            </div>
        </div>
    </div>
    @push('script')
        <script>
            window.addEventListener('swal:confirm', event => {
                Swal.fire({
                    title: ' مطمئن هستی ؟',
                    text: "تصاویر محصول هم حذف خواهد شد !",
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
                    title: 'عملیات با موفقیت انجام شد',
                    showConfirmButton: false,
                    timer: 1500
                })
            })
        </script>
    @endpush
</div>
