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
                                <h1 class="vk-shop__heading text-uppercase">Sản phẩm mới nhất</h1>
                            </div>  <!--./vk-shop__heading-box-->
                            <div class="row vk-shop-item__list">
                            @foreach($news_product as $key=>$newsProduct)
                                <div class="col-sm-6 col-md-4 col-lg-3 _item">
                                    <div class="vk-shop-item__wrapper">
                                        <div class="vk-shop-item">
                                            <div class="vk-img vk-img--mw100">
                                                <a href="#item{{$key}}" title="{{$newsProduct->name}}" class="vk-img__link" data-toggle="modal" data-target="#item{{$key}}">
                                                    <img src="{{asset('upload/product/'.$newsProduct->photo)}}" alt="{{$newsProduct->name}}" class="vk-img__img">
                                                </a>
                                            </div>

                                            <div class="vk-shop-item__brief">
                                                <h3 class="vk-shop-item__title"><a href="{{url('san-pham/'.$newsProduct->alias.'.html')}}" title="{{$newsProduct->name}}">{{$newsProduct->name}}</a></h3>
                                                <p class="vk-shop-item__price vk-text--red-1">{{number_format($newsProduct->price)}} ₫</p>
                                            </div>

                                        </div> <!--./vk-shop-item-->
                                    </div>
                                    <!-- /.vk-shop-item__wrapper -->
                                </div>
                            @endforeach
                            </div> <!--./row-->

                            <div class="vk-shop-modal__list">
                                 @foreach($news_product as $key=>$p)
                                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="item{{$key}}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <button type="button" class="close vk-btn vk-btn--close" data-dismiss="modal" aria-label="Close">X</button>

                                            <div class="vk-shop-detail vk-shop-detail--quickview">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="vk-shop-detail__left col-lg-6">
                                                            <div class="vk-shop-detail__thumbnail-wrapper">
                                                                <div class="vk-shop-detail__thumbnail">
                                                                
                                                                <?php $product_detail = DB::table('products')->select()->where('status',1)->where('alias',$p->alias)->get()->first();
                                                                    $album_hinh = DB::table('images')->select()
                                                                    ->where('product_id',$product_detail->id)
                                                                    ->orderby('id','asc')->get();
                                                                ?>
                                                                    <div class="vk-slider__for" data-slider="slider-for">
                                                                     @foreach($album_hinh as $album)
                                                                        <div class="vk-img vk-img--mw100">
                                                                            <img src="{{asset('upload/hasp/'.$album->photo)}}" alt="">
                                                                        </div>
                                                                     @endforeach       
                                                                    </div>

                                                                </div> 

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
                                                                <h1 class="vk-shop-detail__title">{{$p->name}} </h1>

                                                                <div class="vk-shop-detail__box">

                                                                    <p class="vk-shop-detail__price vk-text--red-1">{{number_format($p->price)}} ₫ </p>

                                                                    <div class="vk-shop-detail__brief-short">
                                                                    <?php $thuonghieu = DB::table('thuonghieu')->select('name')->where('id',$p->thuonghieu_id)->first(); ?>
                                                                        <p>Thương hiệu: {{$thuonghieu->name}}</p>
                                                                        <p>Mã sản phẩm: {{$p->code}}</p>
                                                                        <p>Tình trạng: Còn hàng</p>
                                                                    </div>

                                                                    <div class="vk-shop-detail__des">
                                                                        <p><strong>Mô tả:</strong></p>
                                                                        {!! $p->mota !!}
                                                                    </div>

                                                                    <div class="vk-button">
                                                                        <form action="{{ route('addProductToCart') }}" method="post">
                                                                            {!! csrf_field() !!}
                                                                            <input type="hidden" name="product_id" value="{{ $product_detail->id }}">
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

                                                                           <!--  <a href="shopcart.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Mua ngay</a> -->
                                                                            <button type="submit" style="margin-top: 4px;" class="vk-btn vk-btn--now text-uppercase _inverse">Mua ngay</button>
                                                                        </form>
                                                                        <a href="{{url('san-pham/'.$p->alias.'.html')}}" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Chi tiết</a>
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
                                @endforeach
                                
                            </div> <!--./vk-shop-modal__list-->

                        </div> <!--./vk-shop__left-inner-->


                    </div> <!--./vk-shop__left-inner-->
                </div>
                <!-- /.vk-page__left -->

                <div class="vk-shop__right d-none d-lg-block">
                    <div class="vk-sidebar">
                        <div class="vk-ads">
                            <div class="vk-img vk-img--mw100">
                                <img src="{{asset('upload/banner/'.$banner_sidebar[0]->image)}}" alt="">
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
                        <?php $qc = DB::table('banner_content')->where('position',1)->first(); ?>
                        <img src= "{{asset('upload/banner/'.$qc->image)}}" alt="">
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
                                @foreach($hot_product as $key=>$item)
                                <div class="col-sm-6 col-md-4 col-lg-3 _item">
                                    <div class="vk-shop-item__wrapper">
                                        <div class="vk-shop-item">
                                            <div class="vk-img vk-img--mw100">
                                                <a href="#item{{$key}}" title="{{$item->name}}" class="vk-img__link" data-toggle="modal" data-target="#items{{$key}}">
                                                    <img src="{{asset('upload/product/'.$item->photo)}}" alt="{{$item->name}}" class="vk-img__img">
                                                </a>
                                            </div>

                                            <div class="vk-shop-item__brief">
                                                <h3 class="vk-shop-item__title"><a href="{{url('san-pham/'.$item->alias.'.html')}}" title="{{$item->name}}">{{$item->name}}</a></h3>
                                                <p class="vk-shop-item__price vk-text--red-1">{{number_format($item->price)}} ₫</p>
                                            </div>

                                        </div> <!--./vk-shop-item-->
                                    </div>
                                    <!-- /.vk-shop-item__wrapper -->
                                </div>
                                @endforeach

                            </div> <!--./row-->

                            <div class="vk-shop-modal__list">
                            @foreach($hot_product as $k=>$items)
                                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="items{{$k}}">
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
                                                                    <?php $product_detail = DB::table('products')->select()->where('status',1)->where('alias',$items->alias)->get()->first();
                                                                        $album_hinh = DB::table('images')->select()
                                                                        ->where('product_id',$product_detail->id)
                                                                        ->orderby('id','asc')->get();
                                                                    ?>      
                                                                    @foreach($album_hinh as $album)                                                                      
                                                                        <div class="vk-img vk-img--mw100">
                                                                            <img src="{{asset(
                                                                            'upload/hasp/'.$album->photo)}}" alt="">
                                                                        </div>
                                                                    @endforeach()    
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
                                                                <h1 class="vk-shop-detail__title">{{$items->name}} </h1>

                                                                <div class="vk-shop-detail__box">

                                                                    <p class="vk-shop-detail__price vk-text--red-1">{{number_format($items->price)}} ₫ </p>

                                                                    <div class="vk-shop-detail__brief-short">
                                                                        <?php $thuonghieu = DB::table('thuonghieu')->select('name')->where('id',$items->thuonghieu_id)->first(); ?>
                                                                        <p>Thương hiệu: {{$thuonghieu->name}}</p>
                                                                        <p>Mã sản phẩm: {{$items->code}}</p>
                                                                        <p>Tình trạng: Còn hàng</p>
                                                                    </div>

                                                                    <div class="vk-shop-detail__des">
                                                                        <p><strong>Mô tả:</strong></p>
                                                                        {!! $items->mota !!}
                                                                    </div>

                                                                    <div class="vk-button">
                                                                      <form action="{{ route('addProductToCart') }}" method="post">
                                                                            {!! csrf_field() !!}
                                                                            <input type="hidden" name="product_id" value="{{ $product_detail->id }}">
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

                                                                           <!--  <a href="shopcart.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Mua ngay</a> -->
                                                                            <button type="submit" style="margin-top: 4px;" class="vk-btn vk-btn--now text-uppercase _inverse">Mua ngay</button>
                                                                        </form>
                                                                        <a href="{{url('san-pham/'.$items->alias.'.html')}}" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Chi tiết</a>
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
                            @endforeach
                               
                            </div> <!--./vk-shop-modal__list-->

                        </div> <!--./vk-shop__left-inner-->


                    </div> <!--./vk-shop__left-inner-->
                </div>
                <!-- /.vk-page__left -->

                <div class="vk-shop__right  d-none d-lg-block">
                    <div class="vk-sidebar">
                        <div class="vk-ads">
                            <div class="vk-img vk-img--mw100">
                                <img src="{{asset('upload/banner/'.$banner_sidebar[1]->image)}}" alt="">
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
