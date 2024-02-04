@extends('master')
@section('content')
<div class="row admin-main-content">
    <!--Меню админки-->
    <div class="col-md-3 col-xl-2 admin-left-sitebar">
        <div class="admin-menu">
            <a href='{{ route('admin') }}' class="admin-menu-element">
                <i class="fa-solid fa-house"></i>
                <div class="admin-element__title">
                     Главная
                </div>
            </a>
            <a href='{{ route('admin_main_data') }}' class="admin-menu-element">
                <i class='fa-solid fa-gear'></i>
                <div class="admin-element__title">
                     Управление сайтом
                </div>
            </a>
            <a href='{{ route('admin_product') }}' class="admin-menu-element">
                <i class="fa-solid fa-file-circle-plus"></i>
                <div class="admin-element__title">
                    Управление продуктами
                </div>
            </a>
            <a href='{{ route('admin_extra') }}' class="admin-menu-element">
                <i class="fa-solid fa-arrow-right-arrow-left"></i>
                <div class="admin-element__title">
                    Дополнительные настройки
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-9 col-xl-10 admin-comtent">
        @yield('admin-content')
    </div>
</div>

@endsection
