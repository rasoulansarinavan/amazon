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
                            <a href="{{route('admin.product.create')}}" class="btn btn-success mb-3"
                               style="width: max-content;float: left">افزودن محصول جدید <span
                                    class="me-1 icon-plus-circle"></span>
                            </a>
                            {{--                            {{ $products->links('layouts.pagination-admin') }}--}}
                        </div>
                        <table id="" class="table v-middle">
                            <thead>
                            <tr role="row">
                                <th>#</th>
                                <th>تصویر محصول</th>
                                <th>نام محصول</th>
                                <th>دسته بندی</th>
                                <th>قیمت</th>
                                <th>تخفیف</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr role="row" class="odd">
                                    <td>{{$loop->index+1}}</td>
                                    <td class="sorting_1">
                                        <div class="media-box">
                                            <img src="/images/products/thumbnails/{{$product->id}}/{{@$product->images[0]->file}}" class="media-avatar"
                                                 alt="Product" width="100px">
                                        </div>
                                    </td>
                                    <td>{{$product->title}}</td>
                                    <td>{{$product->category->title}}</td>
                                    <td>{{$product->price}}</td>
                                    @if($product->discount !=0)
                                        <td>{{$product->discount}}</td>
                                    @else
                                        <td>0</td>
                                    @endif
                                    <td>
                                        <div class="actions" style="font-size: 20px">
                                            <a href="{{route('admin.product.create')}}/?product={{$product->id}}"
                                               data-bs-toggle="tooltip" data-bs-placement="top"
                                               data-bs-original-title="ویرایش">
                                                <i class="icon-edit1 text-info ms-2"></i>
                                            </a>
                                            <a wire:click="deleteConfirm({{$product->id}})" href="javascript:0"
                                               data-bs-toggle="tooltip" data-bs-placement="top"
                                               data-bs-original-title="حذف">
                                                <i class="icon-x-circle text-danger ms-2"></i>
                                            </a>
                                            <div class="form-check d-inline-flex">
                                                <input role="button" value="{{$product->id}}"
                                                       @if($product->special !=0) checked @endif
                                                       data-bs-toggle="tooltip" data-bs-placement="top"
                                                       data-bs-original-title="ویژه"
                                                       wire:change="special($event.target.value)" type="checkbox">
                                            </div>
                                            <div class="form-check d-inline-flex">
                                                <input
                                                    value="{{$product->id}}" @if($product->active !=0) checked
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
                    {{--                    {{ $products->links('layouts.pagination-admin') }}--}}
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
