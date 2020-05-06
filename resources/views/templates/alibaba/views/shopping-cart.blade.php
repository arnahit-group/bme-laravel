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
                <li><a href="shopping-cart.html#">صفحه اصلی</a></li>
                <li><a href="shopping-cart.html#">دسته بندی</a></li>
                <li>صفحه فعال</li>
            </ul>
        </div>
    </div><!-- End Position -->

    <div class="container margin_60">
        <div class="cart-section">
            <table class="table table-striped cart-list shopping-cart">
                <thead>
                    <tr>
                        <th>
                            محصول
                        </th>
                        <th>
                            قیمت
                        </th>
                        <th>
                            مقدار
                        </th>
                        <th>
                            جمع
                        </th>
                        <th>
                            حذف کردن
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="thumb_cart">
                                <a href="shopping-cart.html#"><img src="img/products/thumb-3.jpg" alt=""></a>
                            </div>
                            <strong class="item_cart">راهنمای سفر جلد یک</strong>
                        </td>
                        <td>
                            <strong>۵۰.۰۰۰ تومان</strong>
                        </td>
                        <td>
                            <div class="numbers-row">
                                <input type="text" value="1" id="quantity_1" class="qty2 form-control" name="quantity_1">
                            </div>
                        </td>
                        <td>
                            <strong>۵۰.۰۰۰ تومان</strong>
                        </td>
                        <td class="options">
                            <a href="shopping-cart.html#"><i class=" icon-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="thumb_cart">
                                <a href="shopping-cart.html#"><img src="img/products/thumb-1.jpg" alt=""></a>
                            </div>
                            <strong class="item_cart">راهنمای سفر جلد دو</strong>
                        </td>
                        <td>
                            <strong>۵۰.۰۰۰ تومان</strong>
                        </td>
                        <td>
                            <div class="numbers-row">
                                <input type="text" value="1" id="quantity_2" class="qty2 form-control" name="quantity_2">
                            </div>
                        </td>
                        <td>
                            <strong>۵۰.۰۰۰ تومان</strong>
                        </td>
                        <td class="options">
                            <a href="shopping-cart.html#"><i class=" icon-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="cart-options clearfix">
                <div class="pull-left">
                    <div class="apply-coupon">
                        <div class="form-group">
                            <input type="text" name="coupon-code" value="" placeholder="کد کوپن خود را وارد کنید" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn_cart_outine">بررسی کوپن</button>
                        </div>
                    </div>
                </div>
                <div class="pull-right fix_mobile">
                    <button type="button" class="btn_cart_outine">بروزرسانی سبد خرید</button>
                </div>
            </div>
            <div class="row">
                <div class="column pull-right col-md-4 col-sm-6 col-xs-12">
                    <ul class="totals-table">
                        <li class="clearfix"><span class="col">جمع جزء</span><span class="col">۵۰.۰۰۰ تومان</span></li>
                        <li class="clearfix total"><span class="col">سفارش ها</span><span class="col">۵۰.۰۰۰ تومان</span></li>
                    </ul>
                    <a href="checkout.html" class="btn_full">پایان و پرداخت <i class="icon-left"></i></a>
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
