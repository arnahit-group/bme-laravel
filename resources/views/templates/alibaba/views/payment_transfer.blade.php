@extends('public.themes.alibaba.layouts.public')
@section('vendor-css')
    <!-- Radio and check inputs -->
    <link href="{{asset('alibaba/css/skins/square/grey.css')}}" rel="stylesheet">

@endsection
@section('header')

@endsection
@section('main')
    <section id="hero_2">
        <div class="intro_title animated fadeInDown">
            <h1>بصورت مستقیم سفارش دهید</h1>
            <div class="bs-wizard">

                <div class="col-xs-4 bs-wizard-step complete">
                    <div class="text-center bs-wizard-stepnum">سبد خرید شما</div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a href="cart_transfer.html" class="bs-wizard-dot"></a>
                </div>

                <div class="col-xs-4 bs-wizard-step active">
                    <div class="text-center bs-wizard-stepnum">جزییات سفارش</div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a href="payment_transfer.html#" class="bs-wizard-dot"></a>
                </div>

                <div class="col-xs-4 bs-wizard-step disabled">
                    <div class="text-center bs-wizard-stepnum">پایان!</div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a href="confirmation_transfer.html" class="bs-wizard-dot"></a>
                </div>

            </div>  <!-- End bs-wizard -->
        </div>   <!-- End intro-title -->
    </section><!-- End Section hero_2 -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="payment_transfer.html#">صفحه اصلی</a></li>
                <li><a href="payment_transfer.html#">دسته بندی</a></li>
                <li>صفحه فعال</li>
            </ul>
        </div>
    </div><!-- End position -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8 add_bottom_15">
                <div class="form_title">
                    <h3><strong>۱</strong>جزییات شما</h3>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                    </p>
                </div>
                <div class="step">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>نام</label>
                                <input type="text" class="form-control" id="firstname_booking" name="firstname_booking">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>نام خانوادگی</label>
                                <input type="text" class="form-control" id="lastname_booking" name="lastname_booking">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>پست الکترونیک</label>
                                <input type="email" id="email_booking" name="email_booking" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>تایید پست الکترونیک</label>
                                <input type="email" id="email_booking_2" name="email_booking_2" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>تلفن</label>
                                <input type="text" id="telephone_booking" name="telephone_booking" class="form-control">
                            </div>
                        </div>
                    </div>
                </div><!--End step -->

                <div class="form_title">
                    <h3><strong>۲</strong>اطلاعات پرداخت</h3>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                    </p>
                </div>
                <div class="step">
                    <div class="form-group">
                        <label>نام روی کارت</label>
                        <input type="text" class="form-control" id="name_card_bookign" name="name_card_bookign">
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>شماره کارت</label>
                                <input type="text" id="card_number" name="card_number" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <img src="img/cards.png" width="207" height="43" alt="Cards" class="cards">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>تاریخ انقضا</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="expire_month" name="expire_month" class="form-control" placeholder="ماه">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="expire_year" name="expire_year" class="form-control" placeholder="سال">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>کد امنیتی</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" id="ccv" name="ccv" class="form-control" placeholder="CCV">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <img src="img/icon_ccv.gif" width="50" height="29" alt="ccv">
                                        <small>۳ رقم آخر</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--End row -->

                    <hr>

                    <h4>و یا پرداخت با پی پال</h4>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </p>
                    <p>
                        <img src="img/paypal_bt.png" alt="">
                    </p>
                </div><!--End step -->

                <div class="form_title">
                    <h3><strong>۳</strong>آدرس قبض</h3>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                    </p>
                </div>
                <div class="step">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>کشور</label>
                                <select class="form-control" name="country" id="country">
                                    <option value="" selected>کشور خود را انتخاب کنید</option>
                                    <option value="ایران">ایران</option>
                                    <option value="ایالات متحده">ایالات متحده</option>
                                    <option value="آسیا">آسیا</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>خیابان خط ۱</label>
                                <input type="text" id="street_1" name="street_1" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>خیابان خط ۲</label>
                                <input type="text" id="street_2" name="street_2" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>شهر</label>
                                <input type="text" id="city_booking" name="city_booking" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>استان</label>
                                <input type="text" id="state_booking" name="state_booking" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>کد پستی</label>
                                <input type="text" id="postal_code" name="postal_code" class="form-control">
                            </div>
                        </div>
                    </div><!--End row -->
                </div><!--End step -->

                <div id="policy">
                    <h4>قبول قوانین و مقررات</h4>
                    <div class="form-group">
                        <label><input type="checkbox" name="policy_terms" id="policy_terms">من تمام قوانین را خوانده و قبول دارم.</label>
                    </div>
                    <a href="confirmation.html" class="btn_1 green medium">ثبت </a>
                </div>
            </div>

            <aside class="col-md-4">
                <div class="box_style_1">
                    <h3 class="inner">- خلاصه -</h3>
                    <table class="table table_summary">
                        <tbody>
                            <tr>
                                <td>
                                    تاریخ
                                </td>
                                <td class="text-right">
                                    ۲ اردیبهشت ۱۳۹۶
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    زمان
                                </td>
                                <td class="text-right">
                                    ۱۲.۰۰ صبح
                                </td>
                            </tr>
                            <tr>
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
                                    انتخاب شده
                                </td>
                                <td class="text-right">
                                    فرودگاه مهرآباد
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    محل اقامت
                                </td>
                                <td class="text-right">
                                    هتل قدس مشهد
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
                    <a class="btn_full" href="confirmation_transfer.html">ثبت سفارش</a>
                    <a class="btn_full_outline" href="payment_transfer.html#"><i class="icon-right"></i> ادامه خرید</a>
                </div>
                <div class="box_style_4">
                    <i class="icon_set_1_icon-57"></i>
                    <h4>درخواست <span>کمک؟</span></h4>
                    <a href="http://ipixels.ir/demo/alibaba/%D8%AA%D9%84%D9%81%D9%86%20%D8%AA%D9%85%D8%A7%D8%B3:/%DB%B0%DB%B7%DB%B6%DB%B3%DB%B2%DB%B0%DB%B0%DB%B0%DB%B0%DB%B0%DB%B0"
                       class="تلفن">۰۷۶۳۲۰۰۰۰۰۰</a>
                    <small>شنبه تا پنجشنبه از ساعت ۰۷:۰۰ الی ۲۳:۰۰</small>
                </div>
            </aside>

        </div><!--End row -->
    </div><!--End container -->

@endsection

@section('footer')
    <!-- Specific scripts -->
    <script src="{{asset('alibaba/js/icheck.js')}}"></script>
    <script>
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-grey',
            radioClass: 'iradio_square-grey'
        });
    </script>

@endsection
