@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<section class="vk-content">
    <div class="vk-breadcrumb">
        <nav class="container">
            <ul class="vk-list vk-list--inline vk-list__breadcrumb">
                <li class="vk-list__item"><a href="{{url('')}}">Trang chủ</a></li>
                <li class="vk-list__item">Cẩm nang</li>
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
            @foreach($cateNews as $cateNew)
            <div class="vk-news__box">
                <div class="vk-news__heading-box">
                    <h3 class="vk-news__heading text-uppercase">{{$cateNew->name}}</h3>
                    <div class="vk-news__pagination">
                        <a href="#" title="prev" class="_left"><i class="_icon fa fa-caret-left"></i></a>
                        <a href="#" title="prev" class="_right"><i class="_icon fa fa-caret-right"></i></a>
                    </div>
                </div>
                <div class="vk-news__wrapper">
                    <div class="row no-gutters vk-news__list">
                        <div class="col-12 _item">
                            <?php $news = DB::table('news')->where('cate_id',$cateNew->id)->get(); ?>
                            @foreach($news as $news)
                            <div class="vk-news-item">
                                <div class="vk-img vk-img--cover">
                                    <a href="{{url('cam-nang/'.$news->alias.'.html')}}" title="" class="vk-img__link">
                                    <img src="{{asset('upload/news/'.$news->photo)}}" alt="Bí kíp đẹp - “vũ khí bí mật" của các cô gái" class="vk-img__img">
                                    </a>
                                </div>

                                <div class="vk-news-item__brief">
                                    <h3 class="vk-news-item__title"><a href="{{url('cam-nang/'.$news->alias.'.html')}}" title="Bí kíp đẹp - “vũ khí bí mật" của các cô gái">{{$news->name}}</a></h3>
                                    <p class="vk-news-item__published">{{$news->created_at}}</p>
                                    <p class="vk-news-item__text">{{$news->mota}}</p>
                                </div>
                            </div>
                            @endforeach
                             <!--./vk-news-item-->
                        </div>

                    </div> <!--.row-->
                </div> <!--./vk-news__wrapper-->

            </div> <!--./vk-news__box-->
            @endforeach
             <!--./vk-news__box-->

        </div>
        <!-- /.container -->

    </div> <!--./vk-page-->
</section>
@endsection
