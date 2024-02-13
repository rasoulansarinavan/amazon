<nav class="sidebar-wrapper">
    @php
        $prefix=\Illuminate\Support\Facades\Route::current()->getPrefix();
        $rout_name=\Illuminate\Support\Facades\Route::current()->getName();
//        $adminType=\Illuminate\Support\Facades\Auth::guard('admin')->user()->admin_type_id;

    @endphp

    <style>
        .default-sidebar-wrapper .default-sidebar-menu .default-sidebar-dropdown > a:after {
            font-family: "icomoon";
            font-weight: 700;
            font-size: 1rem;
            content: "\e9ef";
            display: inline-block;
            position: absolute;
            left: 15px;
            top: 18px;
            -webkit-transition: -webkit-transform .3s ease;
            transition: -webkit-transform .3s ease;
            transition: transform .3s ease;
            transition: transform .3s ease, -webkit-transform .3s ease;
        }
    </style>
    <!-- Default sidebar wrapper start -->
    <div class="default-sidebar-wrapper">

        <!-- Sidebar brand starts -->
        <div class="default-sidebar-brand">
            <a href="{{route('admin.dashboard')}}" class="logo justify-content-center">
                <img style="max-height: 140px !important" src="/backend/img/amazon.png"/>
            </a>
        </div>
        <!-- Sidebar brand starts -->

        <!-- Sidebar menu starts -->
        <div class="defaultSidebarMenuScroll">
            <div class="default-sidebar-menu">
                <ul>
                    <li class="{{$rout_name=='admin.dashboard'?'active':''}}">
                        <a href="{{route('admin.dashboard')}}" class="current-page">
                            <i class="icon-home2"></i>
                            <span class="menu-text">داشبورد</span>
                        </a>
                    </li>
                    <li class="@if($rout_name=='admin.category' or $rout_name=='admin.category.create') active @endif">
                        <a href="{{route('admin.category')}}" class="current-page">
                            <i class="icon-add-to-list"></i>
                            <span class="menu-text">مدیریت دسته بندی ها</span>
                        </a>
                    </li>
                    <li class="@if($rout_name=='admin.brand' or $rout_name=='admin.product.brand') active @endif">
                        <a href="{{route('admin.brand')}}" class="current-page">
                            <i class="icon-add_circle"></i>
                            <span class="menu-text">مدیریت برندها</span>
                        </a>
                    </li>
                    <li class="@if($rout_name=='admin.product' or $rout_name=='admin.product.create') active @endif">
                        <a href="{{route('admin.product')}}" class="current-page">
                            <i class="icon-dns"></i>
                            <span class="menu-text">مدیریت محصولات</span>
                        </a>
                    </li>
                    <li class="@if($rout_name=='admin.delivery') active @endif">
                        <a href="{{route('admin.delivery')}}" class="current-page">
                            <i class="icon-address"></i>
                            <span class="menu-text">روش های ارسال</span>
                        </a>
                    </li>
                    <li class="@if($rout_name=='admin.order') active @endif">
                        <a href="{{route('admin.order')}}" class="current-page">
                            <i class="note-icon-orderedlist"></i>
                            <span class="menu-text">مدیریت سفارشات</span>
                        </a>
                    </li>
                    <li class="@if($rout_name=='admin.store' or $rout_name=='admin.store.update' or $rout_name=='admin.store.edit') active @endif">
                        <a href="{{route('admin.store')}}" class="current-page">
                            <i class="note-icon-special-character"></i>
                            <span class="menu-text">مدیریت انبار</span>
                        </a>
                    </li>
                    <li class="default-sidebar-dropdown @if($rout_name=='admin.users' or $rout_name=='admin.users.admins') active @endif">
                        <a href="#">
                            <i class="icon-users"></i>
                            <span class="menu-text">کاربران</span>
                        </a>
                        <div class="default-sidebar-submenu">
                            <ul>
                                <li class="@if($rout_name=='admin.users')  active @endif">
                                    <a href="{{route('admin.users')}}">لیست کاربران</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.users.admins')}}"
                                       class="{{$rout_name=='admin.users.admins'?'current-page':''}}">مدیریت ادمین
                                        ها</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="@if($rout_name=='admin.comments') active @endif">
                        <a href="{{route('admin.comments')}}" class="current-page">
                            <i class="icon-comment"></i>
                            <span class="menu-text">مدیریت نظرات</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

