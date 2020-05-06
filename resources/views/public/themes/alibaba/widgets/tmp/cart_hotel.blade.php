@extends('public.themes.alibaba.layouts.public')
@section('vendor-css')
    <!-- CSS -->
    <link href="{{asset('alibaba/css/jquery.switch.css')}}" rel="stylesheet">
    <link href="{{asset('alibaba/css/owl.carousel.css')}}" rel="stylesheet">

@endsection
@section('header')

@endsection
@section('main')
    <section id="hero_2">
        <div class="intro_title animated fadeInDown">
            <h1>بصورت مستقیم سفارش دهید</h1>
            <div class="bs-wizard">

                <div class="col-xs-4 bs-wizard-step active">
                    <div class="text-center bs-wizard-stepnum">سبد خرید شما</div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a href="cart_hotel.html#" class="bs-wizard-dot"></a>
                </div>

                <div class="col-xs-4 bs-wizard-step disabled">
                    <div class="text-center bs-wizard-stepnum">جزییات سفارش</div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a href="payment_hotel.html" class="bs-wizard-dot"></a>
                </div>

                <div class="col-xs-4 bs-wizard-step disabled">
                    <div class="text-center bs-wizard-stepnum">پایان!</div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a href="confirmation_hotel.html" class="bs-wizard-dot"></a>
                </div>

            </div>  <!-- End bs-wizard -->
        </div>   <!-- End intro-title -->
    </section><!-- End Section hero_2 -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="cart_hotel.html#">صفحه اصلی</a></li>
                <li><a href="cart_hotel.html#">دسته بندی</a></li>
                <li>صفحه فعال</li>
            </ul>
        </div>
    </div><!-- End position -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8">
                <div class="alert alert-info" role="alert"><strong>اتاق های موجود</strong> برای این تاریخ<br>لطفا تعداد اتاق ها را مشخص کنید.</div>
                <table class="table table-striped cart-list add_bottom_30">
                    <thead>
                        <tr>
                            <th>
                                نوع اتاق
                            </th>
                            <th>
                                مقدار
                            </th>
                            <th>
                                هر شب
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="thumb_cart">
                                    <a href="cart_hotel.html#" data-toggle="modal" data-target="#modal_single_room"><img src="img/thumb_cart_1.jpg" alt=""></a>
                                </div>
                                <span class="item_cart"><a href="cart_hotel.html#" data-toggle="modal" data-target="#modal_single_room">اتاق تک نفره</a></span>
                            </td>
                            <td>
                                <div class="numbers-row">
                                    <input type="text" value="0" id="quantity_1" class="qty2 form-control" name="quantity_1">
                                </div>
                            </td>
                            <td>
                                <strong>۲۵۰.۰۰۰ تومان</strong>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="thumb_cart">
                                    <a href="cart_hotel.html#" data-toggle="modal" data-target="#modal_double_room"><img src="img/thumb_cart_1.jpg" alt=""></a>
                                </div>
                                <span class="item_cart"><a href="cart_hotel.html#" data-toggle="modal" data-target="#modal_double_room">اتاق دو نفره</a></span>
                            </td>
                            <td>
                                <div class="numbers-row">
                                    <input type="text" value="0" id="quantity_2" class="qty2 form-control" name="quantity_2">
                                </div>
                            </td>
                            <td>
                                <strong>۵۰۰.۰۰۰ تومان</strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-striped options_cart">
                    <thead>
                        <tr>
                            <th colspan="3">
                                اضافه کردن گزینه ها / خدمات
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <i class="icon_set_1_icon-26"></i>
                            </td>
                            <td>
                                خدمات نقل و انتقالات <strong>+۱۰.۰۰۰ تومان</strong>
                            </td>
                            <td>
                                <label class="switch-light switch-ios pull-right">
                                    <input type="checkbox" name="option_2" id="option_2" value="">
                                    <span>
                    <span>نه</span>
                    <span>بله</span>
                    </span>
                                    <a></a>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="icon_set_1_icon-15"></i>
                            </td>
                            <td>
                                نوشیدنی ها <strong>+۲۰.۰۰۰ تومان</strong>
                            </td>
                            <td>
                                <label class="switch-light switch-ios pull-right">
                                    <input type="checkbox" name="option_4" id="option_4" value="" checked>
                                    <span>
                    <span>نه</span>
                    <span>بله</span>
                    </span>
                                    <a></a>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="icon_set_1_icon-59"></i>
                            </td>
                            <td>
                                نوشیدن قهوه <strong>+۴۰.۰۰۰ تومان</strong>
                            </td>
                            <td>
                                <label class="switch-light switch-ios pull-right">
                                    <input type="checkbox" name="option_5" id="option_5" value="" checked>
                                    <span>
                    <span>نه</span>
                    <span>بله</span>
                    </span>
                                    <a></a>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="icon_set_1_icon-58"></i>
                            </td>
                            <td>
                                شام <strong>+۸۰.۰۰۰ تومان</strong>
                            </td>
                            <td>
                                <label class="switch-light switch-ios pull-right">
                                    <input type="checkbox" name="option_6" id="option_6" value="">
                                    <span>
                    <span>نه</span>
                    <span>بله</span>
                    </span>
                                    <a></a>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="icon_set_1_icon-40"></i>
                            </td>
                            <td>
                                اجاره دوچرخه <strong>+۳۰.۰۰۰ تومان</strong>
                            </td>
                            <td>
                                <label class="switch-light switch-ios pull-right">
                                    <input type="checkbox" name="option_7" id="option_7" value="">
                                    <span>
                    <span>نه</span>
                    <span>بله</span>
                    </span>
                                    <a></a>
                                </label>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="add_bottom_15">
                    <small>* قیمت برای هر نفر</small>
                </div>
            </div><!-- End col-md-8 -->

            <aside class="col-md-4">
                <div class="box_style_1">
                    <h3 class="inner">- خلاصه -</h3>
                    <table class="table table_summary">
                        <tbody>
                            <tr>
                                <td>
                                    بررسی در
                                </td>
                                <td class="text-right">
                                    ۲ اردیبهشت ۱۳۹۶
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    چک کردن
                                </td>
                                <td class="text-right">
                                    ۲ اردیبهشت ۱۳۹۶
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    اتاق
                                </td>
                                <td class="text-right">
                                    ۱ اتاق دو نفره
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    شب
                                </td>
                                <td class="text-right">
                                    ۲
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    بزرگسالان
                                </td>
                                <td class="text-right">
                                    ۲
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    خردسالان
                                </td>
                                <td class="text-right">
                                    ۰
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    نوشیدنی ها
                                </td>
                                <td class="text-right">
                                    ۱۰۰.۰۰۰ تومان
                                </td>
                            </tr>
                            <tr class="total">
                                <td>
                                    هزینه کل
                                </td>
                                <td class="text-right">
                                    ۵۰۰.۰۰۰ تومان
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a class="btn_full" href="payment_hotel.html">اکنون ثبت کن</a>
                    <a class="btn_full_outline" href="single_hotel.html"><i class="icon-right"></i> اصلاح کردن</a>
                </div>
                <div class="box_style_4">
                    <i class="icon_set_1_icon-57"></i>
                    <h4>درخواست <span>کمک ؟</span></h4>
                    <a href="http://ipixels.ir/demo/alibaba/%D8%AA%D9%84%D9%81%D9%86:/%DB%B0%DB%B0%DB%B4%DB%B5%DB%B4%DB%B2%DB%B3%DB%B4%DB%B4%DB%B5%DB%B9%DB%B9" class="phone">۰۷۶-۳۲۵۶۸۴۲۶</a>
                    <small>شنبه تا پنجشنبه از ساعت ۷:۰۰الی۲۳:۰۰</small>
                </div>
            </aside><!-- End aside -->

        </div><!--End row -->
    </div><!--End container -->

@endsection

@section('footer')

@endsection
