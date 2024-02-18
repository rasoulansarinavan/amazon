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
                    <div class="card-title">نمایش نظر <span class="text-warning">{{$comment->author->first_name}}</span>
                    </div>
                </div>
                <div class="card-header">
                    <div class="card-title">مشخصات کالا: <span class="text-warning">{{$comment->product->title}}</span>
                    </div>
                </div>
                <div class="card-header">
                    <div class="card-title">کد کالا: <span class="text-warning">{{$comment->product->id}}</span>
                    </div>
                </div>
                <div class="card-header">
                    <div class="card-title"><span class="text-info">متن نظر:</span> <span
                            class="text-white">{{$comment->body}}</span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row gutters">
                        <form
                            wire:submit.prevent="editComment(Object.fromEntries(new FormData($event.target)))">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="field-wrapper" wire:ignore>
                    <textarea name="body" id="body"
                              class="form-control @error('body') error-input-border @enderror"
                              type="text"></textarea>
                                    <div class="field-placeholder text-warning">ویرایش پاسخ</div>
                                    @foreach ($errors->get('body') as $message)
                                        <div wire:loading.remove
                                             class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 ma-ts">
                                    <button type="submit"
                                            class="btn  btn-primary add-success-noti-admin">
                                        ذخیره
                                    </button>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 ma-ts">
                                    <a href="{{route('admin.comments')}}" style="float: left"
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
</div>
