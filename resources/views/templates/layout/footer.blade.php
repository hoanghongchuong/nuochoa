<?php
    $setting = Cache::get('setting');
    $chinhanh = Cache::get('chinhanh');
?>

<footer class="vk-footer">
    <div class="vk-footer__top">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <div class="vk-footer__item">
                        <h3 class="vk-footer__heading text-uppercase">Thông tin công ty</h3>
                        <ul class="vk-list vk-list--footer">
                            <li class="vk-list__item"><a href="{{url('cam-nang')}}" title="">Tin tức</a></li>
                            <li class="vk-list__item"><a href="#" title="">Hệ thống cửa hàng</a></li>
                            <li class="vk-list__item"><a href="#" title="">Tuyển dụng</a></li>
                        </ul>
                    </div>
                </div> <!--./col-lg-->
                <div class="col-lg">
                    <div class="vk-footer__item">
                        <h3 class="vk-footer__heading text-uppercase">Hỗ trợ khách hàng</h3>
                        <ul class="vk-list vk-list--footer">
                            <li class="vk-list__item"><a href="#" title="">Liên hệ và góp ý</a></li>
                            <li class="vk-list__item"><a href="#" title="">Hướng dẫn mua hàng online</a></li>
                            <li class="vk-list__item"><a href="#" title="">Hướng dẫn sử dụng sản phẩm</a></li>
                        </ul>
                    </div>
                </div> <!--./col-lg-->
                <div class="col-lg">
                    <div class="vk-footer__item">
                        <h3 class="vk-footer__heading text-uppercase">Chính sách mua hàng</h3>
                        <ul class="vk-list vk-list--footer">
                            <li class="vk-list__item"><a href="#" title="">Chính sách bảo hành - đổi trả</a></li>
                            <li class="vk-list__item"><a href="#" title="">chính sách hội viên</a></li>
                            <li class="vk-list__item"><a href="#" title="">Giao hàng - thanh toán</a></li>
                        </ul>
                    </div>
                </div> <!--./col-lg-->
                <div class="col-lg">
                    <div class="vk-footer__item">
                        <h3 class="vk-footer__heading text-uppercase">Liên hệ với chúng tôi</h3>
                        <ul class="vk-list vk-list--footer">
                            <li class="vk-list__item">Địa chỉ: {{$setting->address}}</li>
                            <li class="vk-list__item">Điện thoại : <a href="callto:{{$setting->phone}}" title="">{{$setting->phone}}</a></li>
                            <li class="vk-list__item">
                                <div class="vk-img vk-img--mw100 justify-content-start">
                                    <img src="{{asset('public/images/other/copyright.png')}}" alt="">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> <!--./col-lg-->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <div class="vk-footer__bot">
        <div class="container">
            <div class="vk-footer__bot-content align-items-center  justify-content-center text-center">
                Copyright © 2017. GCO
            </div>

        </div>
    </div> <!--./vk-footer__mid-->
</footer>
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=124844007858325";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>