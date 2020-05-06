@extends('public.themes.alibaba.layouts.public')
@section('vendor-css')
    <!-- CSS -->
    <link href="{{asset('alibaba/css/jquery.switch.css')}}" rel="stylesheet">

@endsection
@section('header')
    <style>
        @media (min-width: 979px) {
            #booking_box.affix-top {
                position: static;

            }

            #booking_box.affix {
                position: fixed;
                top: 80px;

            }
        }

        .affix, .affix-top {
            position: static;
        }
    </style>

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
                    <a href="cart_fixed_sidebar.html#0" class="bs-wizard-dot"></a>
                </div>

                <div class="col-xs-4 bs-wizard-step disabled">
                    <div class="text-center bs-wizard-stepnum">جزییات سفارش</div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a href="payment_fixed_sidebar.html" class="bs-wizard-dot"></a>
                </div>

                <div class="col-xs-4 bs-wizard-step disabled">
                    <div class="text-center bs-wizard-stepnum">پایان!</div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a href="confirmation.html" class="bs-wizard-dot"></a>
                </div>

            </div>  <!-- End bs-wizard -->
        </div>   <!-- End intro-title -->
    </section><!-- End Section hero_2 -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="cart_fixed_sidebar.html#">صفحه اصلی</a></li>
                <li><a href="cart_fixed_sidebar.html#">دسته بندی</a></li>
                <li>صفحه فعال</li>
            </ul>
        </div>
    </div><!-- End position -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8">
                <table class="table table-striped cart-list add_bottom_30">
                    <thead>
                        <tr>
                            <th>
                                مورد
                            </th>
                            <th>
                                مقدار
                            </th>
                            <th>
                                تخفیف
                            </th>
                            <th>
                                مجمع
                            </th>
                            <th>
                                اعمال
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="thumb_cart">
                                    <img src="img/thumb_cart_1.jpg" alt="">
                                </div>
                                <span class="item_cart">بلیط موزه اصفهان</span>
                            </td>
                            <td>
                                <div class="numbers-row">
                                    <input type="text" value="1" id="quantity_1" class="qty2 form-control" name="quantity_1">
                                </div>
                            </td>
                            <td>
                                ۰%
                            </td>
                            <td>
                                <strong>۵۰.۰۰۰ تومان</strong>
                            </td>
                            <td class="options">
                                <a href="cart_fixed_sidebar.html#"><i class=" icon-trash"></i></a><a href="cart_fixed_sidebar.html#"><i class="icon-ccw-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="thumb_cart">
                                    <img src="img/thumb_cart_1.jpg" alt="">
                                </div>
                                <span class="item_cart">تور برج میلاد</span>
                            </td>
                            <td>
                                <div class="numbers-row">
                                    <input type="text" value="0" id="quantity_2" class="qty2 form-control" name="quantity_2">
                                </div>
                            </td>
                            <td>
                                ۰%
                            </td>
                            <td>
                                <strong>۵۰.۰۰۰ تومان</strong>
                            </td>
                            <td class="options">
                                <a href="cart_fixed_sidebar.html#"><i class=" icon-trash"></i></a><a href="cart_fixed_sidebar.html#"><i class="icon-ccw-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="thumb_cart">
                                    <img src="img/thumb_cart_1.jpg" alt="">
                                </div>
                                <span class="item_cart">تور کیش</span>
                            </td>
                            <td>
                                <div class="numbers-row">
                                    <input type="text" value="1" id="quantity_3" class="qty2 form-control" name="quantity_3">
                                </div>
                            </td>
                            <td>
                                ۰%
                            </td>
                            <td>
                                <strong>۵۰.۰۰۰ تومان</strong>
                            </td>
                            <td class="options">
                                <a href="cart_fixed_sidebar.html#"><i class=" icon-trash"></i></a><a href="cart_fixed_sidebar.html#"><i class="icon-ccw-2"></i></a>
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
                            <td style="width:10%">
                                <i class="icon_set_1_icon-16"></i>
                            </td>
                            <td style="width:60%">
                                راهنمای تور اختصاصی <strong>+۱۰.۰۰۰ تومان</strong>
                            </td>
                            <td style="width:35%">
                                <label class="switch-light switch-ios pull-right">
                                    <input type="checkbox" name="option_1" id="option_1" checked value="">
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
                                <i class="icon_set_1_icon-71"></i>
                            </td>
                            <td>
                                بیمه <strong>+۵۰.۰۰۰ تومان</strong>
                            </td>
                            <td>
                                <label class="switch-light switch-ios pull-right">
                                    <input type="checkbox" name="option_3" id="option_3" value="" checked>
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
                                    <input type="checkbox" name="option_4" id="option_4" value="">
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
                                    <input type="checkbox" name="option_5" id="option_5" value="">
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

            <aside class="col-md-4" id="sidebar">
                <div class="theiaStickySidebar">
                    <div class="box_style_1">
                        <h3 class="inner">- خلاصه -</h3>
                        <table class="table table_summary">
                            <tbody>
                                <tr>
                                    <td>
                                        بزرگسالان
                                    </td>
                                    <td class="text-right">
                                        2
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        خردسالان
                                    </td>
                                    <td class="text-right">
                                        0
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        راهنمای تور اختصاصی
                                    </td>
                                    <td class="text-right">
                                        ۱۰۰.۰۰۰ تومان
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        بیمه
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
                                        ۲۰۰.۰۰۰ تومان
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a class="btn_full" href="payment_fixed_sidebar.html">اتمام خرید</a>
                        <a class="btn_full_outline" href="cart_fixed_sidebar.html#"><i class="icon-right"></i> ادامه خرید</a>
                    </div>
                </div><!-- End sitcky -->
            </aside><!-- End aside -->

        </div><!--End row -->
    </div><!--End container -->


@endsection

@section('footer')
    <!-- Fixed sidebar -->
    <script src="{{asset('alibaba/js/theia-sticky-sidebar.js')}}"></script>
    <script>
        jQuery('#sidebar').theiaStickySidebar({
            additionalMarginTop: 80
        });
    </script>

@endsection
