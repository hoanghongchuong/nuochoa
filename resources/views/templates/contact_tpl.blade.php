@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    // $chinhanh = Cache::get('chinhanh');

?>

<section class="vk-content">

    <div class="vk-breadcrumb">
        <nav class="container">
            <ul class="vk-list vk-list--inline vk-list__breadcrumb">
                <li class="vk-list__item"><a href="{{url('')}}">Trang chủ</a></li>

                <li class="vk-list__item">liên hệ</li>
            </ul>
        </nav>
    </div>
    <!--./vk-breadcrumb-->
    <div class="vk-page vk-page--contact">
        <div class="container">
            <div class="vk-contact">
                <div class="row justify-content-between">
                    <div class="col-lg-4">
                        <div class="vk-contact-item__list">
                        @foreach($chinhanhx as $chinhanh)
                            <div class="vk-contact-item">
                                <h3 class="vk-contact-item__title">{{$chinhanh->name}}</h3>
                                <p>Địa chỉ: {{$chinhanh->address}}</p>
                                <p>Điện thoại : <a href="{{$chinhanh->phone}}" title="">{{$chinhanh->phone}}</a></p>
                            </div> <!--./vk-contact-item-->
                        @endforeach
                            

                        </div><!-- ./list-->
                    </div> <!--./col-->

                    <div class="col-lg-7">
                        <h1 class="vk-contact__heading text-uppercase">LIÊN HỆ VỚI CHÚNG TÔI</h1>
                        <div class="vk-contact__form">
                            <form action="{{ route('postContact') }}" method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="txtName" required="required" placeholder="Tên">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" name="txtEmail" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <textarea name="txtContent" id="" cols="" rows="" required="required" class="form-control" placeholder="Nội dung"></textarea>
                                    <!-- /# -->
                                </div>
                                <div class="vk-button text-right">
                                    <button class="vk-btn vk-btn--submit text-uppercase">Gửi</button>
                                </div>
                            </form>
                        </div>
                    </div> <!--./col-->
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.container -->

        <div class="vk-contact__map">
           <div class="map_container">
                {!!$setting->iframemap!!}
            </div>
        </div> <!--./map-->

    </div> <!--./vk-page-->
</section>
@endsection
