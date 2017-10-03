@extends('index')
@section('content')

<?php
    $setting = Cache::get('setting');
    $cateProducts = Cache::get('cateProducts');
?>
<section class="vk-content">
    <div class="vk-home">
        <div class="vk-home__top">
            <div class="container">
                <div class="vk-shop__box vk-shop__box--mod-1">
                    <div class="vk-shop__left">
                        <div class="vk-shop__left-inner">
                            <div class="vk-home__slider" data-slider="home">
                                @foreach($slider as $item)
                                <div class="vk-img">
                                    <img src="{{asset('upload/hinhanh/'.$item->photo)}}" alt="" class="">
                                </div>
                                @endforeach
                            </div>
                        </div> <!--./vk-shop__left-inner-->
                    </div>
                    <!-- /.vk-page__left -->
                    <div class="vk-shop__right">
                        <div class="vk-sidebar">
                            <div class="vk-sidebar__box">
                                <h3 class="vk-sidebar__heading text-uppercase">Danh mục sản phẩm</h3>
                                <ul class="vk-list vk-list--mod-1">
                                    @foreach($cateProducts as $cateProduct)
                                        <li class="vk-list__item"><a href="{{url('san-pham/'.$cateProduct->alias)}}" title="">{{$cateProduct->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div> <!--./vk-sidebar__box-->
                        </div> <!--./vk-sidebar-->
                    </div>
                    <!-- /.vk-page__right -->

                </div> <!--./vk-shop__box-->
            </div>
            <!-- /.container -->


        </div> <!--./vk-home__top-->

        <div class="vk-home__mid">
            <div class="container">
                <div class="vk-shop__box vk-shop__box--mod-1">
                    <div class="vk-shop__left">
                        <div class="vk-shop__left-inner">

                            <div class="vk-shop__left-inner">
                                <div class="vk-shop__heading-box">
                                    <h1 class="vk-shop__heading text-uppercase">Sản phẩm bán chạy</h1>

                                </div>  <!--./vk-shop__heading-box-->

                                <div class="row vk-shop-item__list">


                                    <div class="col-sm-6 col-md-4 col-lg-3 _item">
                                        <div class="vk-shop-item__wrapper">
                                            <div class="vk-shop-item">
                                                <div class="vk-img vk-img--mw100">
                                                    <a href="#item0" title="Gift Set Gucci Bamboo Pour Femme" class="vk-img__link" data-toggle="modal" data-target="#item0">
                                                        <img src="{{asset('public/images/shop/shop-item-1.jpg')}}" alt="Gift Set Gucci Bamboo Pour Femme" class="vk-img__img">
                                                    </a>
                                                </div>

                                                <div class="vk-shop-item__brief">
                                                    <h3 class="vk-shop-item__title"><a href="shop-detail.html" title="Gift Set Gucci Bamboo Pour Femme">Gift Set Gucci Bamboo Pour Femme</a></h3>
                                                    <p class="vk-shop-item__price vk-text--red-1">5.490.000₫</p>
                                                </div>

                                            </div> <!--./vk-shop-item-->
                                        </div>
                                        <!-- /.vk-shop-item__wrapper -->

                                    </div>



                                    <div class="col-sm-6 col-md-4 col-lg-3 _item">
                                        <div class="vk-shop-item__wrapper">
                                            <div class="vk-shop-item">
                                                <div class="vk-img vk-img--mw100">
                                                    <a href="#item1" title="Gucci Bamboo For Women EDP" class="vk-img__link" data-toggle="modal" data-target="#item1">
                                                        <img src="{{asset('public/images/shop/shop-item-2.jpg')}}" alt="Gucci Bamboo For Women EDP" class="vk-img__img">
                                                    </a>
                                                </div>

                                                <div class="vk-shop-item__brief">
                                                    <h3 class="vk-shop-item__title"><a href="shop-detail.html" title="Gucci Bamboo For Women EDP">Gucci Bamboo For Women EDP</a></h3>
                                                    <p class="vk-shop-item__price vk-text--red-1">3.290.000₫</p>
                                                </div>

                                            </div> <!--./vk-shop-item-->
                                        </div>
                                        <!-- /.vk-shop-item__wrapper -->

                                    </div>



                                    <div class="col-sm-6 col-md-4 col-lg-3 _item">
                                        <div class="vk-shop-item__wrapper">
                                            <div class="vk-shop-item">
                                                <div class="vk-img vk-img--mw100">
                                                    <a href="#item2" title="Gucci Première For Women EDT" class="vk-img__link" data-toggle="modal" data-target="#item2">
                                                        <img src="images/shop/shop-item-3.jpg" alt="Gucci Première For Women EDT" class="vk-img__img">
                                                    </a>
                                                </div>

                                                <div class="vk-shop-item__brief">
                                                    <h3 class="vk-shop-item__title"><a href="shop-detail.html" title="Gucci Première For Women EDT">Gucci Première For Women EDT</a></h3>
                                                    <p class="vk-shop-item__price vk-text--red-1">2.890.000₫</p>
                                                </div>

                                            </div> <!--./vk-shop-item-->
                                        </div>
                                        <!-- /.vk-shop-item__wrapper -->

                                    </div>



                                    <div class="col-sm-6 col-md-4 col-lg-3 _item">
                                        <div class="vk-shop-item__wrapper">
                                            <div class="vk-shop-item">
                                                <div class="vk-img vk-img--mw100">
                                                    <a href="#item3" title="Made To Measure Pour Homme" class="vk-img__link" data-toggle="modal" data-target="#item3">
                                                        <img src="images/shop/shop-item-4.jpg" alt="Made To Measure Pour Homme" class="vk-img__img">
                                                    </a>
                                                </div>

                                                <div class="vk-shop-item__brief">
                                                    <h3 class="vk-shop-item__title"><a href="shop-detail.html" title="Made To Measure Pour Homme">Made To Measure Pour Homme</a></h3>
                                                    <p class="vk-shop-item__price vk-text--red-1">9.590.000₫</p>
                                                </div>

                                            </div> <!--./vk-shop-item-->
                                        </div>
                                        <!-- /.vk-shop-item__wrapper -->

                                    </div>



                                    <div class="col-sm-6 col-md-4 col-lg-3 _item">
                                        <div class="vk-shop-item__wrapper">
                                            <div class="vk-shop-item">
                                                <div class="vk-img vk-img--mw100">
                                                    <a href="#item4" title="Gucci By Gucci Pour Homme" class="vk-img__link" data-toggle="modal" data-target="#item4">
                                                        <img src="images/shop/shop-item-5.jpg" alt="Gucci By Gucci Pour Homme" class="vk-img__img">
                                                    </a>
                                                </div>

                                                <div class="vk-shop-item__brief">
                                                    <h3 class="vk-shop-item__title"><a href="shop-detail.html" title="Gucci By Gucci Pour Homme">Gucci By Gucci Pour Homme</a></h3>
                                                    <p class="vk-shop-item__price vk-text--red-1">4.050.000₫</p>
                                                </div>

                                            </div> <!--./vk-shop-item-->
                                        </div>
                                        <!-- /.vk-shop-item__wrapper -->

                                    </div>



                                    <div class="col-sm-6 col-md-4 col-lg-3 _item">
                                        <div class="vk-shop-item__wrapper">
                                            <div class="vk-shop-item">
                                                <div class="vk-img vk-img--mw100">
                                                    <a href="#item5" title="Flora By Gucci Gorgeous Gardenia" class="vk-img__link" data-toggle="modal" data-target="#item5">
                                                        <img src="images/shop/shop-item-6.jpg" alt="Flora By Gucci Gorgeous Gardenia" class="vk-img__img">
                                                    </a>
                                                </div>

                                                <div class="vk-shop-item__brief">
                                                    <h3 class="vk-shop-item__title"><a href="shop-detail.html" title="Flora By Gucci Gorgeous Gardenia">Flora By Gucci Gorgeous Gardenia</a></h3>
                                                    <p class="vk-shop-item__price vk-text--red-1">7.680.000₫</p>
                                                </div>

                                            </div> <!--./vk-shop-item-->
                                        </div>
                                        <!-- /.vk-shop-item__wrapper -->

                                    </div>



                                    <div class="col-sm-6 col-md-4 col-lg-3 _item">
                                        <div class="vk-shop-item__wrapper">
                                            <div class="vk-shop-item">
                                                <div class="vk-img vk-img--mw100">
                                                    <a href="#item6" title="Flora By Gucci Glorious Mandarin" class="vk-img__link" data-toggle="modal" data-target="#item6">
                                                        <img src="images/shop/shop-item-7.jpg" alt="Flora By Gucci Glorious Mandarin" class="vk-img__img">
                                                    </a>
                                                </div>

                                                <div class="vk-shop-item__brief">
                                                    <h3 class="vk-shop-item__title"><a href="shop-detail.html" title="Flora By Gucci Glorious Mandarin">Flora By Gucci Glorious Mandarin</a></h3>
                                                    <p class="vk-shop-item__price vk-text--red-1">1.350.000₫</p>
                                                </div>

                                            </div> <!--./vk-shop-item-->
                                        </div>
                                        <!-- /.vk-shop-item__wrapper -->

                                    </div>



                                    <div class="col-sm-6 col-md-4 col-lg-3 _item">
                                        <div class="vk-shop-item__wrapper">
                                            <div class="vk-shop-item">
                                                <div class="vk-img vk-img--mw100">
                                                    <a href="#item7" title="Gucci By Gucci For Women EDP" class="vk-img__link" data-toggle="modal" data-target="#item7">
                                                        <img src="images/shop/shop-item-8.jpg" alt="Gucci By Gucci For Women EDP" class="vk-img__img">
                                                    </a>
                                                </div>

                                                <div class="vk-shop-item__brief">
                                                    <h3 class="vk-shop-item__title"><a href="shop-detail.html" title="Gucci By Gucci For Women EDP">Gucci By Gucci For Women EDP</a></h3>
                                                    <p class="vk-shop-item__price vk-text--red-1">5.450.000₫</p>
                                                </div>

                                            </div> <!--./vk-shop-item-->
                                        </div>
                                        <!-- /.vk-shop-item__wrapper -->

                                    </div>

                                </div> <!--./row-->

                                <div class="vk-shop-modal__list">

                                    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="item0">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <button type="button" class="close vk-btn vk-btn--close" data-dismiss="modal" aria-label="Close">X</button>

                                                <div class="vk-shop-detail vk-shop-detail--quickview">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="vk-shop-detail__left col-lg-6">
                                                                <div class="vk-shop-detail__thumbnail-wrapper">
                                                                    <div class="vk-shop-detail__thumbnail">

                                                                        <div class="vk-slider__for" data-slider="slider-for">

                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>

                                                                        </div>

                                                                    </div> <!--./slider-for-->

                                                                    <div class="vk-shop-detail__thumbnail-list vk-slider" >

                                                                        <div class="vk-slider__nav" data-slider="slider-nav">
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                        </div>


                                                                    </div> <!--./slider-for-->
                                                                </div> <!--./vk-shop-detail__thumbnail-wrapper-->

                                                            </div> <!--./vk-shop-detail__left-->

                                                            <div class="vk-shop-detail__right col-lg-6">

                                                                <div class="vk-shop-detail__brief">
                                                                    <h1 class="vk-shop-detail__title">Made To Measure Pour Homme </h1>

                                                                    <div class="vk-shop-detail__box">

                                                                        <p class="vk-shop-detail__price vk-text--red-1">9.790.000₫ </p>

                                                                        <div class="vk-shop-detail__brief-short">
                                                                            <p>Thương hiệu: Chanel</p>
                                                                            <p>Mã sản phẩm: IP7_08951</p>
                                                                            <p>Tình trạng: Còn hàng</p>
                                                                        </div>

                                                                        <div class="vk-shop-detail__des">
                                                                            <p><strong>Mô tả:</strong></p>
                                                                            <p>CoCo Chanel được coi là một biểu tượng đáng ngưỡng mộ trong làng thời trang thế kỷ
                                                                                20. Những thiết kế Chanel luôn thuyết phục giới sành điệu, dù rằng giá của nó thường
                                                                                ..trên trời … Đặc biệt nước hoa Chanel được coi là thương hiệu nước hoa đẳng cấp
                                                                                nhất.</p>
                                                                        </div>

                                                                        <div class="vk-button">
                                                                            <div class="vk-calculator" data-calculator="true">
                                                                                <input type="number" name="name" value="1" min="1" class="form-control order-2">
                                                                                <button class="vk-calculator__button vk-btn vk-btn--minus order-1"
                                                                                        data-index="minus">
                                                                                    <i class="_icon fa fa-minus"></i>
                                                                                </button>
                                                                                <button class="vk-calculator__button vk-btn vk-btn--plus order-3" data-index="plus">
                                                                                    <i
                                                                                            class="_icon fa fa-plus"></i>
                                                                                </button>
                                                                            </div> <!--./calculator-->

                                                                            <a href="shopcart.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Mua ngay</a>
                                                                            <a href="shop-detail.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Chi tiết</a>
                                                                        </div>

                                                                    </div> <!--./vk-shop-detail__box-->

                                                                </div> <!--./vk-shop-detail__brief-->


                                                            </div><!-- /.vk-shop-detail__right -->

                                                        </div>
                                                    </div>
                                                    <!-- /.container -->
                                                </div> <!--./vk-shop-detail-->

                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="item1">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <button type="button" class="close vk-btn vk-btn--close" data-dismiss="modal" aria-label="Close">X</button>

                                                <div class="vk-shop-detail vk-shop-detail--quickview">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="vk-shop-detail__left col-lg-6">
                                                                <div class="vk-shop-detail__thumbnail-wrapper">
                                                                    <div class="vk-shop-detail__thumbnail">

                                                                        <div class="vk-slider__for" data-slider="slider-for">

                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>

                                                                        </div>

                                                                    </div> <!--./slider-for-->

                                                                    <div class="vk-shop-detail__thumbnail-list vk-slider" >

                                                                        <div class="vk-slider__nav" data-slider="slider-nav">
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                        </div>


                                                                    </div> <!--./slider-for-->
                                                                </div> <!--./vk-shop-detail__thumbnail-wrapper-->

                                                            </div> <!--./vk-shop-detail__left-->

                                                            <div class="vk-shop-detail__right col-lg-6">

                                                                <div class="vk-shop-detail__brief">
                                                                    <h1 class="vk-shop-detail__title">Made To Measure Pour Homme </h1>

                                                                    <div class="vk-shop-detail__box">

                                                                        <p class="vk-shop-detail__price vk-text--red-1">9.790.000₫ </p>

                                                                        <div class="vk-shop-detail__brief-short">
                                                                            <p>Thương hiệu: Chanel</p>
                                                                            <p>Mã sản phẩm: IP7_08951</p>
                                                                            <p>Tình trạng: Còn hàng</p>
                                                                        </div>

                                                                        <div class="vk-shop-detail__des">
                                                                            <p><strong>Mô tả:</strong></p>
                                                                            <p>CoCo Chanel được coi là một biểu tượng đáng ngưỡng mộ trong làng thời trang thế kỷ
                                                                                20. Những thiết kế Chanel luôn thuyết phục giới sành điệu, dù rằng giá của nó thường
                                                                                ..trên trời … Đặc biệt nước hoa Chanel được coi là thương hiệu nước hoa đẳng cấp
                                                                                nhất.</p>
                                                                        </div>

                                                                        <div class="vk-button">
                                                                            <div class="vk-calculator" data-calculator="true">
                                                                                <input type="number" name="name" value="1" min="1" class="form-control order-2">
                                                                                <button class="vk-calculator__button vk-btn vk-btn--minus order-1"
                                                                                        data-index="minus">
                                                                                    <i class="_icon fa fa-minus"></i>
                                                                                </button>
                                                                                <button class="vk-calculator__button vk-btn vk-btn--plus order-3" data-index="plus">
                                                                                    <i
                                                                                            class="_icon fa fa-plus"></i>
                                                                                </button>
                                                                            </div> <!--./calculator-->

                                                                            <a href="shopcart.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Mua ngay</a>
                                                                            <a href="shop-detail.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Chi tiết</a>
                                                                        </div>

                                                                    </div> <!--./vk-shop-detail__box-->

                                                                </div> <!--./vk-shop-detail__brief-->


                                                            </div><!-- /.vk-shop-detail__right -->

                                                        </div>
                                                    </div>
                                                    <!-- /.container -->
                                                </div> <!--./vk-shop-detail-->

                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="item2">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <button type="button" class="close vk-btn vk-btn--close" data-dismiss="modal" aria-label="Close">X</button>

                                                <div class="vk-shop-detail vk-shop-detail--quickview">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="vk-shop-detail__left col-lg-6">
                                                                <div class="vk-shop-detail__thumbnail-wrapper">
                                                                    <div class="vk-shop-detail__thumbnail">

                                                                        <div class="vk-slider__for" data-slider="slider-for">

                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>

                                                                        </div>

                                                                    </div> <!--./slider-for-->

                                                                    <div class="vk-shop-detail__thumbnail-list vk-slider" >

                                                                        <div class="vk-slider__nav" data-slider="slider-nav">
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                        </div>


                                                                    </div> <!--./slider-for-->
                                                                </div> <!--./vk-shop-detail__thumbnail-wrapper-->

                                                            </div> <!--./vk-shop-detail__left-->

                                                            <div class="vk-shop-detail__right col-lg-6">

                                                                <div class="vk-shop-detail__brief">
                                                                    <h1 class="vk-shop-detail__title">Made To Measure Pour Homme </h1>

                                                                    <div class="vk-shop-detail__box">

                                                                        <p class="vk-shop-detail__price vk-text--red-1">9.790.000₫ </p>

                                                                        <div class="vk-shop-detail__brief-short">
                                                                            <p>Thương hiệu: Chanel</p>
                                                                            <p>Mã sản phẩm: IP7_08951</p>
                                                                            <p>Tình trạng: Còn hàng</p>
                                                                        </div>

                                                                        <div class="vk-shop-detail__des">
                                                                            <p><strong>Mô tả:</strong></p>
                                                                            <p>CoCo Chanel được coi là một biểu tượng đáng ngưỡng mộ trong làng thời trang thế kỷ
                                                                                20. Những thiết kế Chanel luôn thuyết phục giới sành điệu, dù rằng giá của nó thường
                                                                                ..trên trời … Đặc biệt nước hoa Chanel được coi là thương hiệu nước hoa đẳng cấp
                                                                                nhất.</p>
                                                                        </div>

                                                                        <div class="vk-button">
                                                                            <div class="vk-calculator" data-calculator="true">
                                                                                <input type="number" name="name" value="1" min="1" class="form-control order-2">
                                                                                <button class="vk-calculator__button vk-btn vk-btn--minus order-1"
                                                                                        data-index="minus">
                                                                                    <i class="_icon fa fa-minus"></i>
                                                                                </button>
                                                                                <button class="vk-calculator__button vk-btn vk-btn--plus order-3" data-index="plus">
                                                                                    <i
                                                                                            class="_icon fa fa-plus"></i>
                                                                                </button>
                                                                            </div> <!--./calculator-->

                                                                            <a href="shopcart.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Mua ngay</a>
                                                                            <a href="shop-detail.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Chi tiết</a>
                                                                        </div>

                                                                    </div> <!--./vk-shop-detail__box-->

                                                                </div> <!--./vk-shop-detail__brief-->


                                                            </div><!-- /.vk-shop-detail__right -->

                                                        </div>
                                                    </div>
                                                    <!-- /.container -->
                                                </div> <!--./vk-shop-detail-->

                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="item3">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <button type="button" class="close vk-btn vk-btn--close" data-dismiss="modal" aria-label="Close">X</button>

                                                <div class="vk-shop-detail vk-shop-detail--quickview">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="vk-shop-detail__left col-lg-6">
                                                                <div class="vk-shop-detail__thumbnail-wrapper">
                                                                    <div class="vk-shop-detail__thumbnail">

                                                                        <div class="vk-slider__for" data-slider="slider-for">

                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>

                                                                        </div>

                                                                    </div> <!--./slider-for-->

                                                                    <div class="vk-shop-detail__thumbnail-list vk-slider" >

                                                                        <div class="vk-slider__nav" data-slider="slider-nav">
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                        </div>


                                                                    </div> <!--./slider-for-->
                                                                </div> <!--./vk-shop-detail__thumbnail-wrapper-->

                                                            </div> <!--./vk-shop-detail__left-->

                                                            <div class="vk-shop-detail__right col-lg-6">

                                                                <div class="vk-shop-detail__brief">
                                                                    <h1 class="vk-shop-detail__title">Made To Measure Pour Homme </h1>

                                                                    <div class="vk-shop-detail__box">

                                                                        <p class="vk-shop-detail__price vk-text--red-1">9.790.000₫ </p>

                                                                        <div class="vk-shop-detail__brief-short">
                                                                            <p>Thương hiệu: Chanel</p>
                                                                            <p>Mã sản phẩm: IP7_08951</p>
                                                                            <p>Tình trạng: Còn hàng</p>
                                                                        </div>

                                                                        <div class="vk-shop-detail__des">
                                                                            <p><strong>Mô tả:</strong></p>
                                                                            <p>CoCo Chanel được coi là một biểu tượng đáng ngưỡng mộ trong làng thời trang thế kỷ
                                                                                20. Những thiết kế Chanel luôn thuyết phục giới sành điệu, dù rằng giá của nó thường
                                                                                ..trên trời … Đặc biệt nước hoa Chanel được coi là thương hiệu nước hoa đẳng cấp
                                                                                nhất.</p>
                                                                        </div>

                                                                        <div class="vk-button">
                                                                            <div class="vk-calculator" data-calculator="true">
                                                                                <input type="number" name="name" value="1" min="1" class="form-control order-2">
                                                                                <button class="vk-calculator__button vk-btn vk-btn--minus order-1"
                                                                                        data-index="minus">
                                                                                    <i class="_icon fa fa-minus"></i>
                                                                                </button>
                                                                                <button class="vk-calculator__button vk-btn vk-btn--plus order-3" data-index="plus">
                                                                                    <i
                                                                                            class="_icon fa fa-plus"></i>
                                                                                </button>
                                                                            </div> <!--./calculator-->

                                                                            <a href="shopcart.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Mua ngay</a>
                                                                            <a href="shop-detail.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Chi tiết</a>
                                                                        </div>

                                                                    </div> <!--./vk-shop-detail__box-->

                                                                </div> <!--./vk-shop-detail__brief-->


                                                            </div><!-- /.vk-shop-detail__right -->

                                                        </div>
                                                    </div>
                                                    <!-- /.container -->
                                                </div> <!--./vk-shop-detail-->

                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="item4">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <button type="button" class="close vk-btn vk-btn--close" data-dismiss="modal" aria-label="Close">X</button>

                                                <div class="vk-shop-detail vk-shop-detail--quickview">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="vk-shop-detail__left col-lg-6">
                                                                <div class="vk-shop-detail__thumbnail-wrapper">
                                                                    <div class="vk-shop-detail__thumbnail">

                                                                        <div class="vk-slider__for" data-slider="slider-for">

                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>

                                                                        </div>

                                                                    </div> <!--./slider-for-->

                                                                    <div class="vk-shop-detail__thumbnail-list vk-slider" >

                                                                        <div class="vk-slider__nav" data-slider="slider-nav">
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                        </div>


                                                                    </div> <!--./slider-for-->
                                                                </div> <!--./vk-shop-detail__thumbnail-wrapper-->

                                                            </div> <!--./vk-shop-detail__left-->

                                                            <div class="vk-shop-detail__right col-lg-6">

                                                                <div class="vk-shop-detail__brief">
                                                                    <h1 class="vk-shop-detail__title">Made To Measure Pour Homme </h1>

                                                                    <div class="vk-shop-detail__box">

                                                                        <p class="vk-shop-detail__price vk-text--red-1">9.790.000₫ </p>

                                                                        <div class="vk-shop-detail__brief-short">
                                                                            <p>Thương hiệu: Chanel</p>
                                                                            <p>Mã sản phẩm: IP7_08951</p>
                                                                            <p>Tình trạng: Còn hàng</p>
                                                                        </div>

                                                                        <div class="vk-shop-detail__des">
                                                                            <p><strong>Mô tả:</strong></p>
                                                                            <p>CoCo Chanel được coi là một biểu tượng đáng ngưỡng mộ trong làng thời trang thế kỷ
                                                                                20. Những thiết kế Chanel luôn thuyết phục giới sành điệu, dù rằng giá của nó thường
                                                                                ..trên trời … Đặc biệt nước hoa Chanel được coi là thương hiệu nước hoa đẳng cấp
                                                                                nhất.</p>
                                                                        </div>

                                                                        <div class="vk-button">
                                                                            <div class="vk-calculator" data-calculator="true">
                                                                                <input type="number" name="name" value="1" min="1" class="form-control order-2">
                                                                                <button class="vk-calculator__button vk-btn vk-btn--minus order-1"
                                                                                        data-index="minus">
                                                                                    <i class="_icon fa fa-minus"></i>
                                                                                </button>
                                                                                <button class="vk-calculator__button vk-btn vk-btn--plus order-3" data-index="plus">
                                                                                    <i
                                                                                            class="_icon fa fa-plus"></i>
                                                                                </button>
                                                                            </div> <!--./calculator-->

                                                                            <a href="shopcart.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Mua ngay</a>
                                                                            <a href="shop-detail.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Chi tiết</a>
                                                                        </div>

                                                                    </div> <!--./vk-shop-detail__box-->

                                                                </div> <!--./vk-shop-detail__brief-->


                                                            </div><!-- /.vk-shop-detail__right -->

                                                        </div>
                                                    </div>
                                                    <!-- /.container -->
                                                </div> <!--./vk-shop-detail-->

                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="item5">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <button type="button" class="close vk-btn vk-btn--close" data-dismiss="modal" aria-label="Close">X</button>

                                                <div class="vk-shop-detail vk-shop-detail--quickview">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="vk-shop-detail__left col-lg-6">
                                                                <div class="vk-shop-detail__thumbnail-wrapper">
                                                                    <div class="vk-shop-detail__thumbnail">

                                                                        <div class="vk-slider__for" data-slider="slider-for">

                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>

                                                                        </div>

                                                                    </div> <!--./slider-for-->

                                                                    <div class="vk-shop-detail__thumbnail-list vk-slider" >

                                                                        <div class="vk-slider__nav" data-slider="slider-nav">
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                        </div>


                                                                    </div> <!--./slider-for-->
                                                                </div> <!--./vk-shop-detail__thumbnail-wrapper-->

                                                            </div> <!--./vk-shop-detail__left-->

                                                            <div class="vk-shop-detail__right col-lg-6">

                                                                <div class="vk-shop-detail__brief">
                                                                    <h1 class="vk-shop-detail__title">Made To Measure Pour Homme </h1>

                                                                    <div class="vk-shop-detail__box">

                                                                        <p class="vk-shop-detail__price vk-text--red-1">9.790.000₫ </p>

                                                                        <div class="vk-shop-detail__brief-short">
                                                                            <p>Thương hiệu: Chanel</p>
                                                                            <p>Mã sản phẩm: IP7_08951</p>
                                                                            <p>Tình trạng: Còn hàng</p>
                                                                        </div>

                                                                        <div class="vk-shop-detail__des">
                                                                            <p><strong>Mô tả:</strong></p>
                                                                            <p>CoCo Chanel được coi là một biểu tượng đáng ngưỡng mộ trong làng thời trang thế kỷ
                                                                                20. Những thiết kế Chanel luôn thuyết phục giới sành điệu, dù rằng giá của nó thường
                                                                                ..trên trời … Đặc biệt nước hoa Chanel được coi là thương hiệu nước hoa đẳng cấp
                                                                                nhất.</p>
                                                                        </div>

                                                                        <div class="vk-button">
                                                                            <div class="vk-calculator" data-calculator="true">
                                                                                <input type="number" name="name" value="1" min="1" class="form-control order-2">
                                                                                <button class="vk-calculator__button vk-btn vk-btn--minus order-1"
                                                                                        data-index="minus">
                                                                                    <i class="_icon fa fa-minus"></i>
                                                                                </button>
                                                                                <button class="vk-calculator__button vk-btn vk-btn--plus order-3" data-index="plus">
                                                                                    <i
                                                                                            class="_icon fa fa-plus"></i>
                                                                                </button>
                                                                            </div> <!--./calculator-->

                                                                            <a href="shopcart.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Mua ngay</a>
                                                                            <a href="shop-detail.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Chi tiết</a>
                                                                        </div>

                                                                    </div> <!--./vk-shop-detail__box-->

                                                                </div> <!--./vk-shop-detail__brief-->


                                                            </div><!-- /.vk-shop-detail__right -->

                                                        </div>
                                                    </div>
                                                    <!-- /.container -->
                                                </div> <!--./vk-shop-detail-->

                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="item6">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <button type="button" class="close vk-btn vk-btn--close" data-dismiss="modal" aria-label="Close">X</button>

                                                <div class="vk-shop-detail vk-shop-detail--quickview">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="vk-shop-detail__left col-lg-6">
                                                                <div class="vk-shop-detail__thumbnail-wrapper">
                                                                    <div class="vk-shop-detail__thumbnail">

                                                                        <div class="vk-slider__for" data-slider="slider-for">

                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>

                                                                        </div>

                                                                    </div> <!--./slider-for-->

                                                                    <div class="vk-shop-detail__thumbnail-list vk-slider" >

                                                                        <div class="vk-slider__nav" data-slider="slider-nav">
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                        </div>


                                                                    </div> <!--./slider-for-->
                                                                </div> <!--./vk-shop-detail__thumbnail-wrapper-->

                                                            </div> <!--./vk-shop-detail__left-->

                                                            <div class="vk-shop-detail__right col-lg-6">

                                                                <div class="vk-shop-detail__brief">
                                                                    <h1 class="vk-shop-detail__title">Made To Measure Pour Homme </h1>

                                                                    <div class="vk-shop-detail__box">

                                                                        <p class="vk-shop-detail__price vk-text--red-1">9.790.000₫ </p>

                                                                        <div class="vk-shop-detail__brief-short">
                                                                            <p>Thương hiệu: Chanel</p>
                                                                            <p>Mã sản phẩm: IP7_08951</p>
                                                                            <p>Tình trạng: Còn hàng</p>
                                                                        </div>

                                                                        <div class="vk-shop-detail__des">
                                                                            <p><strong>Mô tả:</strong></p>
                                                                            <p>CoCo Chanel được coi là một biểu tượng đáng ngưỡng mộ trong làng thời trang thế kỷ
                                                                                20. Những thiết kế Chanel luôn thuyết phục giới sành điệu, dù rằng giá của nó thường
                                                                                ..trên trời … Đặc biệt nước hoa Chanel được coi là thương hiệu nước hoa đẳng cấp
                                                                                nhất.</p>
                                                                        </div>

                                                                        <div class="vk-button">
                                                                            <div class="vk-calculator" data-calculator="true">
                                                                                <input type="number" name="name" value="1" min="1" class="form-control order-2">
                                                                                <button class="vk-calculator__button vk-btn vk-btn--minus order-1"
                                                                                        data-index="minus">
                                                                                    <i class="_icon fa fa-minus"></i>
                                                                                </button>
                                                                                <button class="vk-calculator__button vk-btn vk-btn--plus order-3" data-index="plus">
                                                                                    <i
                                                                                            class="_icon fa fa-plus"></i>
                                                                                </button>
                                                                            </div> <!--./calculator-->

                                                                            <a href="shopcart.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Mua ngay</a>
                                                                            <a href="shop-detail.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Chi tiết</a>
                                                                        </div>

                                                                    </div> <!--./vk-shop-detail__box-->

                                                                </div> <!--./vk-shop-detail__brief-->


                                                            </div><!-- /.vk-shop-detail__right -->

                                                        </div>
                                                    </div>
                                                    <!-- /.container -->
                                                </div> <!--./vk-shop-detail-->

                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="item7">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <button type="button" class="close vk-btn vk-btn--close" data-dismiss="modal" aria-label="Close">X</button>

                                                <div class="vk-shop-detail vk-shop-detail--quickview">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="vk-shop-detail__left col-lg-6">
                                                                <div class="vk-shop-detail__thumbnail-wrapper">
                                                                    <div class="vk-shop-detail__thumbnail">

                                                                        <div class="vk-slider__for" data-slider="slider-for">

                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>

                                                                        </div>

                                                                    </div> <!--./slider-for-->

                                                                    <div class="vk-shop-detail__thumbnail-list vk-slider" >

                                                                        <div class="vk-slider__nav" data-slider="slider-nav">
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                        </div>


                                                                    </div> <!--./slider-for-->
                                                                </div> <!--./vk-shop-detail__thumbnail-wrapper-->

                                                            </div> <!--./vk-shop-detail__left-->

                                                            <div class="vk-shop-detail__right col-lg-6">

                                                                <div class="vk-shop-detail__brief">
                                                                    <h1 class="vk-shop-detail__title">Made To Measure Pour Homme </h1>

                                                                    <div class="vk-shop-detail__box">

                                                                        <p class="vk-shop-detail__price vk-text--red-1">9.790.000₫ </p>

                                                                        <div class="vk-shop-detail__brief-short">
                                                                            <p>Thương hiệu: Chanel</p>
                                                                            <p>Mã sản phẩm: IP7_08951</p>
                                                                            <p>Tình trạng: Còn hàng</p>
                                                                        </div>

                                                                        <div class="vk-shop-detail__des">
                                                                            <p><strong>Mô tả:</strong></p>
                                                                            <p>CoCo Chanel được coi là một biểu tượng đáng ngưỡng mộ trong làng thời trang thế kỷ
                                                                                20. Những thiết kế Chanel luôn thuyết phục giới sành điệu, dù rằng giá của nó thường
                                                                                ..trên trời … Đặc biệt nước hoa Chanel được coi là thương hiệu nước hoa đẳng cấp
                                                                                nhất.</p>
                                                                        </div>

                                                                        <div class="vk-button">
                                                                            <div class="vk-calculator" data-calculator="true">
                                                                                <input type="number" name="name" value="1" min="1" class="form-control order-2">
                                                                                <button class="vk-calculator__button vk-btn vk-btn--minus order-1"
                                                                                        data-index="minus">
                                                                                    <i class="_icon fa fa-minus"></i>
                                                                                </button>
                                                                                <button class="vk-calculator__button vk-btn vk-btn--plus order-3" data-index="plus">
                                                                                    <i
                                                                                            class="_icon fa fa-plus"></i>
                                                                                </button>
                                                                            </div> <!--./calculator-->

                                                                            <a href="shopcart.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Mua ngay</a>
                                                                            <a href="shop-detail.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Chi tiết</a>
                                                                        </div>

                                                                    </div> <!--./vk-shop-detail__box-->

                                                                </div> <!--./vk-shop-detail__brief-->


                                                            </div><!-- /.vk-shop-detail__right -->

                                                        </div>
                                                    </div>
                                                    <!-- /.container -->
                                                </div> <!--./vk-shop-detail-->

                                            </div>
                                        </div>
                                    </div>
                                </div> <!--./vk-shop-modal__list-->

                            </div> <!--./vk-shop__left-inner-->


                        </div> <!--./vk-shop__left-inner-->
                    </div>
                    <!-- /.vk-page__left -->

                    <div class="vk-shop__right d-none d-lg-block">
                        <div class="vk-sidebar">
                            <div class="vk-ads">
                                <div class="vk-img vk-img--mw100">
                                    <img src="{{asset('public/images/ads/ads-1.jpg')}}" alt="">
                                </div>
                            </div>

                        </div> <!--./vk-sidebar-->
                    </div>
                    <!-- /.vk-page__right -->

                </div> <!--./vk-shop__box-->
            </div>
            <!-- /.container -->
        </div> <!--./vk-home__mid-->

        <div class="vk-home__banner">

            <div class="vk-banner">
                <div class="container">
                    <div class="vk-banner__content">
                        <div class="vk-img vk-img--cover">
                            <img src= "{{asset('public/images/banner/banner-2.jpg')}}" alt="">
                        </div>
                    </div> <!--./vk-banner__content-->
                </div> <!--./container-->
            </div><!--./vk-banner-->

        </div> <!--./vk-home__banner-->


        <div class="vk-home_bot">
            <div class="container">
                <div class="vk-shop__box vk-shop__box--mod-1">
                    <div class="vk-shop__left">
                        <div class="vk-shop__left-inner">

                            <div class="vk-shop__left-inner">
                                <div class="vk-shop__heading-box">
                                    <h1 class="vk-shop__heading text-uppercase">Sản phẩm bán chạy</h1>

                                </div>  <!--./vk-shop__heading-box-->

                                <div class="row vk-shop-item__list">


                                    <div class="col-sm-6 col-md-4 col-lg-3 _item">
                                        <div class="vk-shop-item__wrapper">
                                            <div class="vk-shop-item">
                                                <div class="vk-img vk-img--mw100">
                                                    <a href="#item0" title="Gift Set Gucci Bamboo Pour Femme" class="vk-img__link" data-toggle="modal" data-target="#item0">
                                                        <img src="images/shop/shop-item-1.jpg" alt="Gift Set Gucci Bamboo Pour Femme" class="vk-img__img">
                                                    </a>
                                                </div>

                                                <div class="vk-shop-item__brief">
                                                    <h3 class="vk-shop-item__title"><a href="shop-detail.html" title="Gift Set Gucci Bamboo Pour Femme">Gift Set Gucci Bamboo Pour Femme</a></h3>
                                                    <p class="vk-shop-item__price vk-text--red-1">5.490.000₫</p>
                                                </div>

                                            </div> <!--./vk-shop-item-->
                                        </div>
                                        <!-- /.vk-shop-item__wrapper -->

                                    </div>



                                    <div class="col-sm-6 col-md-4 col-lg-3 _item">
                                        <div class="vk-shop-item__wrapper">
                                            <div class="vk-shop-item">
                                                <div class="vk-img vk-img--mw100">
                                                    <a href="#item1" title="Gucci Bamboo For Women EDP" class="vk-img__link" data-toggle="modal" data-target="#item1">
                                                        <img src="images/shop/shop-item-2.jpg" alt="Gucci Bamboo For Women EDP" class="vk-img__img">
                                                    </a>
                                                </div>

                                                <div class="vk-shop-item__brief">
                                                    <h3 class="vk-shop-item__title"><a href="shop-detail.html" title="Gucci Bamboo For Women EDP">Gucci Bamboo For Women EDP</a></h3>
                                                    <p class="vk-shop-item__price vk-text--red-1">3.290.000₫</p>
                                                </div>

                                            </div> <!--./vk-shop-item-->
                                        </div>
                                        <!-- /.vk-shop-item__wrapper -->

                                    </div>



                                    <div class="col-sm-6 col-md-4 col-lg-3 _item">
                                        <div class="vk-shop-item__wrapper">
                                            <div class="vk-shop-item">
                                                <div class="vk-img vk-img--mw100">
                                                    <a href="#item2" title="Gucci Première For Women EDT" class="vk-img__link" data-toggle="modal" data-target="#item2">
                                                        <img src="images/shop/shop-item-3.jpg" alt="Gucci Première For Women EDT" class="vk-img__img">
                                                    </a>
                                                </div>

                                                <div class="vk-shop-item__brief">
                                                    <h3 class="vk-shop-item__title"><a href="shop-detail.html" title="Gucci Première For Women EDT">Gucci Première For Women EDT</a></h3>
                                                    <p class="vk-shop-item__price vk-text--red-1">2.890.000₫</p>
                                                </div>

                                            </div> <!--./vk-shop-item-->
                                        </div>
                                        <!-- /.vk-shop-item__wrapper -->

                                    </div>



                                    <div class="col-sm-6 col-md-4 col-lg-3 _item">
                                        <div class="vk-shop-item__wrapper">
                                            <div class="vk-shop-item">
                                                <div class="vk-img vk-img--mw100">
                                                    <a href="#item3" title="Made To Measure Pour Homme" class="vk-img__link" data-toggle="modal" data-target="#item3">
                                                        <img src="images/shop/shop-item-4.jpg" alt="Made To Measure Pour Homme" class="vk-img__img">
                                                    </a>
                                                </div>

                                                <div class="vk-shop-item__brief">
                                                    <h3 class="vk-shop-item__title"><a href="shop-detail.html" title="Made To Measure Pour Homme">Made To Measure Pour Homme</a></h3>
                                                    <p class="vk-shop-item__price vk-text--red-1">9.590.000₫</p>
                                                </div>

                                            </div> <!--./vk-shop-item-->
                                        </div>
                                        <!-- /.vk-shop-item__wrapper -->

                                    </div>



                                    <div class="col-sm-6 col-md-4 col-lg-3 _item">
                                        <div class="vk-shop-item__wrapper">
                                            <div class="vk-shop-item">
                                                <div class="vk-img vk-img--mw100">
                                                    <a href="#item4" title="Gucci By Gucci Pour Homme" class="vk-img__link" data-toggle="modal" data-target="#item4">
                                                        <img src="images/shop/shop-item-5.jpg" alt="Gucci By Gucci Pour Homme" class="vk-img__img">
                                                    </a>
                                                </div>

                                                <div class="vk-shop-item__brief">
                                                    <h3 class="vk-shop-item__title"><a href="shop-detail.html" title="Gucci By Gucci Pour Homme">Gucci By Gucci Pour Homme</a></h3>
                                                    <p class="vk-shop-item__price vk-text--red-1">4.050.000₫</p>
                                                </div>

                                            </div> <!--./vk-shop-item-->
                                        </div>
                                        <!-- /.vk-shop-item__wrapper -->

                                    </div>



                                    <div class="col-sm-6 col-md-4 col-lg-3 _item">
                                        <div class="vk-shop-item__wrapper">
                                            <div class="vk-shop-item">
                                                <div class="vk-img vk-img--mw100">
                                                    <a href="#item5" title="Flora By Gucci Gorgeous Gardenia" class="vk-img__link" data-toggle="modal" data-target="#item5">
                                                        <img src="images/shop/shop-item-6.jpg" alt="Flora By Gucci Gorgeous Gardenia" class="vk-img__img">
                                                    </a>
                                                </div>

                                                <div class="vk-shop-item__brief">
                                                    <h3 class="vk-shop-item__title"><a href="shop-detail.html" title="Flora By Gucci Gorgeous Gardenia">Flora By Gucci Gorgeous Gardenia</a></h3>
                                                    <p class="vk-shop-item__price vk-text--red-1">7.680.000₫</p>
                                                </div>

                                            </div> <!--./vk-shop-item-->
                                        </div>
                                        <!-- /.vk-shop-item__wrapper -->

                                    </div>



                                    <div class="col-sm-6 col-md-4 col-lg-3 _item">
                                        <div class="vk-shop-item__wrapper">
                                            <div class="vk-shop-item">
                                                <div class="vk-img vk-img--mw100">
                                                    <a href="#item6" title="Flora By Gucci Glorious Mandarin" class="vk-img__link" data-toggle="modal" data-target="#item6">
                                                        <img src="images/shop/shop-item-7.jpg" alt="Flora By Gucci Glorious Mandarin" class="vk-img__img">
                                                    </a>
                                                </div>

                                                <div class="vk-shop-item__brief">
                                                    <h3 class="vk-shop-item__title"><a href="shop-detail.html" title="Flora By Gucci Glorious Mandarin">Flora By Gucci Glorious Mandarin</a></h3>
                                                    <p class="vk-shop-item__price vk-text--red-1">1.350.000₫</p>
                                                </div>

                                            </div> <!--./vk-shop-item-->
                                        </div>
                                        <!-- /.vk-shop-item__wrapper -->

                                    </div>



                                    <div class="col-sm-6 col-md-4 col-lg-3 _item">
                                        <div class="vk-shop-item__wrapper">
                                            <div class="vk-shop-item">
                                                <div class="vk-img vk-img--mw100">
                                                    <a href="#item7" title="Gucci By Gucci For Women EDP" class="vk-img__link" data-toggle="modal" data-target="#item7">
                                                        <img src="images/shop/shop-item-8.jpg" alt="Gucci By Gucci For Women EDP" class="vk-img__img">
                                                    </a>
                                                </div>

                                                <div class="vk-shop-item__brief">
                                                    <h3 class="vk-shop-item__title"><a href="shop-detail.html" title="Gucci By Gucci For Women EDP">Gucci By Gucci For Women EDP</a></h3>
                                                    <p class="vk-shop-item__price vk-text--red-1">5.450.000₫</p>
                                                </div>

                                            </div> <!--./vk-shop-item-->
                                        </div>
                                        <!-- /.vk-shop-item__wrapper -->

                                    </div>

                                </div> <!--./row-->

                                <div class="vk-shop-modal__list">

                                    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="item0">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <button type="button" class="close vk-btn vk-btn--close" data-dismiss="modal" aria-label="Close">X</button>

                                                <div class="vk-shop-detail vk-shop-detail--quickview">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="vk-shop-detail__left col-lg-6">
                                                                <div class="vk-shop-detail__thumbnail-wrapper">
                                                                    <div class="vk-shop-detail__thumbnail">

                                                                        <div class="vk-slider__for" data-slider="slider-for">

                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>

                                                                        </div>

                                                                    </div> <!--./slider-for-->

                                                                    <div class="vk-shop-detail__thumbnail-list vk-slider" >

                                                                        <div class="vk-slider__nav" data-slider="slider-nav">
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                        </div>


                                                                    </div> <!--./slider-for-->
                                                                </div> <!--./vk-shop-detail__thumbnail-wrapper-->

                                                            </div> <!--./vk-shop-detail__left-->

                                                            <div class="vk-shop-detail__right col-lg-6">

                                                                <div class="vk-shop-detail__brief">
                                                                    <h1 class="vk-shop-detail__title">Made To Measure Pour Homme </h1>

                                                                    <div class="vk-shop-detail__box">

                                                                        <p class="vk-shop-detail__price vk-text--red-1">9.790.000₫ </p>

                                                                        <div class="vk-shop-detail__brief-short">
                                                                            <p>Thương hiệu: Chanel</p>
                                                                            <p>Mã sản phẩm: IP7_08951</p>
                                                                            <p>Tình trạng: Còn hàng</p>
                                                                        </div>

                                                                        <div class="vk-shop-detail__des">
                                                                            <p><strong>Mô tả:</strong></p>
                                                                            <p>CoCo Chanel được coi là một biểu tượng đáng ngưỡng mộ trong làng thời trang thế kỷ
                                                                                20. Những thiết kế Chanel luôn thuyết phục giới sành điệu, dù rằng giá của nó thường
                                                                                ..trên trời … Đặc biệt nước hoa Chanel được coi là thương hiệu nước hoa đẳng cấp
                                                                                nhất.</p>
                                                                        </div>

                                                                        <div class="vk-button">
                                                                            <div class="vk-calculator" data-calculator="true">
                                                                                <input type="number" name="name" value="1" min="1" class="form-control order-2">
                                                                                <button class="vk-calculator__button vk-btn vk-btn--minus order-1"
                                                                                        data-index="minus">
                                                                                    <i class="_icon fa fa-minus"></i>
                                                                                </button>
                                                                                <button class="vk-calculator__button vk-btn vk-btn--plus order-3" data-index="plus">
                                                                                    <i
                                                                                            class="_icon fa fa-plus"></i>
                                                                                </button>
                                                                            </div> <!--./calculator-->

                                                                            <a href="shopcart.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Mua ngay</a>
                                                                            <a href="shop-detail.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Chi tiết</a>
                                                                        </div>

                                                                    </div> <!--./vk-shop-detail__box-->

                                                                </div> <!--./vk-shop-detail__brief-->


                                                            </div><!-- /.vk-shop-detail__right -->

                                                        </div>
                                                    </div>
                                                    <!-- /.container -->
                                                </div> <!--./vk-shop-detail-->

                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="item1">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <button type="button" class="close vk-btn vk-btn--close" data-dismiss="modal" aria-label="Close">X</button>

                                                <div class="vk-shop-detail vk-shop-detail--quickview">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="vk-shop-detail__left col-lg-6">
                                                                <div class="vk-shop-detail__thumbnail-wrapper">
                                                                    <div class="vk-shop-detail__thumbnail">

                                                                        <div class="vk-slider__for" data-slider="slider-for">

                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>

                                                                        </div>

                                                                    </div> <!--./slider-for-->

                                                                    <div class="vk-shop-detail__thumbnail-list vk-slider" >

                                                                        <div class="vk-slider__nav" data-slider="slider-nav">
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                        </div>


                                                                    </div> <!--./slider-for-->
                                                                </div> <!--./vk-shop-detail__thumbnail-wrapper-->

                                                            </div> <!--./vk-shop-detail__left-->

                                                            <div class="vk-shop-detail__right col-lg-6">

                                                                <div class="vk-shop-detail__brief">
                                                                    <h1 class="vk-shop-detail__title">Made To Measure Pour Homme </h1>

                                                                    <div class="vk-shop-detail__box">

                                                                        <p class="vk-shop-detail__price vk-text--red-1">9.790.000₫ </p>

                                                                        <div class="vk-shop-detail__brief-short">
                                                                            <p>Thương hiệu: Chanel</p>
                                                                            <p>Mã sản phẩm: IP7_08951</p>
                                                                            <p>Tình trạng: Còn hàng</p>
                                                                        </div>

                                                                        <div class="vk-shop-detail__des">
                                                                            <p><strong>Mô tả:</strong></p>
                                                                            <p>CoCo Chanel được coi là một biểu tượng đáng ngưỡng mộ trong làng thời trang thế kỷ
                                                                                20. Những thiết kế Chanel luôn thuyết phục giới sành điệu, dù rằng giá của nó thường
                                                                                ..trên trời … Đặc biệt nước hoa Chanel được coi là thương hiệu nước hoa đẳng cấp
                                                                                nhất.</p>
                                                                        </div>

                                                                        <div class="vk-button">
                                                                            <div class="vk-calculator" data-calculator="true">
                                                                                <input type="number" name="name" value="1" min="1" class="form-control order-2">
                                                                                <button class="vk-calculator__button vk-btn vk-btn--minus order-1"
                                                                                        data-index="minus">
                                                                                    <i class="_icon fa fa-minus"></i>
                                                                                </button>
                                                                                <button class="vk-calculator__button vk-btn vk-btn--plus order-3" data-index="plus">
                                                                                    <i
                                                                                            class="_icon fa fa-plus"></i>
                                                                                </button>
                                                                            </div> <!--./calculator-->

                                                                            <a href="shopcart.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Mua ngay</a>
                                                                            <a href="shop-detail.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Chi tiết</a>
                                                                        </div>

                                                                    </div> <!--./vk-shop-detail__box-->

                                                                </div> <!--./vk-shop-detail__brief-->


                                                            </div><!-- /.vk-shop-detail__right -->

                                                        </div>
                                                    </div>
                                                    <!-- /.container -->
                                                </div> <!--./vk-shop-detail-->

                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="item2">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <button type="button" class="close vk-btn vk-btn--close" data-dismiss="modal" aria-label="Close">X</button>

                                                <div class="vk-shop-detail vk-shop-detail--quickview">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="vk-shop-detail__left col-lg-6">
                                                                <div class="vk-shop-detail__thumbnail-wrapper">
                                                                    <div class="vk-shop-detail__thumbnail">

                                                                        <div class="vk-slider__for" data-slider="slider-for">

                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>

                                                                        </div>

                                                                    </div> <!--./slider-for-->

                                                                    <div class="vk-shop-detail__thumbnail-list vk-slider" >

                                                                        <div class="vk-slider__nav" data-slider="slider-nav">
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                        </div>


                                                                    </div> <!--./slider-for-->
                                                                </div> <!--./vk-shop-detail__thumbnail-wrapper-->

                                                            </div> <!--./vk-shop-detail__left-->

                                                            <div class="vk-shop-detail__right col-lg-6">

                                                                <div class="vk-shop-detail__brief">
                                                                    <h1 class="vk-shop-detail__title">Made To Measure Pour Homme </h1>

                                                                    <div class="vk-shop-detail__box">

                                                                        <p class="vk-shop-detail__price vk-text--red-1">9.790.000₫ </p>

                                                                        <div class="vk-shop-detail__brief-short">
                                                                            <p>Thương hiệu: Chanel</p>
                                                                            <p>Mã sản phẩm: IP7_08951</p>
                                                                            <p>Tình trạng: Còn hàng</p>
                                                                        </div>

                                                                        <div class="vk-shop-detail__des">
                                                                            <p><strong>Mô tả:</strong></p>
                                                                            <p>CoCo Chanel được coi là một biểu tượng đáng ngưỡng mộ trong làng thời trang thế kỷ
                                                                                20. Những thiết kế Chanel luôn thuyết phục giới sành điệu, dù rằng giá của nó thường
                                                                                ..trên trời … Đặc biệt nước hoa Chanel được coi là thương hiệu nước hoa đẳng cấp
                                                                                nhất.</p>
                                                                        </div>

                                                                        <div class="vk-button">
                                                                            <div class="vk-calculator" data-calculator="true">
                                                                                <input type="number" name="name" value="1" min="1" class="form-control order-2">
                                                                                <button class="vk-calculator__button vk-btn vk-btn--minus order-1"
                                                                                        data-index="minus">
                                                                                    <i class="_icon fa fa-minus"></i>
                                                                                </button>
                                                                                <button class="vk-calculator__button vk-btn vk-btn--plus order-3" data-index="plus">
                                                                                    <i
                                                                                            class="_icon fa fa-plus"></i>
                                                                                </button>
                                                                            </div> <!--./calculator-->

                                                                            <a href="shopcart.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Mua ngay</a>
                                                                            <a href="shop-detail.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Chi tiết</a>
                                                                        </div>

                                                                    </div> <!--./vk-shop-detail__box-->

                                                                </div> <!--./vk-shop-detail__brief-->


                                                            </div><!-- /.vk-shop-detail__right -->

                                                        </div>
                                                    </div>
                                                    <!-- /.container -->
                                                </div> <!--./vk-shop-detail-->

                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="item3">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <button type="button" class="close vk-btn vk-btn--close" data-dismiss="modal" aria-label="Close">X</button>

                                                <div class="vk-shop-detail vk-shop-detail--quickview">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="vk-shop-detail__left col-lg-6">
                                                                <div class="vk-shop-detail__thumbnail-wrapper">
                                                                    <div class="vk-shop-detail__thumbnail">

                                                                        <div class="vk-slider__for" data-slider="slider-for">

                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>

                                                                        </div>

                                                                    </div> <!--./slider-for-->

                                                                    <div class="vk-shop-detail__thumbnail-list vk-slider" >

                                                                        <div class="vk-slider__nav" data-slider="slider-nav">
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                        </div>


                                                                    </div> <!--./slider-for-->
                                                                </div> <!--./vk-shop-detail__thumbnail-wrapper-->

                                                            </div> <!--./vk-shop-detail__left-->

                                                            <div class="vk-shop-detail__right col-lg-6">

                                                                <div class="vk-shop-detail__brief">
                                                                    <h1 class="vk-shop-detail__title">Made To Measure Pour Homme </h1>

                                                                    <div class="vk-shop-detail__box">

                                                                        <p class="vk-shop-detail__price vk-text--red-1">9.790.000₫ </p>

                                                                        <div class="vk-shop-detail__brief-short">
                                                                            <p>Thương hiệu: Chanel</p>
                                                                            <p>Mã sản phẩm: IP7_08951</p>
                                                                            <p>Tình trạng: Còn hàng</p>
                                                                        </div>

                                                                        <div class="vk-shop-detail__des">
                                                                            <p><strong>Mô tả:</strong></p>
                                                                            <p>CoCo Chanel được coi là một biểu tượng đáng ngưỡng mộ trong làng thời trang thế kỷ
                                                                                20. Những thiết kế Chanel luôn thuyết phục giới sành điệu, dù rằng giá của nó thường
                                                                                ..trên trời … Đặc biệt nước hoa Chanel được coi là thương hiệu nước hoa đẳng cấp
                                                                                nhất.</p>
                                                                        </div>

                                                                        <div class="vk-button">
                                                                            <div class="vk-calculator" data-calculator="true">
                                                                                <input type="number" name="name" value="1" min="1" class="form-control order-2">
                                                                                <button class="vk-calculator__button vk-btn vk-btn--minus order-1"
                                                                                        data-index="minus">
                                                                                    <i class="_icon fa fa-minus"></i>
                                                                                </button>
                                                                                <button class="vk-calculator__button vk-btn vk-btn--plus order-3" data-index="plus">
                                                                                    <i
                                                                                            class="_icon fa fa-plus"></i>
                                                                                </button>
                                                                            </div> <!--./calculator-->

                                                                            <a href="shopcart.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Mua ngay</a>
                                                                            <a href="shop-detail.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Chi tiết</a>
                                                                        </div>

                                                                    </div> <!--./vk-shop-detail__box-->

                                                                </div> <!--./vk-shop-detail__brief-->


                                                            </div><!-- /.vk-shop-detail__right -->

                                                        </div>
                                                    </div>
                                                    <!-- /.container -->
                                                </div> <!--./vk-shop-detail-->

                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="item4">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <button type="button" class="close vk-btn vk-btn--close" data-dismiss="modal" aria-label="Close">X</button>

                                                <div class="vk-shop-detail vk-shop-detail--quickview">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="vk-shop-detail__left col-lg-6">
                                                                <div class="vk-shop-detail__thumbnail-wrapper">
                                                                    <div class="vk-shop-detail__thumbnail">

                                                                        <div class="vk-slider__for" data-slider="slider-for">

                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>

                                                                        </div>

                                                                    </div> <!--./slider-for-->

                                                                    <div class="vk-shop-detail__thumbnail-list vk-slider" >

                                                                        <div class="vk-slider__nav" data-slider="slider-nav">
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                        </div>


                                                                    </div> <!--./slider-for-->
                                                                </div> <!--./vk-shop-detail__thumbnail-wrapper-->

                                                            </div> <!--./vk-shop-detail__left-->

                                                            <div class="vk-shop-detail__right col-lg-6">

                                                                <div class="vk-shop-detail__brief">
                                                                    <h1 class="vk-shop-detail__title">Made To Measure Pour Homme </h1>

                                                                    <div class="vk-shop-detail__box">

                                                                        <p class="vk-shop-detail__price vk-text--red-1">9.790.000₫ </p>

                                                                        <div class="vk-shop-detail__brief-short">
                                                                            <p>Thương hiệu: Chanel</p>
                                                                            <p>Mã sản phẩm: IP7_08951</p>
                                                                            <p>Tình trạng: Còn hàng</p>
                                                                        </div>

                                                                        <div class="vk-shop-detail__des">
                                                                            <p><strong>Mô tả:</strong></p>
                                                                            <p>CoCo Chanel được coi là một biểu tượng đáng ngưỡng mộ trong làng thời trang thế kỷ
                                                                                20. Những thiết kế Chanel luôn thuyết phục giới sành điệu, dù rằng giá của nó thường
                                                                                ..trên trời … Đặc biệt nước hoa Chanel được coi là thương hiệu nước hoa đẳng cấp
                                                                                nhất.</p>
                                                                        </div>

                                                                        <div class="vk-button">
                                                                            <div class="vk-calculator" data-calculator="true">
                                                                                <input type="number" name="name" value="1" min="1" class="form-control order-2">
                                                                                <button class="vk-calculator__button vk-btn vk-btn--minus order-1"
                                                                                        data-index="minus">
                                                                                    <i class="_icon fa fa-minus"></i>
                                                                                </button>
                                                                                <button class="vk-calculator__button vk-btn vk-btn--plus order-3" data-index="plus">
                                                                                    <i
                                                                                            class="_icon fa fa-plus"></i>
                                                                                </button>
                                                                            </div> <!--./calculator-->

                                                                            <a href="shopcart.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Mua ngay</a>
                                                                            <a href="shop-detail.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Chi tiết</a>
                                                                        </div>

                                                                    </div> <!--./vk-shop-detail__box-->

                                                                </div> <!--./vk-shop-detail__brief-->


                                                            </div><!-- /.vk-shop-detail__right -->

                                                        </div>
                                                    </div>
                                                    <!-- /.container -->
                                                </div> <!--./vk-shop-detail-->

                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="item5">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <button type="button" class="close vk-btn vk-btn--close" data-dismiss="modal" aria-label="Close">X</button>

                                                <div class="vk-shop-detail vk-shop-detail--quickview">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="vk-shop-detail__left col-lg-6">
                                                                <div class="vk-shop-detail__thumbnail-wrapper">
                                                                    <div class="vk-shop-detail__thumbnail">

                                                                        <div class="vk-slider__for" data-slider="slider-for">

                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>

                                                                        </div>

                                                                    </div> <!--./slider-for-->

                                                                    <div class="vk-shop-detail__thumbnail-list vk-slider" >

                                                                        <div class="vk-slider__nav" data-slider="slider-nav">
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                        </div>


                                                                    </div> <!--./slider-for-->
                                                                </div> <!--./vk-shop-detail__thumbnail-wrapper-->

                                                            </div> <!--./vk-shop-detail__left-->

                                                            <div class="vk-shop-detail__right col-lg-6">

                                                                <div class="vk-shop-detail__brief">
                                                                    <h1 class="vk-shop-detail__title">Made To Measure Pour Homme </h1>

                                                                    <div class="vk-shop-detail__box">

                                                                        <p class="vk-shop-detail__price vk-text--red-1">9.790.000₫ </p>

                                                                        <div class="vk-shop-detail__brief-short">
                                                                            <p>Thương hiệu: Chanel</p>
                                                                            <p>Mã sản phẩm: IP7_08951</p>
                                                                            <p>Tình trạng: Còn hàng</p>
                                                                        </div>

                                                                        <div class="vk-shop-detail__des">
                                                                            <p><strong>Mô tả:</strong></p>
                                                                            <p>CoCo Chanel được coi là một biểu tượng đáng ngưỡng mộ trong làng thời trang thế kỷ
                                                                                20. Những thiết kế Chanel luôn thuyết phục giới sành điệu, dù rằng giá của nó thường
                                                                                ..trên trời … Đặc biệt nước hoa Chanel được coi là thương hiệu nước hoa đẳng cấp
                                                                                nhất.</p>
                                                                        </div>

                                                                        <div class="vk-button">
                                                                            <div class="vk-calculator" data-calculator="true">
                                                                                <input type="number" name="name" value="1" min="1" class="form-control order-2">
                                                                                <button class="vk-calculator__button vk-btn vk-btn--minus order-1"
                                                                                        data-index="minus">
                                                                                    <i class="_icon fa fa-minus"></i>
                                                                                </button>
                                                                                <button class="vk-calculator__button vk-btn vk-btn--plus order-3" data-index="plus">
                                                                                    <i
                                                                                            class="_icon fa fa-plus"></i>
                                                                                </button>
                                                                            </div> <!--./calculator-->

                                                                            <a href="shopcart.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Mua ngay</a>
                                                                            <a href="shop-detail.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Chi tiết</a>
                                                                        </div>

                                                                    </div> <!--./vk-shop-detail__box-->

                                                                </div> <!--./vk-shop-detail__brief-->


                                                            </div><!-- /.vk-shop-detail__right -->

                                                        </div>
                                                    </div>
                                                    <!-- /.container -->
                                                </div> <!--./vk-shop-detail-->

                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="item6">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <button type="button" class="close vk-btn vk-btn--close" data-dismiss="modal" aria-label="Close">X</button>

                                                <div class="vk-shop-detail vk-shop-detail--quickview">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="vk-shop-detail__left col-lg-6">
                                                                <div class="vk-shop-detail__thumbnail-wrapper">
                                                                    <div class="vk-shop-detail__thumbnail">

                                                                        <div class="vk-slider__for" data-slider="slider-for">

                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>

                                                                        </div>

                                                                    </div> <!--./slider-for-->

                                                                    <div class="vk-shop-detail__thumbnail-list vk-slider" >

                                                                        <div class="vk-slider__nav" data-slider="slider-nav">
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                        </div>


                                                                    </div> <!--./slider-for-->
                                                                </div> <!--./vk-shop-detail__thumbnail-wrapper-->

                                                            </div> <!--./vk-shop-detail__left-->

                                                            <div class="vk-shop-detail__right col-lg-6">

                                                                <div class="vk-shop-detail__brief">
                                                                    <h1 class="vk-shop-detail__title">Made To Measure Pour Homme </h1>

                                                                    <div class="vk-shop-detail__box">

                                                                        <p class="vk-shop-detail__price vk-text--red-1">9.790.000₫ </p>

                                                                        <div class="vk-shop-detail__brief-short">
                                                                            <p>Thương hiệu: Chanel</p>
                                                                            <p>Mã sản phẩm: IP7_08951</p>
                                                                            <p>Tình trạng: Còn hàng</p>
                                                                        </div>

                                                                        <div class="vk-shop-detail__des">
                                                                            <p><strong>Mô tả:</strong></p>
                                                                            <p>CoCo Chanel được coi là một biểu tượng đáng ngưỡng mộ trong làng thời trang thế kỷ
                                                                                20. Những thiết kế Chanel luôn thuyết phục giới sành điệu, dù rằng giá của nó thường
                                                                                ..trên trời … Đặc biệt nước hoa Chanel được coi là thương hiệu nước hoa đẳng cấp
                                                                                nhất.</p>
                                                                        </div>

                                                                        <div class="vk-button">
                                                                            <div class="vk-calculator" data-calculator="true">
                                                                                <input type="number" name="name" value="1" min="1" class="form-control order-2">
                                                                                <button class="vk-calculator__button vk-btn vk-btn--minus order-1"
                                                                                        data-index="minus">
                                                                                    <i class="_icon fa fa-minus"></i>
                                                                                </button>
                                                                                <button class="vk-calculator__button vk-btn vk-btn--plus order-3" data-index="plus">
                                                                                    <i
                                                                                            class="_icon fa fa-plus"></i>
                                                                                </button>
                                                                            </div> <!--./calculator-->

                                                                            <a href="shopcart.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Mua ngay</a>
                                                                            <a href="shop-detail.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Chi tiết</a>
                                                                        </div>

                                                                    </div> <!--./vk-shop-detail__box-->

                                                                </div> <!--./vk-shop-detail__brief-->


                                                            </div><!-- /.vk-shop-detail__right -->

                                                        </div>
                                                    </div>
                                                    <!-- /.container -->
                                                </div> <!--./vk-shop-detail-->

                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="item7">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <button type="button" class="close vk-btn vk-btn--close" data-dismiss="modal" aria-label="Close">X</button>

                                                <div class="vk-shop-detail vk-shop-detail--quickview">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="vk-shop-detail__left col-lg-6">
                                                                <div class="vk-shop-detail__thumbnail-wrapper">
                                                                    <div class="vk-shop-detail__thumbnail">

                                                                        <div class="vk-slider__for" data-slider="slider-for">

                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>

                                                                        </div>

                                                                    </div> <!--./slider-for-->

                                                                    <div class="vk-shop-detail__thumbnail-list vk-slider" >

                                                                        <div class="vk-slider__nav" data-slider="slider-nav">
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                            <div class="vk-img vk-img--mw100">
                                                                                <img src="images/shop/shop-item-5.jpg" alt="">
                                                                            </div>
                                                                        </div>


                                                                    </div> <!--./slider-for-->
                                                                </div> <!--./vk-shop-detail__thumbnail-wrapper-->

                                                            </div> <!--./vk-shop-detail__left-->

                                                            <div class="vk-shop-detail__right col-lg-6">

                                                                <div class="vk-shop-detail__brief">
                                                                    <h1 class="vk-shop-detail__title">Made To Measure Pour Homme </h1>

                                                                    <div class="vk-shop-detail__box">

                                                                        <p class="vk-shop-detail__price vk-text--red-1">9.790.000₫ </p>

                                                                        <div class="vk-shop-detail__brief-short">
                                                                            <p>Thương hiệu: Chanel</p>
                                                                            <p>Mã sản phẩm: IP7_08951</p>
                                                                            <p>Tình trạng: Còn hàng</p>
                                                                        </div>

                                                                        <div class="vk-shop-detail__des">
                                                                            <p><strong>Mô tả:</strong></p>
                                                                            <p>CoCo Chanel được coi là một biểu tượng đáng ngưỡng mộ trong làng thời trang thế kỷ
                                                                                20. Những thiết kế Chanel luôn thuyết phục giới sành điệu, dù rằng giá của nó thường
                                                                                ..trên trời … Đặc biệt nước hoa Chanel được coi là thương hiệu nước hoa đẳng cấp
                                                                                nhất.</p>
                                                                        </div>

                                                                        <div class="vk-button">
                                                                            <div class="vk-calculator" data-calculator="true">
                                                                                <input type="number" name="name" value="1" min="1" class="form-control order-2">
                                                                                <button class="vk-calculator__button vk-btn vk-btn--minus order-1"
                                                                                        data-index="minus">
                                                                                    <i class="_icon fa fa-minus"></i>
                                                                                </button>
                                                                                <button class="vk-calculator__button vk-btn vk-btn--plus order-3" data-index="plus">
                                                                                    <i
                                                                                            class="_icon fa fa-plus"></i>
                                                                                </button>
                                                                            </div> <!--./calculator-->

                                                                            <a href="shopcart.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Mua ngay</a>
                                                                            <a href="shop-detail.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Chi tiết</a>
                                                                        </div>

                                                                    </div> <!--./vk-shop-detail__box-->

                                                                </div> <!--./vk-shop-detail__brief-->


                                                            </div><!-- /.vk-shop-detail__right -->

                                                        </div>
                                                    </div>
                                                    <!-- /.container -->
                                                </div> <!--./vk-shop-detail-->

                                            </div>
                                        </div>
                                    </div>
                                </div> <!--./vk-shop-modal__list-->

                            </div> <!--./vk-shop__left-inner-->


                        </div> <!--./vk-shop__left-inner-->
                    </div>
                    <!-- /.vk-page__left -->

                    <div class="vk-shop__right  d-none d-lg-block">
                        <div class="vk-sidebar">
                            <div class="vk-ads">
                                <div class="vk-img vk-img--mw100">
                                    <img src="images/ads/ads-2.jpg" alt="">
                                </div>
                            </div>

                        </div> <!--./vk-sidebar-->
                    </div>
                    <!-- /.vk-page__right -->

                </div> <!--./vk-shop__box-->
            </div>
            <!-- /.container -->
        </div> <!--./vk-home__bot-->

        <div class="vk-home__news">
            <div class="container">

                <div class="vk-news__box">
                    <h3 class="vk-news__heading vk-heading vk-heading--line-1 text-uppercase">Cẩm nang làm đẹp</h3>
                    <div class="vk-news__wrapper">
                        <div class="vk-news__list row vk-slider vk-slider--arrow-2" data-slider="news-home">
                            @foreach($tintuc_moinhat as $news)
                            <div class="col-lg-4 _item">
                                <div class="vk-news-item vk-news-item--grid-1">
                                    <div class="vk-img vk-img--cover">
                                        <a href="{{url('cam-nang/'.$news->alias.'.html')}}" title="{{$news->name}}" class="vk-img__link">
                                            <img src="{{asset('upload/news/'.$news->photo)}}" alt="{{$news->name}}" class="vk-img__img">
                                        </a>
                                    </div>

                                    <div class="vk-news-item__brief">
                                        <h3 class="vk-news-item__title"><a href="{{url('cam-nang/'.$news->alias.'.html')}}" title="{{$news->name}}">{{$news->name}}</a></h3>
                                    </div>
                                </div> <!--./vk-news-item-->
                            </div>
                            @endforeach
                            
                        </div>
                    </div> <!--./vk-news__wrapper-->

                </div> <!--./vk-news__box-->

            </div>
            <!-- /.container -->
        </div>

        <div class="vk-home__service">
            <div class="container">
                <div class="row vk-service__list">

                    <div class="col-lg-3 _item">
                        <div class="vk-service">
                            <div class="vk-service__icon vk-img vk-img--mw100">
                                <img src="{{asset('public/images/icon/icon-1.png')}}" alt="">
                            </div>
                            <p class="vk-service__text">
                                Giao hàng và thanh toán tại nhà trên toàn quốc.
                            </p>
                        </div>
                    </div>


                    <div class="col-lg-3 _item">
                        <div class="vk-service">
                            <div class="vk-service__icon vk-img vk-img--mw100">
                                <img src="{{asset('public/images/icon/icon-2.png')}}" alt="">
                            </div>
                            <p class="vk-service__text">
                                Đổi mới trong vòng 7 ngày, trả hàng trong vòng 15 ngày..
                            </p>
                        </div>
                    </div>


                    <div class="col-lg-3 _item">
                        <div class="vk-service">
                            <div class="vk-service__icon vk-img vk-img--mw100">
                                <img src="{{asset('public/images/icon/icon-3.png')}}" alt="">
                            </div>
                            <p class="vk-service__text">
                                Hãy tham gia và trở thành cộng tác viên bán hàng.
                            </p>
                        </div>
                    </div>


                    <div class="col-lg-3 _item">
                        <div class="vk-service">
                            <div class="vk-service__icon vk-img vk-img--mw100">
                                <img src="{{asset('public/images/icon/icon-4.png')}}" alt="">
                            </div>
                            <p class="vk-service__text">
                                TƯ VẤN MIỄN PHÍ 24/7 <br><span class="vk-text--red-1"> Hotline : <a href="callto:0934 55 88 90" title="">0934 55 88 90</a></span>.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.container -->
        </div>
    </div> <!--./vk-home-->
</section>
<!--./content-->
@endsection
