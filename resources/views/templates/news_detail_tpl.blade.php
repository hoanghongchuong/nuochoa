@extends('index')
@section('content')

<!-- <section class="banner">
    <div class="container-flush">
        <img src="{{asset('public/images/2_03.png')}}" alt="" title="" class="img" />
    </div>
    <div class="container">
        <ul class="breadcumb">
            <li><a href="index.html" title="{{url('')}}">Trang chủ</a></li>
            <li><a href="news.html" title="{{url('tin-tuc')}}">Tin tức</a></li>
            <li><a href="{{url('tin-tuc/'.$news_detail->alias.'.html')}}" title="">{{$news_detail->name}}</a></li>
        </ul>
    </div>
</section>

<section class="ndetail">
    <div class="container ndetail-content">
        <h1 class="ndetail-tit"><a href="news-detail.html" title="">{{$news_detail->name}}</a></h1>
        <div class="like-facbook"></div>
        {!! $news_detail->content !!}
    </div>
</section>

<section class="ndetail-re">
    <h2 class="text-uppercase text-center ndetail-re-tit"><span><strong>Tin tức khác</strong></span></h2>
    <div class="ndetail-re-wrap">
        <div class="container">
            <div class="owl-carousel owl-theme carousel_hot carousel-ndetail">
                @foreach($baiviet_khac as $item)
                <div class="text-center item carousel_hot-item">
                    <a href="{{url('tin-tuc/'.$item->alias.'.html')}}" title=""><img src="{{asset('upload/news/'.$item->photo)}}" alt="" title=""></a>
                    <div class="text-center carousel_content">
                        <h3 class=" pro-name"><a href="{{url('tin-tuc/'.$item->alias.'.html')}}" title=""><strong>{{$item->name}}</strong></a></h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    
</section> -->
<section class="vk-content">
    <div class="vk-breadcrumb">
        <nav class="container">
            <ul class="vk-list vk-list--inline vk-list__breadcrumb">
                <li class="vk-list__item"><a href="{{url('')}}">Trang chủ</a></li>

                <li class="vk-list__item"> <a href={{url('cam-nang')}}">Cẩm nang</a></li>
                <li class="vk-list__item">{{$news_detail->name}}</li>
            </ul>
        </nav>
    </div>
    <!--./vk-breadcrumb-->

    <div class="vk-banner">
        <div class="container">
            <div class="vk-banner__content">
                <div class="vk-img vk-img--cover">
                    <img src= "{{asset('public/images/banner/banner-1.jpg')}}" alt="">
                </div>
            </div> <!--./vk-banner__content-->
        </div> <!--./container-->
    </div><!--./vk-banner-->

    <div class="vk-page vk-page--news">

        <div class="container">

            <div class="vk-news-detail">
                <h1 class="vk-news-detail__title">{{$news_detail->name}}</h1>
                <p class="vk-news-detail__published">{{$news_detail->created_at}}</p>

                <div class="vk-news-detail__content">                    

                </div> <!--./vk-news-detail__content-->
            </div> <!--./vk-news-detail-->

        </div> <!--./container-->

        <div class="vk-shop-related vk-news--related">

            <div class="container">
                <h3 class="vk-shop-related__heading vk-heading vk-heading--line text-uppercase"><span>Bài viết liên quan</span></h3>

                <div class="row vk-news__list" data-slider="news-related">
                    <?php $newsmore = DB::table('news')->where('cate_id',$news_detail->cate_id)->where('id','<>',$news_detail->id)->get(); ?>
                    @foreach($newsmore as $item)
                    <div class="col-lg-4 _item">
                        <div class="vk-news-item vk-news-item--grid">
                            <div class="vk-img vk-img--cover">
                                <a href="{{url('cam-nang/'.$item->alias.'.html')}}" title="{{$item->name}}">
                                    <img src="{{asset('upload/news/'.$item->photo)}}" alt="{{$item->name}}" class="vk-img__img">
                                </a>
                            </div>

                            <div class="vk-news-item__brief">
                                <h3 class="vk-news-item__title"><a href="{{url('cam-nang/'.$item->alias.'.html')}}" title="Giải đáp 11 thắc mắc về chăm sóc tóc">{{$item->name}}</a></h3>
                            </div>
                        </div> <!--./vk-news-item-->
                    </div>
                    @endforeach    
                </div>

            </div>
            <!-- /.container -->

        </div>



    </div> <!--./vk-page-->

</section>
@endsection
