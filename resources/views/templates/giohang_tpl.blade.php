@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<section class="vk-content">

    <div class="vk-page vk-page--shopcart">
        <div class="vk-shopcart">
            <div class="container">
                <h1 class="vk-shopcart__heading text-uppercase">Giỏ hàng</h1>
                
                <table class="vk-table vk-shopcart__table">
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Thao tác</th>
                    </tr>

                    <tr>
                        <td>
                            <div class="vk-shopcart-item">

                                <div class="vk-img vk-img--mw100">
                                    <a href="shop-detail.html" title="" class="vk-img__link">
                                        <img src="images/shop/shop-item-1.jpg" alt="" class="vk-img__img">
                                    </a>
                                </div>

                                <div class="vk-shopcart-item__brief">
                                    <h3 class="vk-shopcart-item__title"><a href="shop-detail.html" title="">Gucci Bamboo
                                        For Women EDP</a></h3>
                                </div>

                            </div> <!--./vk-shopcart-item-->
                        </td>
                        <td>
                            <div class="vk-shopcart__quantity">
                                <span class="d-lg-none">Số lượng: </span>
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
                            </div> <!--./vk-shopcart__quantity-->

                        </td>
                        <td>
                            <span class="vk-shopcart__price vk-text--yellow-1"><span class="d-lg-none">Thành tiền: </span>18.790.000đ</span>
                        </td>
                        <td>
                            <div class="vk-button">
                                <a href="#" class="vk-btn vk-btn--del">Xóa</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="vk-shopcart-item">

                                <div class="vk-img vk-img--mw100">
                                    <a href="shop-detail.html" title="" class="vk-img__link">
                                        <img src="images/shop/shop-item-2.jpg" alt="" class="vk-img__img">
                                    </a>
                                </div>

                                <div class="vk-shopcart-item__brief">
                                    <h3 class="vk-shopcart-item__title"><a href="shop-detail.html" title="">Gucci Bamboo
                                        For Women EDP</a></h3>
                                </div>

                            </div> <!--./vk-shopcart-item-->
                        </td>
                        <td>
                            <div class="vk-shopcart__quantity">
                                <span class="d-lg-none">Số lượng: </span>
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
                            </div> <!--./vk-shopcart__quantity-->

                        </td>
                        <td>
                            <span class="vk-shopcart__price vk-text--yellow-1"><span class="d-lg-none">Thành tiền: </span>18.790.000đ</span>
                        </td>
                        <td>
                            <div class="vk-button">
                                <a href="#" class="vk-btn vk-btn--del">Xóa</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="vk-shopcart-item">

                                <div class="vk-img vk-img--mw100">
                                    <a href="shop-detail.html" title="" class="vk-img__link">
                                        <img src="images/shop/shop-item-3.jpg" alt="" class="vk-img__img">
                                    </a>
                                </div>

                                <div class="vk-shopcart-item__brief">
                                    <h3 class="vk-shopcart-item__title"><a href="shop-detail.html" title="">Gucci Bamboo
                                        For Women EDP</a></h3>
                                </div>

                            </div> <!--./vk-shopcart-item-->
                        </td>
                        <td>
                            <div class="vk-shopcart__quantity">
                                <span class="d-lg-none">Số lượng: </span>
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
                            </div> <!--./vk-shopcart__quantity-->

                        </td>
                        <td>
                            <span class="vk-shopcart__price vk-text--yellow-1"><span class="d-lg-none">Thành tiền: </span>18.790.000đ</span>
                        </td>
                        <td>
                            <div class="vk-button">
                                <a href="#" class="vk-btn vk-btn--del">Xóa</a>
                            </div>
                        </td>
                    </tr>

                </table>

                <div class="vk-shopcart__total">
                    <div class="vk-shopcart__label">Tổn giá trị giỏ hàng</div>
                    <div class="vk-text--yellow-1">4.190.000 VNĐ</div>
                </div>

                <div class="vk-shopcart__button">
                    <a href="#" title="" class="vk-btn vk-btn--update">Cập nhật</a>
                    <a href="#" title="" class="vk-btn vk-btn--del">Xóa giỏ hàng</a>
                </div>


            </div>
            <!-- /.container -->
        </div> <!--./vk-shopcart-->


        <div class="vk-checkout">
            <div class="container">
                <div class="row" data-layout="">
                    <div class="col-lg-4">
                        <div class="vk-checkout__box">
                            <h3 class="vk-checkout__title">Thông tin đặt hàng</h3>


                            <div class="vk-checkout__form-info" id="needs-validation">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control unvalidated"
                                               placeholder="Họ tên khách hàng (*)" name="name" required="">
                                    </div>
                                </div> <!--./form-group-->

                                <div class="form-group">
                                    <div class="input-group">

                                        <input type="text" class="form-control unvalidated"
                                               placeholder="Địa chỉ nhận hàng (*)" name="address" required="">
                                    </div>
                                </div> <!--./form-group-->

                                <div class="form-group">
                                    <div class="input-group">


                                        <select name="province" id="sltProvince" class="form-control was-validated"
                                                required="">
                                            <option value="" hidden="hidden">Tỉnh/Thành phố (*)</option>

                                            <option value="0" data-name="Hà Nội">
                                                Hà Nội
                                            </option>
                                            <option value="0" data-name="Hồ Chí Minh">
                                                Hồ Chí Minh
                                            </option>

                                        </select>

                                        <input type="hidden" name="provincehidden" id="provincehidden" value="Đắk Lắk ">
                                    </div>
                                </div> <!--./form-group-->

                                <div class="form-group">
                                    <div class="input-group">

                                        <input type="tel" class="form-control unvalidated" name="phone"
                                               placeholder="Số điện thoại liên lạc (*)" required="">
                                    </div>
                                </div> <!--./form-group-->

                                <div class="form-group">
                                    <div class="input-group">

                                        <input type="email" class="form-control" placeholder="Email liên hệ"
                                               name="email">
                                    </div>
                                </div> <!--./form-group-->

                                <div class="form-group">
                                <textarea name="note" class="form-control"
                                          placeholder="Nội dung đặt hàng"></textarea>
                                </div> <!--./form-group-->

                                <div class="vk-note">(*) Thông tin bắt buộc</div>

                            </div> <!--./vk-checkout__form-info-->

                        </div> <!--./vk-checkout__box-->
                    </div> <!--./col-lg-4-->

                    <div class="col-lg-4">
                        <div class="vk-checkout__box pt-3 unavailable" id="step2">

                            <h3 class="vk-checkout__title">Phương thức thanh toán</h3>

                            <div class="vk-payment" id="paymentMethod">

                                <div class="vk-payment__item">
                                    <label class="custom-control custom-radio">
                                        <input id="radio1" name="radio" type="radio" checked="checked"
                                               class="custom-control-input" data-toggle="collapse"
                                               data-target="#method1" value="30000">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Thanh toán trực tiếp</span>
                                    </label>
                                    <div class="collapse show" id="method1" data-parent="#paymentMethod">
                                        <p class="vk-text">
                                        </p>
                                        <p>Nhân viên của chúng tôi giao hàng đến quý khách, quý khách sẽ thanh toán đầy
                                            đủ 100% số tiền trực tiếp cho nhân viên của chúng tôi.</p>
                                        <p></p>
                                    </div>

                                </div> <!--./vk-payment__item-->

                                <div class="vk-payment__item">
                                    <label class="custom-control custom-radio">
                                        <input id="radio2" name="radio" type="radio" class="custom-control-input"
                                               data-toggle="collapse" data-target="#method2" value="0">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Chuyển khoản ngân hàng</span>
                                    </label>

                                    <div class="collapse" id="method2" data-parent="#paymentMethod">
                                        <p class="vk-text">
                                        </p>
                                        <p>Hiện nay chúng tôi hỗ trợ thanh toán qua các ngân hàng sau:</p>
                                        <strong>Nội dung chuyển khoản: </strong>Thanh toán cho đơn hàng có mã: <b><span
                                            id="rand_digit">945087</span></b>

                                        <div class="vk-bank" id="bankList">
                                            <div class="vk-bank__item">
                                                <div class="vk-img vk-img--mw100">
                                                    <img src="images/bank/acb.png" alt="" title="" class="vk-img__img">
                                                </div>
                                                <div class="vk-bank__brief">
                                                    <p></p>
                                                    <p><strong>Số TK:</strong> 222135149</p>
                                                    <p><strong>Chủ&nbsp;TK:</strong>&nbsp;Nguyễn Thị Tâm</p>
                                                    <p><strong>Chi nhánh:</strong>&nbsp;Hà Nội</p>
                                                </div>
                                            </div> <!--./vk-bank-item-->

                                        </div> <!--./vk-bank-list-->
                                    </div>

                                </div> <!--./vk-method-->

                            </div>  <!--./vk-payment-method-->

                        </div> <!--./vk-checkout__box-->
                    </div> <!--./col-lg-4-->

                    <div class="col-lg-4 ">

                        <div class="vk-checkout__box  unavailable" id="step3">

                            <h3 class="vk-checkout__title"></h3>
                            <div class="vk-checkout__fee">
                                <input type="hidden" id="price" name="" value="590000">

                                <p><span>Tạm tính: </span> <span class="vk-text--yellow-1">590.000đ</span></p>
                                <p><span>Phí giao hàng: </span> <span class="vk-text--yellow-1">30.000đ</span></p>
                            </div>

                            <div class="vk-checkout__total">
                                <span>Tổng thanh toán: </span><span class="vk-checkout__payment vk-text--yellow-1">620.000đ</span>
                            </div>

                            <div class="vk-button">
                                <button class="vk-btn vk-btn--mod-2 text-uppercase" type="submit">Đặt hàng</button>
                            </div>

                        </div> <!--./vk-checkout__box-->

                    </div> <!--./col-lg-4-->

                    <div class="col">
                        <div class="vk-checkout__box">
                            <h3 class="vk-checkout__title">Địa chỉ liên hệ</h3>

                            <div class="vk-checkout__contact">

                                <ul class="vk-list vk-checkout__contact-list">
                                    <li class="vk-list__item">
                                        <i class="_icon fa fa-map-marker"></i>
                                        P1514 Tòa HH4C - KĐT Linh Đàm - Hoàng Liệt - Hoàng Mai - Hà Nội
                                    </li>
                                    <li class="vk-list__item">
                                        <i class="_icon fa fa-phone"></i>
                                        Điện thoại:
                                        <a href="callto:0962 243 656">0962 243 656</a>
                                    </li>
                                    <li class="vk-list__item">
                                        <i class="_icon fa fa-envelope"></i>
                                        Email: <a href="mailto:tamnguyen089@gmail.com">tamnguyen089@gmail.com</a>
                                    </li>
                                    <li class="vk-list__item">
                                        <i class="_icon fa fa-globe"></i>
                                        Website: <a href="http://beauty99.net.vn" target="_blank">beauty99.net.vn </a>
                                    </li>
                                </ul>

                            </div> <!--./vk-checkout__contact-->

                        </div> <!--./vk-checkout__box-->

                    </div> <!--./col-->
                </div>
            </div>

        </div>
    </div> <!--./vk-page-->

</section>
<script>
    window.token = '{{ csrf_token() }}';
</script>

@endsection
