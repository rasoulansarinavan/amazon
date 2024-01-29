<div class="content-wrapper-scroll">
    <style>
        .select2-results__option, .select2-container--default .select2-selection--multiple .select2-selection__choice__display {
            text-transform: uppercase;
        }

    </style>
    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <!-- Card start -->
                <div class="card">
                    <div class="card-body">
                        <div class="custom-tabs-container">
                            <a href="{{route('admin.product')}}" class="btn btn-outline-success"
                               style="float: left">محصولات<span></span>
                            </a>
                            <ul class="nav nav-tabs" id="myTab" role="tablist"
                            style=" padding: 0.09rem;">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link {{$step1 ? 'active' : '' }}" id="first-tab" data-bs-toggle="tab"
                                       disabled
                                       role="tab" aria-controls="first" aria-selected="{{$step1 ? 'true' : '' }}">اطلاعات
                                        کلی</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link {{$step2 ? 'active' : '' }}" id="second-tab" data-bs-toggle="tab"
                                       disabled
                                       role="tab"
                                       aria-controls="second" aria-selected="{{$step2 ? 'true' : '' }}">تصویر محصول</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link {{$step3 ? 'active' : '' }}" id="third-tab" data-bs-toggle="tab"
                                       disabled
                                       role="tab"
                                       aria-controls="third" aria-selected="{{$step3 ? 'true' : '' }}">سئو</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link {{$step4 ? 'active' : '' }}" id="forth-tab" disabled
                                       data-bs-toggle="tab"
                                       role="tab"
                                       aria-controls="forth" aria-selected="{{$step4 ? 'true' : '' }}">ویژگی
                                        محصول</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">

                                @include('livewire.admin.product.step1')
                                @include('livewire.admin.product.step2')
                                @include('livewire.admin.product.step3')
                                @include('livewire.admin.product.step4')

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
        <!-- Summernote JS -->
        <script src="/backend/vendor/summernote/summernote-bs4.js"></script>
        <!-- Input Tags JS -->
        <script src="/backend/vendor/input-tags/tagsinput.min.js"></script>
        <script src="/backend/vendor/input-tags/typeahead.js"></script>
        <script src="/backend/vendor/input-tags/tagsinput-custom.js"></script>
        <script>
            // Summernote

            $(document).ready(function () {
                $('.summernote').summernote({
                    height: 120,
                    tabsize: 2,
                    focus: true,
                    toolbar: [
                        ['font', ['bold', 'underline', 'clear']],
                        ['para', ['ul', 'ol']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen', 'codeview', 'help']],
                    ]
                });
            });

        </script>

    @endpush

</div>
