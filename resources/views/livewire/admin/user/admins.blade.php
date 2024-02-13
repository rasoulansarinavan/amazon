<div class="content-wrapper">
    <style>
        .ma-t {
            margin-top: 40px;
        }

        .ma-ts {
            margin-top: 30px;
        }
    </style>
    <div class="row gutters">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">افزودن ادمین</div>
                </div>
                <div class="card-body">
                    <div class="row gutters">
                        <form wire:submit.prevent="saveAdmin(Object.fromEntries(new FormData($event.target)))">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="field-wrapper">
                                    <input name="name" id="name" value="{{@$name}}" wire:model.defer="name"
                                           class="form-control @error('name') error-input-border @enderror"
                                           type="text">
                                    <div class="field-placeholder">نام ادمین<span class="text-danger">*</span></div>
                                    @foreach ($errors->get('name') as $message)
                                        <div wire:loading.remove
                                             class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                    @endforeach
                                </div>

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ma-t">
                                <div class="field-wrapper">
                                    <input name="email" id="email" value="{{@$email}}" wire:model.defer="email"
                                           class="form-control @error('email') error-input-border @enderror"
                                           type="email">
                                    <div class="field-placeholder">ایمیل ادمین<span class="text-danger">*</span></div>
                                    @foreach ($errors->get('email') as $message)
                                        <div wire:loading.remove
                                             class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ma-t">
                                <div class="field-wrapper">
                                    <input name="mobile" id="mobile" value="{{@$mobile}}" wire:model.defer="mobile"
                                           class="form-control @error('mobile') error-input-border @enderror"
                                           type="tel" maxlength="11">
                                    <div class="field-placeholder">موبایل ادمین<span class="text-danger">*</span></div>
                                    @foreach ($errors->get('mobile') as $message)
                                        <div wire:loading.remove
                                             class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ma-t">
                                <div class="field-wrapper">
                                    <div class="input-group">
                                        <input disabled type="text" class="form-control" placeholder="نمایش پسورد"
                                               value="{{@$password}}">
                                        <button wire:click="generatePassword" class="btn btn-primary" type="button">ساخت
                                            پسورد
                                        </button>
                                    </div>
                                    <div class="field-placeholder">پسورد ادمین<span class="text-danger">*</span></div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ma-t">
                                <div class="field-wrapper">
                                    <input wire:model="image" type="file" name="image" id="image">
                                    <div class="field-placeholder">عکس ادمین<span class="text-danger">*</span></div>
                                    @foreach($errors->get('image') as $message)
                                        <div wire:loading.remove
                                             class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                    @endforeach
                                    @if($oldPhoto)
                                        <img width="200" src="/{{$oldPhoto}}">
                                    @endif
                                    @if ($image and in_array($fileExtension,$extensions))

                                        <div wire:loading wire:target="image" class="spinner-grow"
                                             style="width: 3rem; height: 3rem;" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <img width="200" src="{{$image->temporaryUrl()}}">
                                    @endif
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-start ma-ts">
                                <button type="submit" class="btn  btn-primary add-success-noti-admin">ذحیره</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
            <div class="card">
                <div class="card-body">
                    <div wire:ignore class="table-responsive">

                        <table id="copy-print-csv" class="table v-middle">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="copy-print-csv" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Products: activate to sort column descending"
                                    style="width:10px;">#
                                </th>
                                <th class="sorting_asc" tabindex="0" aria-controls="copy-print-csv" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Products: activate to sort column descending"
                                    style="width: 40.763px;">ادمین
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="copy-print-csv" rowspan="1"
                                    colspan="1" aria-label="Ratings: activate to sort column ascending"
                                    style="width: 85.1042px;">ایمیل و موبایل
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="copy-print-csv" rowspan="1"
                                    colspan="1" aria-label="Ratings: activate to sort column ascending"
                                    style="width: 85.1042px;">پسورد
                                </th>

                                <th class="sorting" tabindex="0" aria-controls="copy-print-csv" rowspan="1"
                                    colspan="1" aria-label="Status: activate to sort column ascending"
                                    style="width: 64.4141px;">تاریخ عضویت
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="copy-print-csv" rowspan="1"
                                    colspan="1" aria-label="Actions: activate to sort column ascending"
                                    style="width: 72.2005px;">عملیات
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($admins as $admin)
                                <tr role="row" class="odd">
                                    <td>{{$loop->index+1}}</td>
                                    <td class="sorting_1">
                                        <div class="media-box  align-items-center ">
                                            <img src="/{{@$admin->image->file}}" width="50" height="50"
                                                 class=" ms-2 media-avatar"
                                                 alt="Product">
                                            <div class="media-box-body ms-2">
                                                <a disabled class="text-truncate">{{ $admin->name }}</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$admin->email}}<br>{{$admin->mobile}}</td>
                                    <td>{{$admin->password}}</td>
                                    <td>{{$admin->created_at}}<br>({{$admin->created_at->diffForHumans()}})</td>
                                    <td>
                                        <a data-bs-toggle="tooltip" data-bs-placement="bottom"
                                           data-bs-original-title="ویرایش"
                                           href="javascript:0"
                                           wire:click="editAdmin({{$admin->id}})">
                                            <i class="icon-edit1 text-info ms-2 "
                                               style="font-size: 1.3rem"></i>
                                        </a>
                                        <a data-bs-toggle="tooltip" data-bs-placement="bottom"
                                           data-bs-original-title="حذف"
                                           href="javascript:0" wire:click="deleteConfirm({{$admin->id}})">
                                            <i class="icon-trash text-danger ms-2 "
                                               style="font-size: 1.3rem"></i>
                                        </a>
                                        <div class="form-check d-inline-flex">
                                            <input data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                   data-bs-original-title="بلاک"
                                                   class="form-check-input" value="{{$admin->id}}"
                                                   @if($admin->block !=0) checked @endif
                                                   wire:change="blockAdmin($event.target.value)" type="checkbox">
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
    <div wire:ignore.self class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1"
         aria-labelledby="exampleModalCenteredScrollableTitle" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">احراز هویت</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

            </div>
        </div>
    </div>
    @push('script')
        <script>
            window.addEventListener('swal:confirm', event => {
                Swal.fire({
                    title: ' مطمئن هستی ؟',
                    text: "!!!!ادمین مورد نظر حذف میشود",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'بله , مشکلی نیست !',
                    cancelButtonText: 'لغو',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.livewire.emit('delete', event.detail.id)
                        window.location.reload()
                    }
                });
            });
        </script>
        <script>
            window.addEventListener('swal:alert-success', event => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'عملیات با موفقیت انجام شد',
                    showConfirmButton: false,
                    timer: 1500
                })
            })
        </script>
    @endpush
</div>

