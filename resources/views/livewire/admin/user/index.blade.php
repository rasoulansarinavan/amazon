<div class="content-wrapper">
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
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
                                    style="width: 90.763px;">کاربر
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="copy-print-csv" rowspan="1"
                                    colspan="1" aria-label="Ratings: activate to sort column ascending"
                                    style="width: 85.1042px;"> شماره همراه
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="copy-print-csv" rowspan="1"
                                    colspan="1" aria-label="Ratings: activate to sort column ascending"
                                    style="width: 85.1042px;">ایمیل
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

                            @foreach($users as $user)
                                <tr role="row" class="odd">
                                    <td>{{$loop->index+1}}</td>
                                    <td class="sorting_1">
                                        <div class="media-box d-flex align-items-center ">
                                            <img src="{{$user->avatar}}" width="50" class=" ms-2 media-avatar"
                                                 alt="Product">
                                            <div class="media-box-body ms-2">
                                                <a href="#" class="text-truncate">{{ $user->name }}</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$user->mobile}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at}}<br>({{$user->created_at->diffForHumans()}})</td>
                                    <td>
                                        <div class="form-check d-inline-flex"><input class="form-check-input"
                                                                                     value="{{$user->id}}"
                                                                                     data-bs-toggle="tooltip"
                                                                                     data-bs-placement="bottom"
                                                                                     data-bs-original-title="بلاک"
                                                                                     @if($user->blocked !=0) checked
                                                                                     @endif
                                                                                     wire:change="blockUser($event.target.value)"
                                                                                     type="checkbox">
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

