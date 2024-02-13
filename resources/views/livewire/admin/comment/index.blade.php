<div class="content-wrapper">
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="field-wrapper">
                                <input style="background: #384d76" class="form-control" type="text"
                                       wire:model.debounce.500ms="search">
                                <div class="field-placeholder">جستجو بر اساس نام<span class="text-danger">*</span></div>
                            </div>
                        </div>
                        <table id="" class="table v-middle">
                            <thead>
                            <tr role="row">
                                <th>#</th>
                                <th>نظر</th>
                                <th>پاسخ به</th>
                                <th>نویسنده</th>
                                <th>محصول</th>
                                <th>وضعیت تایید</th>
                                <th>وضعیت نظر</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($comments as $comment)
                                <tr role="row" class="odd">
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$comment->body}}</td>
                                    <td>{{$comment->parent_id}}</td>
                                    <td>{{$comment->author_id}}</td>
                                    <td>{{$comment->product_id}}</td>
                                    @if($comment->approved ==0)
                                        <td>عدم تایید</td>
                                    @else
                                        <td>تایید</td>
                                    @endif
                                    <td>
                                        <div class="actions" style="font-size: 20px">
                                            <a wire:click="deleteConfirm({{$comment->id}})" href="javascript:0"
                                               data-bs-toggle="tooltip" data-bs-placement="top"
                                               data-bs-original-title="حذف">
                                                <i class="icon-x-circle text-danger ms-2"></i>
                                            </a>
                                            <div class="form-check d-inline-flex">
                                                <input
                                                    value="{{$comment->id}}" @if($comment->status !=0) checked
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
            </div>
        </div>
    </div>
    @push('script')
        <script>
            window.addEventListener('swal:confirm', event => {
                Swal.fire({
                    title: ' مطمئن هستی ؟',
                    text: "",
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
