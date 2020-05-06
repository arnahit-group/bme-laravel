@extends('public.themes.alibaba.layouts.public')
@section('vendor-css')
    <!-- SPECIFIC CSS -->
    <link href="{{asset('alibaba/css/shop.css')}}" rel="stylesheet">
    <!-- Range slider -->
    <link href="{{asset('alibaba/css/ion.rangeSlider.css')}}" rel="stylesheet">
    <link href="{{asset('alibaba/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">

@endsection
@section('header')

@endsection
@section('main')
    <section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>سبد خرید</h1>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
            </div>
        </div>
    </section><!-- End Section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="checkout.html#">صفحه اصلی</a></li>
                <li><a href="checkout.html#">دسته بندی</a></li>
                <li>صفحه فعال</li>
            </ul>
        </div>
    </div><!-- End Position -->

    <div class="container margin_60">
        <div class="checkout-page">

            <ul class="default-links">
                <li>آیا حساب کاربری دارید ؟ <a href="checkout.html#">برای ورود کلیک کنید</a></li>
            </ul>

            <div class="row">
                <div class="col-md-7 col-sm-12 col-xs-12">

                    <div class="billing-details">
                        <div class="shop-form">
                            <form method="post">
                                <div class="default-title">
                                    <h2>جزئیات صورتحساب</h2>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label>نام <sup>*</sup></label>
                                        <input type="text" name="field-name" value="" placeholder="" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label>نام خانوادگی <sup>*</sup></label>
                                        <input type="text" name="field-name" value="" placeholder="" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label>نام شرکت</label>
                                        <input type="text" name="field-name" value="" placeholder="" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label>آدرس ایمیل <sup>*</sup></label>
                                        <input type="email" name="field-name" value="" placeholder="" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label>تلفن <sup>*</sup></label>
                                        <input type="text" name="field-name" value="" placeholder="" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label>نشانی <sup>*</sup></label>
                                        <input type="text" name="field-name" value="" placeholder="" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label>کشور <sup>*</sup></label>
                                        <select name="country" class="form-control">
                                            <option>ایران (IR)</option>
                                            <option>آمریکا</option>
                                            <option>آلمان</option>
                                            <option>کانادا</option>
                                            <option>هند</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label> کد پستی</label>
                                        <input type="text" name="code" value="" placeholder="کد پستی" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label>شهر <sup>*</sup></label>
                                        <select name="state" class="form-control">
                                            <option>تهران</option>
                                            <option>بندرعباس</option>
                                            <option>اصفهان</option>
                                            <option>شیراز</option>
                                            <option>مشهد</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="check-box">
                                            <input type="checkbox" name="shipping-option" id="account-option"> &ensp; <label for="account-option">ایجاد یک حساب کاربری ؟</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label>توضیحات سفارش</label>
                                        <textarea placeholder="نکاتی در مورد سفارش خود را درج کنید" class="form-control"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!--End Billing Details-->
                </div><!--End Col-->

                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="your-order">
                        <div class="default-title">
                            <h2>سفارش شما</h2>
                        </div>
                        <ul class="orders-table">
                            <li class="table-header clearfix">
                                <div class="col">
                                    <strong>تولید - محصول</strong>
                                </div>
                                <div class="col">
                                    <strong>مجمع</strong>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="col" style="text-transform:none;">
                                    <img src="img/products/thumb-1.jpg" width="50" height="50" alt=""> راهنمای سفرهای جهانی
                                </div>
                                <div class="col second">
                                    ۲۰.۰۰۰ تومان
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="col" style="text-transform:none;">
                                    جمع جزء
                                </div>
                                <div class="col second">
                                    ۲۰.۰۰۰ تومان
                                </div>
                            </li>
                            <li class="clearfix total">
                                <div class="col">
                                    <strong>جمع کل سفارش</strong>
                                </div>
                                <div class="col second">
                                    <strong>۳۰.۰۰۰ تومان</strong>
                                </div>
                            </li>
                        </ul>
                        <div class="coupon-code">
                            <div class="form-group">
                                <div class="field-group">
                                    <input type="text" name="code" value="" placeholder="کد تخفیف" class="form-control">
                                </div>
                                <div class="field-group btn-field">
                                    <button type="submit" class="btn_cart_outine">درخواست</button>
                                </div>
                            </div>
                        </div>
                    </div><!--End Your Order-->

                    <div class="place-order">
                        <div class="default-title">
                            <h2>روش پرداخت</h2>
                        </div>
                        <div class="payment-options">
                            <ul>
                                <li>
                                    <div class="radio-option">
                                        <input type="radio" name="payment-group" id="payment-1">
                                        <label for="payment-1">پرداخت چک<span class="small-text">لطفا چک خود را به آدرس ... کد پستی ... شهر ... ارسال فرمایید</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-option">
                                        <input type="radio" name="payment-group" id="payment-2">
                                        <label for="payment-2">انتقال مستقیم بانک</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-option">
                                        <input type="radio" name="payment-group" id="payment-3">
                                        <label for="payment-3">پی پال<img src="img/credit-card-icon.png" alt=""></label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <button type="button" class="btn_full">تایید سفارش <i class="icon-left"></i></button>
                    </div><!--End Place Order-->

                </div>
            </div>
        </div>
    </div><!-- End Container -->

@endsection

@section('footer')
    <script>
        if ($('.prod-tabs .tab-btn').length) {
            $('.prod-tabs .tab-btn').on('click', function (e) {
                e.preventDefault();
                var target = $($(this).attr('href'));
                $('.prod-tabs .tab-btn').removeClass('active-btn');
                $(this).addClass('active-btn');
                $('.prod-tabs .tab').fadeOut(0);
                $('.prod-tabs .tab').removeClass('active-tab');
                $(target).fadeIn(500);
                $(target).addClass('active-tab');
            });

        }
    </script>


@endsection
