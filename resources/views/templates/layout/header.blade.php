<?php
    $setting = Cache::get('setting');
    $menu_top = Cache::get('menu_top');
    $cateProducts = Cache::get('cateProducts');
?>

<header class="vk-header">
    <div class="vk-header__mid">
        <div class="container">
            <div class="vk-header__mid-content">
                <div class="vk-header__logo vk-img vk-img--mw100">
                    <a href="{{url('')}}" title="Han nats">
                        <img src="{{asset('public/images/logo/logo-1.png')}}" alt="nats">
                    </a>
                </div> <!-- ./vk-header__logo-->
                <div class="vk-header__mid-right">
                    <div class="vk-header__search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Tìm kiếm">
                            <span class="input-group-btn">
                                <button class="vk-btn vk-btn--search vk-btn--mod-1" type="button">
                                    <i class="_icon fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>  <!--./vk-header__search-->

                    <div class="vk-header__shopcart">
                        <a href="{{url('gio-hang')}}" title="" class="_link"><i class="_icon fa fa-shopping-bag"></i> <span class="_number">{{\Cart::count()}}</span></a>
                    </div>

                    <div class="vk-header__hotline">
                        <p class="vk-hotline vk-text--red-1">Hotline: <strong><a href="callto:19009429" title="">{{$setting->hotline}}</a></strong></p>
                    </div><!-- /.vk-header__hotline -->

                </div> <!--./vk-header__mid-right-->

            </div> <!--./vk-header-bot-content-->
        </div>
        <!-- /.container -->
    </div><!--./vk-header__mid-->

    <div class="vk-header__bot">
        <div class="container">
            <nav class="vk-header__menu">
                <ul class="vk-list vk-list--inline vk-menu__main">
                    <li class="vk-list__item"><a href="{{url('')}}" title="">Trang chủ</a></li>
                    <li class="vk-list__item">
                        <a href="javascript:;" title="">Danh mục sản phẩm</a>
                        <ul class="vk-list vk-menu__child">
                            @foreach($cateProducts as $cateProduct)
                            <li class="vk-list__item"><a href="{{url('san-pham/'.$cateProduct->alias)}}" title="">{{$cateProduct->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="vk-list__item"><a href="{{url('cam-nang')}}" title="">Cẩm nang</a></li>
                    <li class="vk-list__item"><a href="{{url('lien-he')}}" title="">Liên hệ</a></li>
                </ul>
            </nav>
            <nav class="vk-header__menu--mobile" id="menu">
                <ul class="">

                    <li class=""><a href="{{url('')}}" title="">Trang chủ</a></li>
                    <li class="">
                        <a href="shop.html" title="">Danh mục sản phẩm</a>
                        <ul class="">
                             @foreach($cateProducts as $cateProduct)
                            <li class="vk-list__item"><a href="{{url('san-pham/'.$cateProduct->alias)}}" title="">{{$cateProduct->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class=""><a href="{{url('cam-nang')}}" title="">Cẩm nang</a></li>
                    <li class=""><a href="{{url('lien-he')}}" title="">Liên hệ</a></li>
                    <li class=""><a href="{{url('gio-hang')}}" title="">Giỏ hàng</a></li>
                    <li class=""><a href="#" title="">Đăng ký</a></li>
                    <li class=""><a href="#" title="">Đăng nhập</a></li>
                    <li class=""><a href="#" title="">Hệ thống cửa hàng</a></li>
                </ul>
            </nav>
        </div>
        <!-- /.container -->
    </div> <!--./vk-header__bot-->
</header> <!--./vk-header-->