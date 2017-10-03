@extends('index')
@section('content')

   <section class="vk-content">

        <div class="vk-breadcrumb">
            <nav class="container">
                <ul class="vk-list vk-list--inline vk-list__breadcrumb">
                    <li class="vk-list__item"><a href="index.html">Trang chủ</a></li>

                    <li class="vk-list__item"> <a href="shop.html">Danh mục sản phẩm</a></li>

                    <li class="vk-list__item">Nước hoa</li>
                </ul>
            </nav>
        </div>
        <!--./vk-breadcrumb-->

        <div class="vk-banner">
            <div class="container">
                <div class="vk-banner__content">
                    <div class="vk-img vk-img--cover">
                        <img src= "images/banner/banner-1.jpg" alt="">
                    </div>
                </div> <!--./vk-banner__content-->
            </div> <!--./container-->
        </div><!--./vk-banner-->

        <div class="vk-page vk-page--shop">
            <div class="container">
                <div class="vk-shop-detail">
                    <div class="vk-shop-detail__top row">
                        <div class="vk-shop-detail__left col-lg-6">
                            <div class="vk-shop-detail__thumbnail-wrapper">
                                <div class="vk-shop-detail__thumbnail">

                                    <div class="vk-slider__for" data-slider="slider-for">

                                         @foreach($album_hinh as $album)
                                            <div class="vk-img vk-img--mw100">
                                                <img src="{{asset('upload/hasp/'.$album->photo)}}" alt="">
                                            </div>
                                        @endforeach 
                                        
                                    </div>

                                </div> <!--./slider-for-->

                                <div class="vk-shop-detail__thumbnail-list vk-slider" >

                                    <div class="vk-slider__nav" data-slider="slider-nav">
                                         @foreach($album_hinh as $album)
                                            <div class="vk-img vk-img--mw100">
                                                <img src="{{asset('upload/hasp/'.$album->photo)}}" alt="">
                                            </div>
                                        @endforeach 
                                    </div>


                                </div> <!--./slider-for-->
                            </div> <!--./vk-shop-detail__thumbnail-wrapper-->

                        </div> <!--./vk-shop-detail__left-->

                        <div class="vk-shop-detail__right col-lg-6">

                            <div class="vk-shop-detail__brief">
                                <h1 class="vk-shop-detail__title">{{$product_detail->name}} </h1>

                                <div class="vk-shop-detail__box">

                                    <p class="vk-shop-detail__price vk-text--yellow-1">{{number_format($product_detail->price)}} ₫ </p>

                                    <div class="vk-shop-detail__brief-short">
                                        <p>Thương hiệu: Chanel</p>
                                        <p>Mã sản phẩm: {{$product_detail->code}}</p>
                                        <p>Tình trạng: Còn hàng</p>
                                    </div>

                                    <div class="vk-shop-detail__des">
                                        <p><strong>Mô tả:</strong></p>
                                        <p>{{$product_detail->mota}}</p>
                                    </div>
                                    <form action="{{ route('addProductToCart') }}" method="post">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="product_id" value="{{ $product_detail->id }}">
                                        <div class="vk-button">
                                            <div class="vk-calculator" data-calculator="true">
                                                <input type="number" name="product_numb" id="soluong" value="1" min="1" class="form-control order-2">
                                                <button class="vk-calculator__button vk-btn vk-btn--minus order-1"
                                                        data-index="minus">
                                                    <i class="_icon fa fa-minus"></i>
                                                </button>
                                                <button class="vk-calculator__button vk-btn vk-btn--plus order-3" data-index="plus">
                                                    <i class="_icon fa fa-plus"></i>
                                                </button>
                                            </div> <!--./calculator-->

                                            <!-- <a href="#"  title="" class="vk-btn vk-btn--now text-uppercase">Mua ngay</a> -->
                                            <button type="submit">Mua ngay</button>
                                        </div>
                                    </form>
                                </div> <!--./vk-shop-detail__box-->

                            </div> <!--./vk-shop-detail__brief-->


                        </div><!-- /.vk-shop-detail__right -->
                    </div> <!--./vk-shop-detail__top-->

                    <div class="vk-shop-detail__bottom">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                   aria-controls="home" aria-expanded="true">Thông tin sản phẩm </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                   aria-controls="profile">Đánh giá</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                {{$product_detail->content}}
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                        </div>

                    </div> <!--./vk-shop-detail__bottom-->


                </div> <!--./vk-shop-detail-->
                <!-- /.row -->
            </div>
            <!-- /.container -->

            <div class="vk-shop-related">

                <div class="container">
                    <h3 class="vk-shop-related__heading vk-heading vk-heading--line text-uppercase"><span>Sản phẩm cùng loại</span></h3>
                    <div class="row vk-slider vk-slider--arrow-1 vk-shop-item__list" data-slider="related">



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



                        <div class="col-sm-6 col-md-4 col-lg-3 _item">
                            <div class="vk-shop-item__wrapper">
                                <div class="vk-shop-item">
                                    <div class="vk-img vk-img--mw100">
                                        <a href="#item8" title="Gucci By Gucci Pour Homme" class="vk-img__link" data-toggle="modal" data-target="#item8">
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
                                        <a href="#item9" title="Flora By Gucci Gorgeous Gardenia" class="vk-img__link" data-toggle="modal" data-target="#item9">
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
                                        <a href="#item10" title="Flora By Gucci Glorious Mandarin" class="vk-img__link" data-toggle="modal" data-target="#item10">
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
                                        <a href="#item11" title="Gucci By Gucci For Women EDP" class="vk-img__link" data-toggle="modal" data-target="#item11">
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

                    </div>

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

                        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="item8">
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

                        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="item9">
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

                        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="item10">
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

                        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="item11">
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
                </div>
                <!-- /.container -->

            </div>
        </div> <!--./vk-page-->

    </section>
@endsection
